<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\GalleryCategory;
use App\Models\GalleryImages;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = GalleryImages::with(['category'])->orderBy('updated_at', 'desc')->get();
        return view('admin.gallery.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = GalleryCategory::where('is_active', '1')->get();
        return view('admin.gallery.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => 'image|mimes:jpg,jpeg,png|max:300|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080',

        ]);

        DB::beginTransaction();
        try {
            $banner = new GalleryImages;
            // $banner->heading=$request->heading;
            // $banner->sub_heading=$request->sub_heading;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'galleryImages');
                $banner->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $banner->image_alt = $request->image_alt;
            $banner->gallery_categories_id = $request->gallery_categories_id;

            $banner->save();
            DB::commit();
            Session::flash('success', 'Gallery created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-gallery.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-gallery.index');
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
    public function show(Request $request, string $id)
    {
        // dd($request->all());
        $banner = GalleryImages::find($id);
        $banner->is_active = $request->status;
        $banner->updated_at = now();
        $banner->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = GalleryImages::where('id', $id)->first();
        $category = GalleryCategory::where('is_active', '1')->get();
        return view('admin.gallery.edit', compact('banner', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            // 'heading' => 'required',
            // 'sub_heading' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:300|dimensions:min_width=1080,min_height=1080,max_width=1080,max_height=1080',
            // 'button_text' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $banner = GalleryImages::find($id);
            // $banner->heading=$request->heading;
            // $banner->sub_heading=$request->sub_heading;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'GalleryImages');
                $banner->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $banner->image_alt = $request->image_alt;
            $banner->gallery_categories_id = $request->gallery_categories_id;

            $banner->updated_at = now();
            $banner->save();
            DB::commit();
            Session::flash('success', 'Gallery updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-gallery.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-gallery.index');
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
        GalleryImages::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
