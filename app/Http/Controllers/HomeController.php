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
use App\Models\BookTable;
use App\Models\BookCateringService;
use App\Models\BookOrder;
use Mail;
use App\Mail\ContactUsMail;
use App\Mail\SubscribeMail;
use App\Rules\NoScriptTags;
use Illuminate\Support\Facades\Validator;
use App\Mail\BookCateringAdminSide;
use App\Mail\BookCateringUserSide;
use App\Mail\BookTableAdminSide;
use App\Mail\BookTableUserSide;
use App\Mail\BookOrderAdminSide;
use App\Mail\BookOrderUserSide;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show_visa_insurance', 'contactform', 'getQuote', 'submitQuote', 'submitContact', 'productByCategory', 'showproduct', 'booktableSubmit', 'bookcateringSubmit', 'booktabledata', 'bookcateringservicedata','orderNowSubmit']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_blog = Category::count();
        $total_event = Products::count();
        $total_contactFormData = ContactFormData::where('type', 'contact-us')->count();
        return view('admin.dashboard', compact('total_blog', 'total_event', 'total_contactFormData'));
    }





    public function contactDataList()
    {
        $contact = ContactFormData::where('type', 'contact-us')->orderBy('updated_at', 'desc')->get();
        return view('admin.contact-data.index', compact('contact'));
    }

    

   


    public function deleteSelected(Request $request)
    {
        // dd($request->table);
        $ids = $request->ids;
        $table = $request->table;
        DB::table($table)->whereIn('id', $ids)->delete();
        return response()->json(['success' => 'Selected items deleted successfully']);
    }


    public function contactform()
    {
        $MetaOg = StaticPageSeoManage::where('id', 1)->first()->contactus_meta_og;
        return view('guest.contact', compact('MetaOg'));
    }

    public function submitContact(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|regex:/\S/',
            'email' => 'required|email',
            'message' => ['required', new NoScriptTags]
        ]);

        DB::beginTransaction();
        try {
            // $mail=mail($to, $subject, $message, $headers);    // uncomment when email function working properly
            $contact = new ContactFormData;
            $contact->name = $request->name;
            $contact->type = 'contact-us';
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();

            DB::commit();
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function booktableSubmit(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|regex:/\S/',
            'phone_no' => 'required',
            'email' => 'required',
            'date' => 'required',
            'time' => 'required',
            'no_of_guest' => 'required',
            'reservation_type' => 'required',
            'special_request' => ['required', new NoScriptTags]
        ]);

        DB::beginTransaction();
        try {
            // $mail=mail($to, $subject, $message, $headers);    // uncomment when email function working properly
            $book_table = new BookTable;
            $book_table->name = $request->name;
            $book_table->phone_no = $request->phone_no;
            $book_table->email = $request->email;
            $book_table->date = $request->date;
            $book_table->time = $request->time;
            $book_table->no_of_guest = $request->no_of_guest;
            $book_table->reservation_type = $request->reservation_type;
            $book_table->special_request = $request->special_request;
            $book_table->save();
            DB::commit();
            $data = ['name' => $book_table->name, 'email' => $book_table->email, 'phone_no' => $book_table->phone_no, 'date' => $book_table->date, 'time' => $book_table->time, 'no_of_guest' => $book_table->no_of_guest, 'reservation_type' => $book_table->reservation_type, 'special_request' => $book_table->special_request];
            Mail::to('Relishforfood@gmail.com')->send(new BookTableAdminSide($data));
            Mail::to($request->email)->send(new BookTableUserSide($data));
            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back();
        }
    }





    public function booktabledata(Request $request)
    {

        $MetaOg = '';
        $book_table = BookTable::orderBy('updated_at', 'desc')->get();
        return view('admin.book-table-data.index', compact('MetaOg', 'book_table'));
    }


    public function bookcateringSubmit(Request $request)
    {
        // dd($request->all());

        $validator = $request->validate([
            'f_name' => 'required|regex:/\S/',
            'l_name' => 'required|regex:/\S/',
            'company_name' => 'required',
            'company_email' => ['required', 'email'],
            'company_address' => 'required',
            // 'po_no' => ['required', 'max:12','min:1'],
            'client_phone_no' => ['required', 'max:12','min:1'],
            // 'company_phone_no' => ['required', 'max:12','min:1'],
            // 'catering_items' => 'required',
            'special_dietary' => ['required', new NoScriptTags],
            'deliverytime'=>'required',
        ],[
            'f_name.required' => 'The first name is required.',
            'l_name.required' => 'The last name is required.',
            // 'po_no.required' => 'The phone number is required.',
            // 'po_no.max' => 'The phone number cannot exceed 12 digits.',
            // 'po_no.min' => 'The phone number must be at least 1 digit.',
            'client_phone_no.required' => 'The client phone number is required.',
            'client_phone_no.max' => 'The client phone number cannot exceed 12 digits.',
            'client_phone_no.min' => 'The client phone number must be at least 1 digit.',
            // 'company_phone_no.required' => 'The company phone number is required.',
            // 'company_phone_no.max' => 'The company phone number cannot exceed 12 digits.',
            // 'company_phone_no.min' => 'The company phone number must be at least 1 digit.',
            'special_dietary.required' => 'The special dietary field is required.',
          ]);

        DB::beginTransaction();
        try {
            // $mail=mail($to, $subject, $message, $headers);    // uncomment when email function working properly
            $book_table = new BookCateringService;
            $book_table->name = $request->f_name.' '.$request->l_name;
            $book_table->company_name = $request->company_name;
            $book_table->company_email = $request->company_email;
            $book_table->company_address = $request->company_address.' ,'.$request->company_suite.' ,'.$request->company_zip;
            // $book_table->po_no = $request->po_no;
            $book_table->client_phone_no = $request->client_phone_no;
            // $book_table->company_phone_no = $request->company_phone_no;
            // $book_table->catering_items = implode(',', $request->quantities);
            $book_table->catering_items = json_encode($request->cartData);

            $carbonDate = Carbon::parse($request->deliverytime);
            // Split into date and time
            $date = $carbonDate->toDateString();  // 2024-11-08
            $time = $carbonDate->toTimeString();  // 12:00:00
           
            $book_table->delivery_date = $date;
            $book_table->delivery_time = $time;
            $book_table->special_dietary_requirement = $request->special_dietary;
            $book_table->coupon_code = $request->promo_code;
            $book_table->save();
            DB::commit();

            $data = ['name' => $book_table->name, 'email' => $book_table->company_email, 'company_name' => $book_table->company_name, 'company_address' => $book_table->company_address, 'client_phone_no' => $book_table->client_phone_no, 'catering_items' => $book_table->catering_items, 'date' => $book_table->delivery_date, 'time' => $book_table->delivery_time, 'special_dietary_requirement' => $book_table->special_dietary_requirement];
            $admin_email=env('MAIL_Admin');
            Mail::to($admin_email)->send(new BookCateringAdminSide($data));
            // Mail::to('backenddeveloper222@gmail.com')->send(new BookCateringAdminSide($data));
            Mail::to($request->company_email)->send(new BookCateringUserSide($data));
            return response()->json(['success' => 'Your Catering Booked Successfully!']);
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function bookcateringservicedata(Request $request)
    {

        $MetaOg = '';
        $book_catering = BookCateringService::orderBy('updated_at', 'desc')->get();
        return view('admin.book-catering-data.index', compact('MetaOg', 'book_catering'));
    }

    public function updateOrder(Request $request)
    {
        $items = $request->items;
        $table = $request->tableName;
        foreach ($items as $index => $id) {
            DB::table($table)
                ->where('id', $id)
                ->update(['order_position' => $index]);
        }
        return response()->json(['success' => 'Order Changed Successfully']);
    }



    public function  orderNowData()
    {
        $order = BookOrder::orderBy('updated_at', 'desc')->get();
        return view('admin.order-data.index', compact('order'));
    }

    public function orderNowSubmit(Request $request)
    {
        // dd($request->all());
        
        $validator = $request->validate([
            'first_name' => 'required|regex:/\S/',
            'last_name' => 'required|regex:/\S/',
            'phone_no' => ['required', 'max:12','min:1'],
            'email' => ['required', 'email'],
            // 'date' => 'required',
            // 'time' => 'required',
            'datetime'=>'required',
            // 'menu_items' => 'required',
            'special_request' => ['required', new NoScriptTags]
        ],[
            'phone_no.required' => 'The phone number is required.',
            'phone_no.max' => 'The phone number cannot exceed 12 digits.',
            'phone_no.min' => 'The phone number must be at least 1 digit.',
            'datetime.required' => 'Please select date and time of delivery.',
        ]);

        DB::beginTransaction();
        try {
            // $mail=mail($to, $subject, $message, $headers);    // uncomment when email function working properly
            $book_table = new BookOrder;
            $book_table->name = $request->first_name.' '.$request->last_name;
            $book_table->phone_no = $request->phone_no;
            $book_table->email = $request->email;
            $carbonDate = Carbon::parse($request->datetime);
        // Split into date and time
            $date = $carbonDate->toDateString();  // 2024-11-08
            $time = $carbonDate->toTimeString();  // 12:00:00
            $book_table->date = $date;
            $book_table->time = $time;
            $book_table->catering_items = json_encode($request->cartData);
            // $book_table->catering_items = json_encode($request->quantities);
            $book_table->special_request = $request->special_request;
            $book_table->coupon_code = $request->promo_code;
            $book_table->save();
            DB::commit();
            $data = ['name' => $book_table->name, 'email' => $book_table->email, 'phone_no' => $book_table->phone_no, 'date' => $book_table->date, 'time' => $book_table->time, 'catering_items' => $book_table->catering_items,'special_request' => $book_table->special_request];
            $admin_email=env('MAIL_Admin');
            // Mail::to('Relishforfood@gmail.com')->send(new BookOrderAdminSide($data));
            Mail::to($admin_email)->send(new BookOrderAdminSide($data));
            Mail::to($request->email)->send(new BookOrderUserSide($data));

            return response()->json(['success' => 'Thanks, We will get back to you soon!']);
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back();
        }
    }
}
