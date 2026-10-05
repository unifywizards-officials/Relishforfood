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
use App\Models\CateringMenuItems;

class CateringMenuItemsController extends Controller
{
    public function index()
    {
        $banner = CateringMenuItems::with(['catering_menu'])->orderBy('order_position')->get();
        return view('admin.catering-menu-item.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $menu = CateringMenu::where('is_active', '1')->get();
        return view('admin.catering-menu-item.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:catering_menu_items,name',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:300|dimensions:min_width=399,min_height=350,max_width=399,max_height=350',
        'price' => 'required',
        'description' => 'required',
    ]);

    DB::beginTransaction();
    try {
        $menu = new CateringMenuItems;
        $menu->name = $request->name;
        $menu->slug = Str::slug($request->name, '-');
        $menu->catering_menu_id = $request->catering_menu_id;

      if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = uploadImage($file, 'CateringMenuItemsImages');
    $menu->image = $filename;
} elseif (!$menu->image) {
    $menu->image = 'default-menu-item.png';
}


        $menu->image_alt = $request->image_alt;
        $menu->is_popular = $request->is_popular;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->save();

        DB::commit();
        Session::flash('success', 'Catering Menu Items created successfully');

        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.manage-catering-menu-item.index');
        } elseif (Auth::user()->role == 'event-manager') {
            return redirect()->route('event-manager.manage-catering-menu-item.index');
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
        $banner = CateringMenuItems::find($id);
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
        $menu_item = CateringMenuItems::with('catering_menu')->where('id', $id)->first();
        $menu = CateringMenu::where('is_active', '1')->get();
        return view('admin.catering-menu-item.edit', compact('menu_item', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|unique:catering_menu_items,name,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:300|dimensions:min_width=399,min_height=420,max_width=399,max_height=420',
            // 'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'price' => 'required',
            'description' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $menu = CateringMenuItems::find($id);
            $menu->name = $request->name;
            $menu->slug = Str::slug($request->name, '-');
            $menu->catering_menu_id = $request->catering_menu_id;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'CateringMenuItemsImages');
                $menu->image = $filename;
            }
            $menu->image_alt = $request->image_alt;
            $menu->is_popular = $request->is_popular;
            $menu->price = $request->price;
            $menu->description = $request->description;
            $menu->updated_at = now();
            $menu->save();
            DB::commit();
            Session::flash('success', 'Catering Menu Items updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-catering-menu-item.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-catering-menu-item.index');
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
        CateringMenuItems::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
