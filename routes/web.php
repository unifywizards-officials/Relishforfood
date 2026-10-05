<?php
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\SchemaController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\StaticPageSeoController;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use App\Mail\SubscribeMail;
use Illuminate\Support\Facades\Hash;


use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemsController;
use App\Http\Controllers\CateringMenuController;
use App\Http\Controllers\CateringMenuItemsController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Response;
use App\Models\Blog; // adjust namespace if needed
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/create/sitemap', function () {
    $sitemap = Sitemap::create();

    $now = Carbon::now();

    // Static pages
    $pages = [
        ['loc' => '/', 'priority' => 1.00],
        ['loc' => '/about', 'priority' => 0.80],
        ['loc' => '/menu', 'priority' => 0.80],
        ['loc' => '/order-now', 'priority' => 0.80],
        ['loc' => '/catering-menu', 'priority' => 0.80],
        ['loc' => '/gallery', 'priority' => 0.80],
        ['loc' => '/blog', 'priority' => 0.80],
        ['loc' => '/contact', 'priority' => 0.80],
        ['loc' => '/view-cart', 'priority' => 0.80],
        ['loc' => '/checkout', 'priority' => 0.64],
    ];

    foreach ($pages as $page) {
        $sitemap->add(
            Url::create(url($page['loc']))
                ->setLastModificationDate($now)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority($page['priority'])
        );
    }

    // Blog posts
    $blogs = Blog::latest()->get();

    foreach ($blogs as $blog) {
        $sitemap->add(
            Url::create(url('/blog/' . $blog->slug))
                ->setLastModificationDate($blog->updated_at ?? $now)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.70)
        );
    }

    // Save to public folder
    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap created successfully!';
});



Route::options('{any}', function () {
    return response()->json([], 200);
})->where('any', '.*');

Route::get('/abcd', function () {
    // return view('guest.demo');
    // return Hash::make('panindiamanager!@#123');
    return Hash::make('relishfood@1234');
});

Route::get('/Privacy-policy', function () {
    return view('guest.privacy');
    // return Hash::make('panindiamanager!@#123');
    // return Hash::make('relishfood@1234');
});



Route::get('/view-cart', function () {
    return view('guest.view-cart');
    // return Hash::make('panindiamanager!@#123');
    // return Hash::make('relishfood@1234');
})->name('view-cart');


Route::get('/checkout', function () {
    return view('guest.checkout');
    // return Hash::make('panindiamanager!@#123');
    // return Hash::make('relishfood@1234');
})->name('checkout');

Route::get('/restaurant', function () {
    return view('guest.restaurant');
    // return Hash::make('panindiamanager!@#123');
    // return Hash::make('relishfood@1234');
})->name('restaurant');



Route::get('/design', function () {
    return view('guest.blog_detail');
    // return Hash::make('panindiamanager!@#123');
    // return Hash::make('relishfood@1234');
});
Route::get('/design2', function () {
    return view('guest.blog_front');
    // return Hash::make('panindiamanager!@#123');
    // return Hash::make('relishfood@1234');
});


Route::get('/', [PageController::class, 'homepage'])->name('homepage');

// Route::post('/products/filter', [PageController::class, 'filter'])->name('products.filter');


Route::get('/send-email', function () {
    // Email sending logic here
    Mail::to('arun.kumar@unifywizards.com')->send(new SubscribeMail());
    return 'Email sent successfully';
});


// Route::view('admin','admin.dashboard');
// Route::view('guest','guest.dashboard');
Auth::routes();
// Route::get('contact', [HomeController::class, 'contactform'])->name('contact.show');
Route::get('/visa-and-insurance', [HomeController::class, 'show_visa_insurance'])->name('show_visa_insurance');

// Route::get('{destination}-packages', [DestinationController::class, 'showDestination'])->name('showDestination');
// Route::get('{destination}-packages/{package}', [PackageController::class, 'showPackage'])->name('showPackage');
Route::get('/get-quote', [HomeController::class, 'getQuote'])->name('get-quote');
Route::post('/submit-quote', [HomeController::class, 'submitQuote'])->name('submit-quote');



Route::get('/category/{slug}', [HomeController::class, 'productByCategory'])->name('productByCategory');
Route::get('filterCategory', [HomeController::class, 'productByCategoryfilter'])->name('filterCategory');
Route::get('/product/{slug}', [HomeController::class, 'showproduct'])->name('showproduct');


Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/menu', [GuestController::class, 'menu'])->name('menu');
Route::get('/catering-menu', [GuestController::class, 'catering_menu'])->name('catering_menu');
Route::get('/gallery', [GuestController::class, 'gallery'])->name('gallery');
Route::get('/blog', [GuestController::class, 'blog'])->name('blog');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');

