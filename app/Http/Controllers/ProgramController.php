<?php

namespace App\Http\Controllers;

// use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Program;
use App\Clock;
use App\Partnership;
use App\Footer;
use App\Contact;
use App\About;
use App\Media;
use App\Page;
use App\User;
use App\Menu;
use App\Category;
use App\Location;
use App\Banner;
use App\Video;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        $programs = Program::all();

        return view('programs.index')->with('programs', $programs);
    }

    public function create()
    {
        return view('programs.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $desc = $request->input('desc');
        $event_date = $request->input('event_date');
        $event_time = $request->input('event_time');

        if ($request->hasFile('img_path1') || $request->hasFile('img_path2')) {
            $img_path1 = $request->file('img_path1');
            $img_path2 = $request->file('img_path2');
            $str = Storage::putFile('program', $img_path1);
            $str2 = Storage::putFile('program', $img_path2);
            $new_program = new program();
            $new_program->title = $title;
            $new_program->description = $desc;
            $new_program->event_date = $event_date;
            $new_program->event_time = $event_time;
            $new_program->img_path1 = $str;
            $new_program->img_path2 = $str2;
            $new_program->save();
        } else {
            $new_program = new program();
            $new_program->title = $title;
            $new_program->description = $desc;
            $new_program->event_date = $event_date;
            $new_program->event_time = $event_time;
            $new_program->save();
        }

        return back();
    }

    public function edit($id)
    {
        $program_edit = Program::where('id', $id)->first();

        return view('programs.edit')->with('program_edit', $program_edit);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        if ($request->hasFile('img_path1') || $request->hasFile('img_path2')) {
            $img_path1 = $request->file('img_path1');
            // $img_path2 = $request->file('img_path2');
            $str_img1 = Storage::putFile('program', $img_path1);
            // $str_img2 = Storage::putFile('program', $img_path2);
            $find_program_to_update = Program::where('id', $id)->update([
            'title' => $name,
            'description' => $desc,
            'img_path1' => $str_img1,
            // 'img_path2' => $str_img2,
        ]);
        } else {
            $find_program_to_update = Program::where('id', $id)->update([
                'title' => $name,
                'description' => $desc,
            ]);
        }

        return back()->with('success', 'Program updated successfully');
    }

    public function program_destroy($id)
    {
        $find_program = Program::find($id);

        if ($find_program) {
            $find_program->delete();

            return back()->with('success', 'Program successfully deleted');
        }

        return back()->withInput()->with('error', 'Program can not be deleted');
    }

    public function create_time()
    {
        return view('programs.settime');
    }

    public function upload_the_time(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');
        $day = $request->input('day');
        $hours = $request->input('hours');
        $mins = $request->input('mins');
        $sec = $request->input('sec');
        $title = $request->input('title');

        $new_clock = new Clock();
        $new_clock->year = $year;
        $new_clock->month = $month;
        $new_clock->day = $day;
        $new_clock->hour = $hours;
        $new_clock->min = $mins;
        $new_clock->sec = $sec;
        $new_clock->title = $title;

        $new_clock->save();

        return back();
    }

    public function count_down()
    {
        return view('programs.countdown');
    }

    //partnership controller
    public function partnership_index()
    {
        $partnerships = Partnership::all();

        return view('partnerships.index')->with('partnerships', $partnerships);
    }

    public function partnership_create()
    {
        return view('partnerships.create');
    }

    public function partnership_store(Request $request)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $acc_name = $request->input('acc_name');
        $acc1 = $request->input('acc1');
        $acc2 = $request->input('acc2');

        if ($request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            $img_path2 = $request->file('img_path2');
            $str = Storage::putFile('partnership', $img_path1);
            // $str2 = Storage::putFile('partnership', $img_path2);
            $new_partnership = new Partnership();
            $new_partnership->name = $name;
            $new_partnership->description = $desc;
            $new_partnership->acc_name = $acc_name;
            $new_partnership->acc1 = $acc1;
            $new_partnership->acc2 = $acc2;
            $new_partnership->img_path1 = $str;
            // $new_partnership->img_path2 = $str2;
            $new_partnership->save();
        } else {
            $new_partnership = new Partnership();
            $new_partnership->name = $name;
            $new_partnership->description = $desc;
            $new_partnership->acc_name = $acc_name;
            $new_partnership->acc1 = $acc1;
            $new_partnership->acc2 = $acc2;
        }

        return back()->with('success', 'Partnership added successfully');
    }

    public function partnership_edit($id)
    {
        $find_partner = Partnership::where('id', $id)->first();

        return view('partnerships.edit')->with('find_partner', $find_partner);
    }

    public function partnership_update(Request $request, $id)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $acc_name = $request->input('acc_name');
        $acc1 = $request->input('acc1');
        $acc2 = $request->input('acc2');

        if ($request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            // $img_path2 = $request->file('img_path2');
            $str_img1 = Storage::putFile('partnership', $img_path1);
            // $str_img2 = Storage::putFile('partnership', $img_path2);
            $find_partner_to_update = Partnership::where('id', $id)->update([
            'name' => $name,
            'description' => $desc,
            'img_path1' => $str_img1,
            'acc_name' => $acc_name,
            'acc1' => $acc1,
            'acc2' => $acc2,
            // 'img_path2' => $str_img2,
        ]);
        } else {
            $find_partner_to_update = Partnership::where('id', $id)->update([
                'name' => $name,
                'description' => $desc,
                'acc_name' => $acc_name,
                'acc1' => $acc1,
               'acc2' => $acc2,
            ]);
        }

        return back()->with('success', 'Partnership updated successfully');
    }

    public function partnership_destroy($id)
    {
        $find_partnership = Partnership::find($id);

        if ($find_partnership) {
            $find_partnership->delete();

            return back()->with('success', 'Partnership successfully deleted');
        }

        return back()->withInput()->with('error', 'Partnership can not be deleted');
    }

    public function footer_index()
    {
        $footers = Footer::all();

        return view('footer.index')->with('footers', $footers);
    }

    public function footer_create()
    {
        return view('footer.create');
    }

    public function footer_store(Request $request)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        if ($request->hasFile('img_path1') || $request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            $img_path2 = $request->file('img_path2');
            $str = Storage::putFile('footer', $img_path1);
            $str2 = Storage::putFile('footer', $img_path2);
            $new_footer = new Footer();
            $new_footer->name = $name;
            $new_footer->description = $desc;
            $new_footer->img_path1 = $str;
            $new_footer->img_path2 = $str2;
            $new_footer->save();
        } else {
            $new_footer = new Footer();
            $new_footer->name = $name;
            $new_footer->description = $desc;
            $new_footer->save();
        }

        return back()->with('success', 'Footer added successfully');
    }

    public function footer_edit($id)
    {
        $find_footer = Footer::where('id', $id)->first();

        return view('footer.edit')->with('find_footer', $find_footer);
    }

    public function footer_update(Request $request, $id)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        if ($request->hasFile('img_path1') || $request->hasFile('img_path2')) {
            $img_path1 = $request->file('img_path1');
            $img_path2 = $request->file('img_path2');
            $str_img1 = Storage::putFile('footer', $img_path1);
            $str_img2 = Storage::putFile('footer', $img_path2);
            $find_footer_to_update = Footer::where('id', $id)->update([
            'name' => $name,
            'description' => $desc,
            'img_path1' => $str_img1,
            'img_path2' => $str_img2,
        ]);
        } else {
            $find_footer_to_update = Footer::where('id', $id)->update([
                'name' => $name,
                'description' => $desc,
            ]);
        }

        return back()->with('success', 'Footer edited successfully');
    }

    public function footer_destroy($id)
    {
        $find_footer = Partnership::find($id);

        if ($find_footer) {
            $find_footer->delete();

            return back()->with('success', 'Footer successfully deleted');
        }

        return back()->withInput()->with('error', 'Footer can not be deleted');
    }

    public function contact_us_index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();

        return view('contact.index')->with('contacts', $contacts);
    }

    public function create_location()
    {
        return view('contact.create-location');
    }

    public function store_location(Request $request)
    {
        dd($request);
        $location = $request->input('church_name');
        $phone_number = $request->input('phone_number');
        $email = $request->input('email');
        $website = $request->input('website');
        $description = $request->input('desc');
        $states = $request->input('states');
        // dd($description);
        $new_location = new Location();
        $new_location->name = $location;
        $new_location->description = $description;
        $new_location->email = $email;
        $new_location->phone_number = $phone_number;
        $new_location->website = $website;
        $new_location->states = $states;
        $new_location->save();

        return back();
    }

    public function contact_us_create()
    {
        $location = Location::all();

        return view('contact.create')->with('location', $location);
    }

    public function contact_us_store(Request $request)
    {
        //dd($request);
        $subject = $request->input('subject');
        $message = $request->input('message');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        $new_contact = new Contact();
        $new_contact->first_name = $first_name;
        $new_contact->last_name = $last_name;
        $new_contact->subject = $subject;
        $new_contact->message = $message;
        $new_contact->email = $email;
        $new_contact->phone_number = $phone;
        // $new_contact->location_id = $location;

        $new_contact->save();

        return back()->with('success', 'Message Sent successfullly');
    }

    public function contact_us_edit($id)
    {
        $find_contact = Contact::where('id', $id)->first();

        return view('contact.edit')->with('find_contact', $find_contact);
    }

    public function contact_us_update(Request $request, $id)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');

        if ($request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            $str_img1 = Storage::putFile('contact', $img_path1);
            $find_contact_to_update = Contact::where('id', $id)->update([
            'name' => $name,
            'description' => $desc,
            'img_path1' => $str_img1,
             'email' => $email,
             'phone_number' => $phone_number,
        ]);
        } else {
            $find_contact_to_update = Contact::where('id', $id)->update([
                'name' => $name,
                'description' => $desc,
                'email' => $email,
                'phone_number' => $phone_number,
            ]);
        }

        return back()->with('success', 'Contact Us edited successfully');
    }

    public function contact_us_destroy($id)
    {
        $find_contact_us = Contact::find($id);

        if ($find_contact_us) {
            $find_contact_us->delete();

            return back()->with('success', 'Contact Us successfully deleted');
        }

        return back()->withInput()->with('error', 'Contact Us can not be deleted');
    }

    public function about_us_index()
    {
        $about_us_info = About::all();

        return view('about-us.index')->with('about_us_info', $about_us_info);
    }

    public function about_us_create()
    {
        return view('about-us.create');
    }

    public function about_us_store(Request $request)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $email = $request->input('email');
        $number = $request->input('number');
        $website = $request->input('website');
        $address = $request->input('address');

        if ($request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            $str = Storage::putFile('aboutus', $img_path1);
            $new_about_us = new About();
            $new_about_us->name = $name;
            $new_about_us->description = $desc;
            $new_about_us->img_path1 = $str;
            $new_about_us->number = $number;
            $new_about_us->email = $email;
            $new_about_us->website = $website;
            $new_about_us->address = $address;

            $new_about_us->save();
        } else {
            $new_about_us = new About();
            $new_about_us->name = $name;
            $new_about_us->description = $desc;
            $new_about_us->number = $number;
            $new_about_us->email = $email;
            $new_about_us->website = $website;
            $new_about_us->address = $address;
            $new_about_us->save();
        }

        return back()->with('success', 'About us created successfully');
    }

    public function about_us_edit($id)
    {
        $find_about_us = About::where('id', $id)->first();

        return view('about-us.edit')->with('find_about_us', $find_about_us);
    }

    public function about_us_update(Request $request, $id)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $email = $request->input('email');
        $number = $request->input('number');
        $website = $request->input('website');
        $address = $request->input('address');

        if ($request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            $str_img1 = Storage::putFile('aboutus', $img_path1);
            $find_about_us_to_update = About::where('id', $id)->update([
            'name' => $name,
            'description' => $desc,
            'img_path1' => $str_img1,
            'number' => $number,
            'email' => $email,
            'website' => $website,
            'address' => $address,
        ]);
        } else {
            $find_about_us_to_update = About::where('id', $id)->update([
                'name' => $name,
                'description' => $desc,
                'number' => $number,
                'email' => $email,
                'website' => $website,
                'address' => $address,
            ]);
        }

        return back()->with('success', 'About us edited successfully');
    }

    public function about_us_destroy($id)
    {
        $find_about_us = About::find($id);

        if ($find_about_us) {
            $find_about_us->delete();

            return back()->with('success', 'About Us successfully deleted');
        }

        return back()->withInput()->with('error', 'About Us can not be deleted');
    }

    public function media_index()
    {
        $media = Media::all();

        return view('media.index')->with('media', $media);
    }

    public function media_create()
    {
        return view('media.create');
    }

    public function media_store(Request $request)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        if ($request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            // $img_path2 = $request->file('img_path2');

            $str = Storage::putFile('media', $img_path1);
            // $str2 = Storage::putFile('media', $img_path2);

            $media = new Media();
            $media->name = $name;
            $media->description = $desc;
            $media->img_path1 = $str;
            // $media->img_path2 = $str2;

            $media->save();
        } else {
            $media = new Media();
            $media->name = $name;
            $media->description = $desc;
            $new_about_us->save();
        }

        return back()->with('success', 'Media added successfully');
    }

    public function media_edit($id)
    {
        $find_media = Media::where('id', $id)->first();

        return view('media.edit')->with('find_media', $find_media);
    }

    public function media_update(Request $request, $id)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');

        if ($request->hasFile('img_path1')) {
            $img_path1 = $request->file('img_path1');
            // $img_path2 = $request->file('img_path2');

            $str_img1 = Storage::putFile('media', $img_path1);
            // $str_img2 = Storage::putFile('media', $img_path2);

            $find_media_to_update = Media::where('id', $id)->update([
            'name' => $name,
            'description' => $desc,
            'img_path1' => $str_img1,
            // 'img_path2' => $str_img2,
        ]);
        } else {
            $find_media_to_update = Media::where('id', $id)->update([
                'name' => $name,
                'description' => $desc,
            ]);
        }

        return back()->with('success', 'Media edited successfully');
    }

    public function media_destroy($id)
    {
        $find_media = Media::find($id);

        if ($find_media) {
            $find_media->delete();

            return back()->with('success', 'Media successfully deleted');
        }

        return back()->withInput()->with('error', 'Media can not be deleted');
    }

    public function home_index()
    {
        $home = Page::all();

        return view('home.index')->with('home', $home);
    }

    public function home_create()
    {
        $category = Category::all();

        return view('home.create')->with('category', $category);
    }

    public function home_store(Request $request)
    {
        $name = $request->input('name');
        $desc = $request->input('desc');
        $cat_id = $request->input('cat_id');

        if ($request->hasFile('img_path1') || $request->hasFile('img_path2')) {
            $img_path1 = $request->file('img_path1');
            $img_path2 = $request->file('img_path2');

            $str = Storage::putFile('home', $img_path1);
            $str2 = Storage::putFile('home', $img_path2);

            $page = new Page();
            $page->name = $name;
            $page->description = $desc;
            $page->category_id = $cat_id;
            $page->img_path1 = $str;
            $page->img_path2 = $str2;

            $page->save();
        } else {
            $page = new Page();
            $page->name = $name;
            $page->description = $desc;
            $page->category_id = $cat_id;
            $page->save();
        }

        return back()->with('success', 'Home page created succesfully');
    }

    public function home_edit($id)
    {
        $find_page = Page::where('id', $id)->first();

        return view('home.edit')->with('find_page', $find_page);
    }

    public function home_update(Request $request, $id)
    {
        //dd($request);
        $name = $request->input('name');
        $desc = $request->input('desc');

        if ($request->hasFile('img_path1') || $request->hasFile('img_path2')) {
            $img_path1 = $request->file('img_path1');
            $img_path2 = $request->file('img_path2');

            $str_img1 = Storage::putFile('home', $img_path1);
            $str_img2 = Storage::putFile('home', $img_path2);

            $find_homepage_to_update = Page::where('id', $id)->update([
            'name' => $name,
            'description' => $desc,
            'img_path1' => $str_img1,
            'img_path2' => $str_img2,
        ]);
        } else {
            $find_homepage_to_update = Page::where('id', $id)->update([
                'name' => $name,
                'description' => $desc,
            ]);
        }

        return back()->with('success', 'Homepage edited successfully');
    }

    public function home_destroy($id)
    {
        $find_home = Partnership::find($id);

        if ($find_home) {
            $find_home->delete();

            return back()->with('success', 'Homepage successfully deleted');
        }

        return back()->withInput()->with('error', 'Homepage can not be deleted');
    }

    public function home_category()
    {
        return view('home.category');
    }

    public function home_category_store(Request $request)
    {
        $category_name = $request->input('name');
        $category = new Category();
        $category->name = $category_name;
        $category->save();

        return view('home.category');
    }

    public function home_banner_create()
    {
        return view('home.banner');
    }

    public function home_banner_store(Request $request)
    {
        // dd($request);
        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $str_banner = Storage::putFile('banner', $banner);
            $new_banner = new Banner();
            $new_banner->banner = $str_banner;
            $new_banner->save();
        }

        return back();
    }

    public function add_media_to_home_page()
    {
        return view('home.add-front-page-media');
    }

    public function store_media_to_home_page(Request $request)
    {
        //dd($request);
        //dd($request->has('video_upload'));
        $name = $request->input('name');
        $url = $request->input('url');
        if ($request->has('video_upload')) {
            $video_upload = $request->file('video_upload');
            $str_video = Storage::putFile('video', $video_upload);
            //dd($video_upload);
            $new_videos = new Video();
            $new_videos->name = $name;
            $new_videos->url_youtube = $url;
            $new_videos->url_upload = $str_video;
            $new_videos->save();
        }

        // dd($url);

        return back();
    }

    public function user_edit($id)
    {
        $find_user = User::where('id', $id)->first();

        return view('user.edit')->with('find_user', $find_user);
    }

    public function user_update(Request $request, $id)
    {
        $name = $request->input('name');
        $find_user_to_update = User::where('id', $id)->update([
            'name' => $name,
        ]);

        return back()->with('success', 'User Updated successfully');
    }

    public function menu_index()
    {
        $menu = Menu::all();

        return view('menu.index')->with('menu', $menu);
    }

    public function menu_create()
    {
        return view('menu.create');
    }

    public function menu_store(Request $request)
    {
        $name = $request->input('name');

        $menu = new Menu();
        $menu->name = $name;

        $menu->save();

        return back()->with('success', 'Menu created succesfully');
    }

    public function menu_edit($id)
    {
        $find_menu = Menu::where('id', $id)->first();

        return view('menu.edit')->with('find_menu', $find_menu);
    }

    public function menu_update(Request $request, $id)
    {
        $name = $request->input('name');
        $find_menu_to_update = Menu::where('id', $id)->update([
            'name' => $name,
        ]);

        return back()->with('success', 'Menu Updated successfully');
    }

    public function menu_destroy($id)
    {
        $find_menu = Menu::find($id);

        if ($find_menu) {
            $find_menu->delete();

            return back()->with('success', 'Menu successfully deleted');
        }

        return back()->withInput()->with('error', 'Menu can not be deleted');
    }
}
