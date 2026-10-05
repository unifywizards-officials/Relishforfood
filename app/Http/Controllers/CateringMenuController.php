<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\CateringMenu;

class CateringMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = CateringMenu::orderBy('order_position')->get();
        return view('admin.catering-menu.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.catering-menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:catering_menus,name',
            // 'image' => 'required|image|mimes:jpg,jpeg,png|max:200',
            'image' => 'required|image|mimes:svg|max:300',
            'description' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $menu = new CateringMenu;
            $menu->name = $request->name;
            $menu->slug = Str::slug($request->name, '-');
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'CateringMenuImages');
                $menu->image = $filename;
            }
            $menu->image_alt = $request->image_alt;
            $menu->description = $request->description;
            $menu->is_popular = $request->is_popular;
            $menu->save();
            DB::commit();
            Session::flash('success', 'Catering menu created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-catering-menu.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-catering-menu.index');
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
        $banner = CateringMenu::find($id);
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
        $banner = CateringMenu::find($id);
        return view('admin.catering-menu.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:catering_menus,name,' . $id,
            // 'image' => 'image|mimes:jpg,jpeg,png|max:200',
            'image' => 'image|mimes:svg|max:5300',
            'description' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $menu = CateringMenu::find($id);
            $menu->name = $request->name;
            $menu->slug = Str::slug($request->name, '-');
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'CateringMenuImages');
                $menu->image = $filename;
            }
            $menu->image_alt = $request->image_alt;
            $menu->description = $request->description;
            $menu->is_popular = $request->is_popular;
            $menu->updated_at = now();
            $menu->save();
            DB::commit();
            Session::flash('success', 'Catering menu updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-catering-menu.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-catering-menu.index');
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
        CateringMenu::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
