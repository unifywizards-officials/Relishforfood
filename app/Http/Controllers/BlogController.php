<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use App\Models\BlogCategory;
use App\Models\StaticPageSeoManage;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::with(['blog_category.category_name', 'user'])->orderBy('updated_at', 'desc')->get();
        // return $blog = Blog::with(['blog_category.category_name' => function ($query) {
        //     $query->where('is_active', 1);
        // }])->orderBy('created_at', 'desc')->get();
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::where('is_active', '1')->get();
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Step 1: Basic validation for types, MIME, and file size
        $request->validate([
            'heading' => 'required|unique:blogs,heading',
            'slug' => 'required|unique:blogs,slug',
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:300',
            'image_main' => 'image|mimes:jpg,jpeg,png,webp|max:300',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'faq_schema' => 'nullable|json',
            // 'meta_og' => 'required',
        ]);

        // Step 2: Exact dimension checks
        if ($request->hasFile('image')) {
            [$width, $height] = getimagesize($request->file('image'));
            if ($width !== 330 || $height !== 235) {
                return back()->withInput()->withErrors(['image' => 'Image must be exactly 330x235 pixels.']);
            }
        }

        if ($request->hasFile('image_main')) {
            [$width, $height] = getimagesize($request->file('image_main'));
            if ($width !== 783 || $height !== 400) {
                return back()->withInput()->withErrors(['image_main' => 'Main image must be exactly 783x400 pixels.']);
            }
        }

        DB::beginTransaction();
        try {
            $blog = new Blog;
            $blog->heading = $request->heading;
            $blog->slug = Str::slug($request->slug, '-');

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'blogImages');
                $blog->image = $filename;
            }
            $blog->image_alt = $request->image_alt;

            if ($request->file('image_main')) {
                $file = $request->file('image_main');
                $filename = uploadImage($file, 'blogImages');
                $blog->blog_image = $filename;
            }
            $blog->blog_image_alt = $request->image_main_alt;

            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->publish_date = $request->publish_date;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->meta_og = $request->meta_og;
             $blog->faq_schema = $request->faq_schema;
            $blog->save();

            foreach ($request->input('blog_category', []) as $category) {
                $blogCategory = new BlogCategory;
                $blogCategory->blogs_id = $blog->id;
                $blogCategory->blog_categories_id = $category;
                $blogCategory->save();
            }

            DB::commit();
            Session::flash('success', 'Blog created successfully');

            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-blog.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-blog.index');
            } elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.manage-blog.index');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        // dd($request->all());
        $blog = Blog::find($id);
        $blog->is_active = $request->status;
        $blog->updated_at = now();
        $blog->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $blog = Blog::with(['blog_category'])->where('slug', $slug)->first();
        $category = Category::where('is_active', '1')->get();
        $selectedCategory = $blog->blog_category->pluck('blog_categories_id')->toArray();
        return view('admin.blog.edit', compact('blog', 'category', 'selectedCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Step 1: Basic validation for required fields and file type/size
        $request->validate([
            'heading' => 'required|unique:blogs,heading,' . $id,
            'slug' => 'required|unique:blogs,slug,' . $id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:300',
            'blog_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:300',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'faq_schema' => 'nullable|json',
            // 'meta_og' => 'required',
        ]);

        // Step 2: Exact dimension checks (only if new file is uploaded)
        if ($request->hasFile('image')) {
            [$width, $height] = getimagesize($request->file('image'));
            if ($width !== 330 || $height !== 235) {
                return back()->withInput()->withErrors(['image' => 'Image must be exactly 330x235 pixels.']);
            }
        }

        if ($request->hasFile('blog_image')) {
            [$width, $height] = getimagesize($request->file('blog_image'));
            if ($width !== 783 || $height !== 400) {
                return back()->withInput()->withErrors(['blog_image' => 'Main image must be exactly 783x400 pixels.']);
            }
        }

        DB::beginTransaction();
        try {
            $blog = Blog::findOrFail($id);
            $blog->heading = $request->heading;
            $blog->slug = Str::slug($request->slug, '-');

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'blogImages');
                $blog->image = $filename;
            }
            $blog->image_alt = $request->image_alt;

            if ($request->file('image_main')) {
                $file = $request->file('image_main');
                $filename = uploadImage($file, 'blogImages');
                $blog->blog_image = $filename;
            }
            $blog->blog_image_alt = $request->image_main_alt;

            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->publish_date = $request->publish_date;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->meta_og = $request->meta_og;
            $blog->faq_schema = $request->faq_schema;
            $blog->updated_at = now();
            $blog->save();

            BlogCategory::where('blogs_id', $blog->id)->delete();
            foreach ($request->input('blog_category', []) as $category) {
                $blogCategory = new BlogCategory;
                $blogCategory->blogs_id = $blog->id;
                $blogCategory->blog_categories_id = $category;
                $blogCategory->save();
            }

            DB::commit();
            Session::flash('success', 'Blog updated successfully');
            return match (Auth::user()->role) {
                'admin' => redirect()->route('admin.manage-blog.index'),
                'event-manager' => redirect()->route('event-manager.manage-blog.index'),
                'seo-manager' => redirect()->route('seo-manager.manage-blog.index'),
                default => redirect()->back(),
            };
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::where('id', $id)->delete();
        return response()->json(['success' => 'Blog deleted successfully!']);
    }


    public function bloglist()
    {
        $blog = Blog::where('is_active', '1')->orderBy('publish_date', 'desc')->paginate(10); // Change the number of items per page as needed
        // $MetaOg=StaticPageSeoManage::where('id',1)->first()->blog_meta_og;
        // return view('data.index', compact('data'));
        return view('guest.blog.listing', compact('blog'));
    }

    public function searchData(Request $request)
    {
        $query = $request->input('query');
        $data = Blog::where('column_name', 'like', '%' . $query . '%')->paginate(10);
        return view('data.partial', compact('data'));
    }


    public function blogDetail(Request $request, string $slug)
    {
        try {
            $blog = Blog::with(['blog_category.category_name'])->where('slug', $slug)->where('is_active', '1')->first();
            $pageData = Blog::where('slug', $slug)->where('is_active', '1')->first();
            // $related_blog = Blog::inRandomOrder()->take(3)->get();
            $related_blog = Blog::latest()->take(3)->get();
            $MetaOg = $pageData->meta_og;
            if (!$blog) {
                abort(404);
            }
            
            
            
                $json = $blog->faq_schema;

            // Convert JSON string to PHP array
            $data = json_decode($json, true);
            
            // Sirf FAQs nikal lo
               $faqs = $data['mainEntity'] ?? [];
            
            return view('guest.blog.detail', compact('blog', 'pageData', 'MetaOg', 'related_blog','faqs'));
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
