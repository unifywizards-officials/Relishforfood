<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\Menu;
use App\Models\MenuItems;

class MenuItemsController extends Controller
{
    public function index()
    {
        $banner = MenuItems::with(['menu'])->orderBy('order_position')->get();
        return view('admin.menu-item.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $menu = Menu::where('is_active', '1')->get();
        return view('admin.menu-item.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:menu_items,name',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:300|dimensions:min_width=399,min_height=420,max_width=399,max_height=420',
            'price' => 'required',
            'description' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $menu = new MenuItems;
            $menu->name = $request->name;
            $menu->slug = Str::slug($request->name, '-');
            $menu->menu_id = $request->menu_id;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'MenuItemsImages');
                $menu->image = $filename;
            }
            $menu->image_alt = $request->image_alt;
            $menu->is_popular = $request->is_popular;
            $menu->price = $request->price;
            $menu->description = $request->description;
            $menu->save();
            DB::commit();
            Session::flash('success', 'Menu Item created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-menu-item.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-menu-item.index');
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
        $banner = MenuItems::find($id);
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
        $menu_item = MenuItems::with('menu')->where('id', $id)->first();
        $menu = Menu::where('is_active', '1')->get();
        return view('admin.menu-item.edit', compact('menu_item', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:menu_items,name,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:300|dimensions:min_width=399,min_height=420,max_width=399,max_height=420',
            // 'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'price' => 'required',
            'description' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $menu = MenuItems::find($id);
            $menu->name = $request->name;
            $menu->slug = Str::slug($request->name, '-');
            $menu->menu_id = $request->menu_id;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'MenuImages');
                $menu->image = $filename;
            }
            $menu->image_alt = $request->image_alt;
            $menu->is_popular = $request->is_popular;
            $menu->price = $request->price;
            $menu->description = $request->description;
            $menu->updated_at = now();
            $menu->save();
            DB::commit();
            Session::flash('success', 'Menu Item updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-menu-item.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-menu-item.index');
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
        MenuItems::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