Route::get('/book-table', [GuestController::class, 'booktable'])->name('book.table');
Route::get('admin/book-table-data', [HomeController::class, 'booktabledata'])->name('admin.book.table.data');
Route::post('/book-table', [HomeController::class, 'booktableSubmit'])->name('book.table.submit');

Route::get('/order-now', [GuestController::class, 'orderNow'])->name('order-now');
Route::get('admin/order-now-data', [HomeController::class, 'orderNowData'])->name('admin.order-now.data');
Route::post('/order-now', [HomeController::class, 'orderNowSubmit'])->name('order-now.submit');
Route::get('/thankyou', function () {
    // Email sending logic here
    return view('guest.thankyou');
})->name('thankyou');

Route::get('/book-catering-service', [GuestController::class, 'bookcateringservice'])->name('book.catering.service');
Route::get('admin/book-catering-service-data', [HomeController::class, 'bookcateringservicedata'])->name('admin.bookcatering.service.data');
Route::post('/book-catering-service', [HomeController::class, 'bookcateringSubmit'])->name('book.catering.submit');


Route::get('/partners', function () {
    $MetaOg = '';
    return view('guest.partners', compact('MetaOg'));
})->name('partners');

Route::get('/our-team', function () {
    $MetaOg = '';
    return view('guest.our-team', compact('MetaOg'));
})->name('our-team');

Route::get('/startup', function () {
    $MetaOg = '';
    return view('guest.startup', compact('MetaOg'));
})->name('startup');


Route::get('/privacy', function () {
    $MetaOg = '';
    return view('guest.privacy', compact('MetaOg'));
})->name('privacy');

Route::get('/terms-condition', function () {
    return view('guest.terms-condition');
});


Route::post('/submit-contact', [HomeController::class, 'submitContact'])->name('submit-contact');

// Route::get('blog', [BlogController::class, 'bloglist'])->name('blog.list');
Route::get('events', [EventController::class, 'eventlist'])->name('events.list');
Route::get('news', [NewsController::class, 'newslist'])->name('news.list');
Route::get('event-Form-data/{event}', [EventController::class, 'eventFormView'])->name('eventFormView');
Route::post('event-Form-data-save', [EventController::class, 'eventFormDataPost'])->name('submit-eventform');

Route::prefix('admin')->middleware(['auth', 'CheckTypeOfUser:admin'])->group(function () {
     Route::resource('schemas', SchemaController::class);
    
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class, ['as' => 'admin']);
    Route::resource('manage-blog', BlogController::class, ['as' => 'admin']);
    Route::resource('manage-event', EventController::class, ['as' => 'admin']);
    Route::resource('manage-news', NewsController::class, ['as' => 'admin']);
    Route::resource('manage-product', ProductController::class, ['as' => 'admin']);
    /////////////////////////////////////////////////////////////////////////////////////////////


    Route::resource('manage-menu', MenuController::class, ['as' => 'admin']);
    Route::resource('manage-menu-item', MenuItemsController::class, ['as' => 'admin']);

    Route::resource('manage-catering-menu', CateringMenuController::class, ['as' => 'admin']);
    Route::resource('manage-catering-menu-item', CateringMenuItemsController::class, ['as' => 'admin']);

    Route::resource('manage-gallery-category', GalleryCategoryController::class, ['as' => 'admin']);
    Route::resource('manage-gallery', GalleryController::class, ['as' => 'admin']);


    Route::get('/images', [ImageController::class, 'index'])->name('images.index');
    Route::post('/images', [ImageController::class, 'store'])->name('images.store');
    Route::delete('/images/{image}', [ImageController::class, 'destroy'])->name('images.destroy');

    

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('event-Form-data', [EventController::class, 'eventFormData'])->name('admin.eventFormData');



    Route::get('/edit-setting', [SettingController::class, 'editSetting'])->name('admin.edit.setting');
    Route::post('/update-setting', [SettingController::class, 'updateSetting'])->name('admin.update.setting');

    Route::get('/contact-data', [HomeController::class, 'contactDataList'])->name('admin.contactdata.list');


    Route::get('/quote-data', [HomeController::class, 'quoteDataList'])->name('admin.quotedata.list');
    Route::delete('/items/delete-selected', [HomeController::class, 'deleteSelected'])->name('delete.selected');
    Route::resource('manage-banner', BannerController::class, ['as' => 'admin']);
    Route::get('edit-staticpage_seo', [StaticPageSeoController::class, 'editStaticPageSeo'])->name('admin.edit-staticpage_seo');
    Route::post('update-staticpage_seo', [StaticPageSeoController::class, 'updateStaticPageSeo'])->name('admin.update-staticpage_seo');
    Route::get('/edit-visa-and-insurance', [HomeController::class, 'editVisaInsurance'])->name('admin.edit.visa_insurance');
    Route::post('/update-visa-and-insurance', [HomeController::class, 'updateVisaInsurance'])->name('admin.update.visa_insurance');


    Route::post('/update-order', [HomeController::class, 'updateOrder'])->name('updateOrder');
});

