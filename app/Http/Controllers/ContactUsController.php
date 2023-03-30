<?php

namespace App\Http\Controllers;

use App\Models\ContactUsFollowUs;
use App\Models\ContactUsOurOffice;
use App\Models\ContactUsTouch;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function contactUsOurOffice()
    {
        $title = 'Our Office';
        $data = ContactUsOurOffice::first();
        return view('admin.contact-us.our_office', ['title' => $title, 'data' => $data]);
    }

    public function saveContactUsOurOffice(Request $request, $id)
    {
        $data = ContactUsOurOffice::find($id);
        $data->address_en = $request->address_en;
        $data->address_ar = $request->address_ar;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function contactUsTouch()
    {
        $title = 'Get in Touch';
        $data = ContactUsTouch::first();
        return view('admin.contact-us.get_in_touch', ['title' => $title, 'data' => $data]);
    }

    public function saveContactUsTouch(Request $request, $id)
    {
        $data = ContactUsTouch::find($id);
        $data->touch = $request->touch;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function contactUsFollowUs()
    {
        $title = 'Follow US';
        $data = ContactUsFollowUs::first();
        return view('admin.contact-us.follow_us', ['title' => $title, 'data' => $data]);
    }

    public function saveContactUsFollowUs(Request $request, $id)
    {
        $data = ContactUsFollowUs::find($id);
        $data->facebook_link = $request->facebook_link;
        $data->twitter_link = $request->twitter_link;
        $data->instagram_link = $request->instagram_link;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }
}
