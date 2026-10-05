<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Category;
use App\Models\StaticPageSeoManage;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Products::with(['product_category'])->orderBy('updated_at', 'desc')->get();
        // return $blog = Blog::with(['blog_category.category_name' => function ($query) {
        //     $query->where('is_active', 1);
        // }])->orderBy('created_at', 'desc')->get();
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::where('is_active','1')->get();
        return view('admin.product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:products,name',
            'slug' => 'required|unique:products,slug',
            'category_id' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:200|dimensions:min_width=590,min_height=637,max_width=591,max_height=638',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'meta_og' => 'required',
            // 'blog_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $product = new Products;
        $product->name=$request->name;
        // $blog->type='blog';
        $product->slug=Str::slug($request->slug,'-');
        $product->category_id=$request->category_id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'productImages');
            $product->image= $filename;
            // $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $product->image_alt=$request->image_alt;
        $product->short_description=$request->short_description;
        $product->long_description=$request->long_description;
        $product->rating=$request->rating;
        $product->type=$request->type;
        $product->price=$request->price;
        $product->discount=$request->discount;

        $product->meta_title=$request->meta_title;
        $product->meta_description=$request->meta_description;
        $product->meta_keyword=$request->meta_keyword;
        $product->meta_og=$request->meta_og;
        $product->save();

        DB::commit();
        Session::flash('success', 'Product created successfully');
        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.manage-product.index');
        }

     } catch (\Throwable $th) {
         // Rollback and return with Error
         DB::rollBack();
         return redirect()->back()->withInput()->with('error', $th->getMessage());
     }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        // dd($request->all());
        $product=Products::find($id);
        $product->is_active=$request->status;
        $product->updated_at=now();
        $product->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $product = Products::with(['product_category'])->where('slug',$slug)->first();
        $category=Category::where('is_active','1')->get();
        return view('admin.product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:products,name,'.$id,
            'slug' => 'required|unique:products,slug,'.$id,
            'category_id' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:200|dimensions:min_width=590,min_height=637,max_width=591,max_height=638',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'meta_og' => 'required',
        ]);
      
        DB::beginTransaction();
        try {

        $product = Products::find($id);
        $product->name=$request->name;
        // $blog->type='blog';
        $product->slug=Str::slug($request->slug,'-');
        $product->category_id=$request->category_id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'productImages');
            $product->image= $filename;
            // $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $product->image_alt=$request->image_alt;
        $product->short_description=$request->short_description;
        $product->long_description=$request->long_description;
        $product->rating=$request->rating;
        $product->type=$request->type;
        $product->price=$request->price;
        $product->discount=$request->discount;

        $product->meta_title=$request->meta_title;
        $product->meta_description=$request->meta_description;
        $product->meta_keyword=$request->meta_keyword;
        $product->meta_og=$request->meta_og;
        $product->save();

        DB::commit();
        Session::flash('success', 'Product updated successfully');
        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.manage-product.index');
        }
        

     } catch (\Throwable $th) {
         // Rollback and return with Error
         DB::rollBack();
         return redirect()->back()->withInput()->with('error', $th->getMessage());
     }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::where('id', $id)->delete();
        return response()->json(['success' => 'Product deleted successfully!']);
    }


    public function bloglist()
    {
        $product = Products::where('is_active','1')->orderBy('updated_at', 'desc')->paginate(10); // Change the number of items per page as needed
        // $MetaOg=StaticPageSeoManage::where('id',1)->first()->blog_meta_og;
        // return view('data.index', compact('data'));
        return view('guest.product.listing', compact('product'));
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
            $product = Products::with(['product_category'])->where('slug',$slug)->where('is_active','1')->first();
            $pageData = Products::where('slug',$slug)->where('is_active','1')->first();
            $MetaOg = $pageData->meta_og;
            if (!$product) {
                abort(404);
            }
            return view('guest.product.detail',compact('product','pageData','MetaOg'));
        } catch (\Throwable $th) {
                   
            return redirect()->back()->with('error', $th->getMessage());
        }
        
        
    }
}