Route::prefix('user')->middleware(['auth', 'CheckTypeOfUser:user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('user.dashboard');
    Route::get('/contact-data', [HomeController::class, 'contactDataList'])->name('user.contactdata.list');
    Route::get('/quote-data', [HomeController::class, 'quoteDataList'])->name('user.quotedata.list');
});



Route::prefix('event-manager')->middleware(['auth', 'CheckTypeOfUser:event-manager'])->group(function () {
    // Route::get('/dashboard', [HomeController::class, 'index'])->name('event-manager.dashboard');

    // Route::resource('category', CategoryController::class, ['as' => 'event-manager']);
    // Route::resource('manage-blog', BlogController::class, ['as' => 'event-manager']);
    // Route::resource('manage-event', EventController::class, ['as' => 'event-manager']);
    // Route::resource('manage-news', NewsController::class, ['as' => 'event-manager']);
    // Route::get('event-Form-data', [EventController::class, 'eventFormData'])->name('event-manager.eventFormData');


    // Route::get('/edit-setting', [SettingController::class, 'editSetting'])->name('event-manager.edit.setting');
    // Route::post('/update-setting', [SettingController::class, 'updateSetting'])->name('event-manager.update.setting');

    // Route::delete('/items/delete-selected', [HomeController::class, 'deleteSelected'])->name('delete.selected');
    // Route::resource('manage-banner', BannerController::class, ['as' => 'event-manager']);


    // Route::get('edit-staticpage_seo', [StaticPageSeoController::class, 'editStaticPageSeo'])->name('event-manager.edit-staticpage_seo');
    // Route::post('update-staticpage_seo', [StaticPageSeoController::class, 'updateStaticPageSeo'])->name('event-manager.update-staticpage_seo');
    // Route::get('/contact-data', [HomeController::class, 'contactDataList'])->name('event-manager.contactdata.list');
    // Route::get('/quote-data', [HomeController::class, 'quoteDataList'])->name('event-manager.quotedata.list');
});

Route::prefix('seo-manager')->middleware(['auth', 'CheckTypeOfUser:seo-manager'])->group(function () {
    // Route::get('/dashboard', [HomeController::class, 'index'])->name('seo-manager.dashboard');
    // Route::resource('category', CategoryController::class, ['as' => 'seo-manager']);
    // Route::resource('manage-blog', BlogController::class, ['as' => 'seo-manager']);
    // Route::get('/edit-setting', [SettingController::class, 'editSetting'])->name('seo-manager.edit.setting');
    // Route::post('/update-setting', [SettingController::class, 'updateSetting'])->name('seo-manager.update.setting');
    // Route::delete('/items/delete-selected', [HomeController::class, 'deleteSelected'])->name('delete.selected');
    // Route::get('edit-staticpage_seo', [StaticPageSeoController::class, 'editStaticPageSeo'])->name('seo-manager.edit-staticpage_seo');
    // Route::post('update-staticpage_seo', [StaticPageSeoController::class, 'updateStaticPageSeo'])->name('seo-manager.update-staticpage_seo');
    // Route::get('/edit-visa-and-insurance', [HomeController::class, 'editVisaInsurance'])->name('seo-manager.edit.visa_insurance');
    // Route::post('/update-visa-and-insurance', [HomeController::class, 'updateVisaInsurance'])->name('seo-manager.update.visa_insurance');
});

// Route::get('{slug}', [PageController::class, 'pageView'])->name('page.view');

Route::prefix('blog')->group(function () {
    Route::get('{slug}', [BlogController::class, 'blogDetail'])->name('blog.detail');
});

Route::prefix('event')->group(function () {
    Route::get('{slug}', [EventController::class, 'blogDetail'])->name('event.detail');
});

Route::prefix('news')->group(function () {
    Route::get('{slug}', [NewsController::class, 'newsDetail'])->name('news.detail');
});

// Route::get('blog/search', [BlogController::class, 'searchData'])->name('blog.search');

Route::get('/notfound', function () {
    abort(404);
});

Route::get('/create-storage-link', function () {
    $source = storage_path('app/public');
    $destination = public_path('storage');

    // Delete existing 'public/storage' folder if it exists
    if (File::exists($destination)) {
        File::deleteDirectory($destination);
    }

    // Create destination folder if not exists
    if (!File::exists($destination)) {
        File::makeDirectory($destination, 0755, true);
    }

    // Copy files from storage/app/public to public/storage
    File::copyDirectory($source, $destination);

    return '✅ Storage files copied successfully to public/storage (no symlink used)';
});
