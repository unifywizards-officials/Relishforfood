<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GalleryCategory;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class GalleryCategoryController extends Controller
{
    public function index()
    {
        $category = GalleryCategory::orderBy('created_at', 'desc')->get();
        return view('admin.gallery-category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:gallery_categories,name',
        ]);

        DB::beginTransaction();
        try {
            $category = new GalleryCategory;
            $category->name = $request->name;
            $category->slug = Str::slug($request->name, '-');
            $category->save();
            DB::commit();
            Session::flash('success', 'Gallery category created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-gallery-category.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-gallery-category.index');
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
        $category = GalleryCategory::find($id);
        $category->is_active = $request->status;
        $category->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = GalleryCategory::find($id);
        return view('admin.gallery-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:gallery_categories,name,' . $id,

        ]);

        DB::beginTransaction();
        try {

            $category = GalleryCategory::find($id);
            $category->name = $request->name;
            $category->slug = Str::slug($request->name, '-');
            $category->save();
            DB::commit();
            Session::flash('success', 'Gallery category updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-gallery-category.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-gallery-category.index');
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
    public function destroy(Request $request, $id)
    {
        // return $request->all();die();
        GalleryCategory::find($id)->update(['is_active' => $request->status]);
        return response()->json(['success' => 'Status changed successfully!']);
    }
}
