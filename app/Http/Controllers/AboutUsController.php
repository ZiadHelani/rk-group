<?php

namespace App\Http\Controllers;

use App\Models\AboutHeaderImage;
use App\Models\AboutUsCertificates;
use App\Models\AboutUsContentData;
use App\Models\AboutUsContentImage;
use App\Models\AboutUsOrganizationChart;
use Illuminate\Http\Request;

class AboutUsController extends Controller
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

    public function aboutHeaderImage()
    {
        $title = 'Header Image';
        $data = AboutHeaderImage::first();
        return view('admin.about-us.about_header_image', ['title' => $title, 'data' => $data]);
    }

    public function saveAboutHeaderImage(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/about-us-header-image/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = AboutHeaderImage::find($id);
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function aboutUsContent()
    {
        $title = 'About Us Content';
        $data = AboutUsContentImage::first();
        $content = AboutUsContentData::get();
        return view('admin.about-us.about_us_content', ['title' => $title, 'data' => $data, 'content' => $content]);
    }

    public function saveAboutUsContentImage(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/about-us-content-image/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = AboutUsContentImage::find($id);
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function saveAboutUsContentData(Request $request)
    {
        $data = new AboutUsContentData();
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function editAboutUsContentData($id)
    {
        $title = 'Edit Content';
        $data = AboutUsContentData::where(['id' => $id])->first();
        return view('admin.about-us.edit_about_us_content_data', ['title' => $title, 'data' => $data]);
    }

    public function updateAboutUsContentData(Request $request, $id)
    {
        $data = AboutUsContentData::find($id);
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return redirect()->route('about_us_content')->with(['success' => 'Completed Update']);
        } else {
            return redirect()->route('about_us_content')->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function deleteAboutUsContentData($id)
    {
        $data = AboutUsContentData::where(['id' => $id])->delete();
        if ($data) {
            return back()->with(['success' => 'Completed Delete']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function certificates()
    {
        $title = 'Certificates';
        $data = AboutUsCertificates::get();
        return view('admin.about-us.certificates', ['title' => $title, 'data' => $data]);
    }


    public function saveCertificates(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/about-us-certificates/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = new AboutUsCertificates();
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function editCertificates($id)
    {
        $title = 'Certificates';
        $data = AboutUsCertificates::where(['id' => $id])->first();
        return view('admin.about-us.edit_certificates', ['title' => $title, 'data' => $data]);
    }

    public function updateCertificates(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/about-us-certificates/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = AboutUsCertificates::find($id);
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function deleteCertificates($id)
    {
        $data = AboutUsCertificates::where(['id' => $id])->delete();
        if ($data) {
            return back()->with(['success' => 'Completed Delete']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function organizationChart()
    {
        $title = 'Organization Chart';
        $data = AboutUsOrganizationChart::first();
        return view('admin.about-us.organization_chart', ['title' => $title, 'data' => $data]);
    }

    public function saveOrganizationChart(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/about-us-organization-chart/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = AboutUsOrganizationChart::find($id);
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }
}
