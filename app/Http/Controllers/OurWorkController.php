<?php

namespace App\Http\Controllers;

use App\Models\OurWorkContent;
use App\Models\OurWorkHeaderImage;
use Illuminate\Http\Request;

class OurWorkController extends Controller
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

    public function ourWorkHeaderImage()
    {
        $title = 'Our Work Header Image';
        $header_image = OurWorkHeaderImage::first();
        return view('admin.our-work.our_work_header_image', ['title' => $title, 'header_image' => $header_image]);
    }

    public function saveOurWorkHeaderImage(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/our-work-header-image/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = new OurWorkHeaderImage();
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function ourWorkContent()
    {
        $title = 'Our Work Content';
        $content = OurWorkContent::get();
        return view('admin.our-work.our_work_content', ['title' => $title, 'content' => $content]);
    }

    public function saveOurWorkContent(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/our-work-content/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = new OurWorkContent();
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->desc_en = $request->desc_en;
        $data->desc_ar = $request->desc_ar;
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function editOurWorkContent($id)
    {
        $title = 'Edit Our Work Content';
        $data = OurWorkContent::where(['id' => $id])->first();
        return view('admin.our-work.edit_our_work_content', ['title' => $title, 'data' => $data]);
    }

    public function updateOurWorkContent(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/our-work-content/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = OurWorkContent::find($id);
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->desc_en = $request->desc_en;
        $data->desc_ar = $request->desc_ar;
        $data->image = $name;
        $data->save();
        if ($data) {
            return redirect()->route('our_work_content')->with(['success' => 'Completed Update']);
        } else {
            return redirect()->route('our_work_content')->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function deleteOurWorkContent($id)
    {
        $data = OurWorkContent::where(['id' => $id])->delete();
        if ($data) {
            return back()->with(['success' => 'Completed Delete']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }
}
