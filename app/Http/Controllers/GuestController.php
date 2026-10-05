<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\ContactFormData;
use App\Models\Blog;
use App\Models\Products;
use App\Models\Events;
use App\Models\EventRegisterFormData;
use App\Models\GetQuote;
use App\Models\StaticPageSeoManage;
use App\Models\VisaInsurance;
use App\Models\CateringMenuItems;
use App\Models\MenuItems;

use App\Models\Menu;
use App\Models\CateringMenu;
use App\Models\GalleryCategory;
use App\Models\GalleryImages;
use Mail;
use App\Mail\ContactUsMail;
use App\Mail\SubscribeMail;
use App\Rules\NoScriptTags;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    //

    public function about()
    {
        $MetaOg = '';
        return view('guest.about', compact('MetaOg'));
    }

    public function menu()
    {
        $MetaOg = '';

        $menusWithActiveItems = Menu::with(['menuItems' => function ($query) {
            $query->where('is_active', '1')
                ->where('is_popular', '1')
                // ->orderBy('order_position');
                ->orderBy('name');  // Apply ordering to menuItems here
        }])
            ->where('is_active', '1')
            ->where('is_popular', '1')
            ->orderBy('order_position')  // Order menus
            // ->orderBy('name')  // Order menus
            ->get();


        return view('guest.menu', compact('MetaOg', 'menusWithActiveItems'));
    }

    public function catering_menu()
    {
        $MetaOg = '';

        $cateringMenusWithActiveItems = CateringMenu::with(['menuItems' => function ($query) {
            $query->where('is_active', '1')
                ->where('is_popular', '1')
                // ->orderBy('order_position');  // Apply ordering to menuItems here
                ->orderBy('name');  // Apply ordering to menuItems here
        }])
            ->where('is_active', '1')
            ->where('is_popular', '1')
            ->orderBy('order_position')  // Order menus
            // ->orderBy('name')  // Order menus
            ->get();


        return view('guest.catering-menu', compact('MetaOg', 'cateringMenusWithActiveItems'));
    }

    public function gallery()
    {
        $MetaOg = '';

        $products = GalleryImages::where('is_active', '1')->orderBy("id", "asc")->get();
        $category = GalleryCategory::where('is_active', 1)
            ->whereHas('product', function ($query) {
                $query->where('is_active', 1)->orderBy("id", "asc");
            })
            ->with(['product' => function ($query) {
                $query->where('is_active', 1)->orderBy("id", "asc");
            }])
            ->get();
        return view('guest.gallery', compact('MetaOg', 'products', 'category'));
    }
    public function blog(Request $request)
    {
        $MetaOg = '';
        
        $blogs = Blog::with(['blog_category.category_name'])->where('is_active', 1)->latest()->paginate(5);

        if ($request->ajax()) {
            $baseIndex = ($blogs->currentPage() - 1) * $blogs->perPage();
            return view('guest.blog.partials_blog', compact('blogs', 'baseIndex'))->render();
        }
        $baseIndex = 0;
        return view('guest.blog.listing', compact('blogs', 'baseIndex'));;
    }

    public function contact()
    {
        $MetaOg = '';
        return view('guest.contact', compact('MetaOg'));
    }

    public function booktable()
    {
        $MetaOg = '';
        return view('guest.book_table', compact('MetaOg'));
    }


    public function orderNow()
    {
        $MetaOg = '';
        $catering_items = MenuItems::where('is_active', '1')->get();
        return view('guest.order', compact('MetaOg', 'catering_items'));
    }








    public function bookcateringservice()
    {
        $MetaOg = '';
        $catering_items = CateringMenuItems::where('is_active', '1')->get();
        return view('guest.book_catering_service', compact('MetaOg', 'catering_items'));
    }
}
