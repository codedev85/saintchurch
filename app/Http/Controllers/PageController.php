<?php

namespace App\Http\Controllers;

use App\Page;
use App\Program;
use App\Location;
use App\About;
use App\Media;
use App\Partnership;
use App\Banner;
use App\Video;

class PageController extends Controller
{
    public function welcome()
    {
        $homepage = Page::orderBy('created_at', 'DESC')->first();
        //dd($homepage);
        $partners = Partnership::all();

        $latest_release = Page::where('category_id', 1)->first();
        $banner = Banner::all();
        $videos = Video::orderBy('created_at', 'DESC')->first();
        //dd($latest_release);
        $location = Location::all();
        //dd($videos);

        $program = Program::all();

        return view('welcome')
                      ->with('homepage', $homepage)
                       ->with('videos', $videos)
                      ->with('banner', $banner)
                      ->with('latest_release', $latest_release)
                      ->with('location', $location)
                      ->with('partners', $partners)
                      ->with('program', $program);
    }

    public function about_us_view()
    {
        $about_us = About::all();
        $program = Program::all();
        $location = Location::all();
        $partners = Partnership::all();
        $latest_release = Page::where('category_id', 1)->first();

        return view('about-us.about')
                      ->with('latest_release', $latest_release)
                      ->with('program', $program)
                      ->with('location', $location)
                      ->with('partners', $partners)
                      ->with('about_us', $about_us);
    }

    public function our_church_location()
    {
        $contact_location = Location::all();
        $program = Program::all();
        $partners = Partnership::all();
        $latest_release = Page::where('category_id', 1)->first();

        return view('contact.location')
                        ->with('latest_release', $latest_release)
                        ->with('program', $program)
                        ->with('partners', $partners)
                        ->with('contact_location', $contact_location);
    }

    public function our_church_media()
    {
        $find_media = Media::all();
        $about_us = About::all();
        $partners = Partnership::all();

        return view('media.media')
                   ->with('about_us', $about_us)
                   ->with('partners', $partners)
                   ->with('find_media', $find_media);
    }

    public function our_partners_view()
    {
        $partners = Partnership::all();
        $latest_release = Page::where('category_id', 1)->first();
        $program = Program::all();
        $location = Location::all();

        return view('partnerships.partnership')
                              ->with('program', $program)
                              ->with('location', $location)
                              ->with('partners', $partners)
                              ->with('latest_release', $latest_release)
                              ->with('partners', $partners);
    }

    public function our_church_event_view()
    {
        $program = Program::orderBy('created_at', 'DESC')->first();
        $location = Location::all();
        $partners = Partnership::all();

        return view('programs.event')
                    ->with('location', $location)
                    ->with('partners', $partners)
                     ->with('program', $program);
    }

    public function our_contact_view()
    {
        $location = Location::all();
        $partners = Partnership::all();

        return view('contact.contact')
                        ->with('partners', $partners)
                        ->with('location', $location);
    }
}
