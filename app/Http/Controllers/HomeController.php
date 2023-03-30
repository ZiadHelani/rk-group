<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\HomeAboutUs;
use App\Models\HomeDataEngineering;
use App\Models\HomeDataLogisticServices;
use App\Models\HomeDataTrading;
use App\Models\HomeEngineering;
use App\Models\HomeHeaderImage;
use App\Models\HomeLogisticServices;
use App\Models\HomeOurPartner;
use App\Models\HomeTrading;
use App\Models\OurMission;
use App\Models\OurMorals;
use App\Models\OurVision;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $title = 'home';
        return view('admin.index', ['title' => $title]);
    }

    public function homeHeaderImage(Request $request)
    {
        $title = 'Home Header Image';
        $data = HomeHeaderImage::first();
        return view('admin.home.home_header_image', ['title' => $title, 'data' => $data]);
    }

    public function saveHomeHeaderImage(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/home-header-image/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = HomeHeaderImage::find($id);
        $data->image = $name;
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->desc_en = $request->desc_en;
        $data->desc_ar = $request->desc_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function heroSection()
    {
        $title = 'Hero Section';
        $data = HeroSection::first();
        $vision = OurVision::first();
        $mission = OurMission::first();
        $morals = OurMorals::first();
        return view('admin.home.hero_section', ['title' => $title, 'data' => $data, 'vision' => $vision, 'mission' => $mission, 'morals' => $morals]);
    }

    public function saveHeroSection(Request $request, $id)
    {
        $data = HeroSection::find($id);
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->desc_en = $request->desc_en;
        $data->desc_ar = $request->desc_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function saveOurVision(Request $request, $id)
    {
        $data = OurVision::find($id);
        $data->text_en = $request->text_en;
        $data->text_ar = $request->text_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function saveOurMission(Request $request, $id)
    {
        $data = OurMission::find($id);
        $data->text_en = $request->text_en;
        $data->text_ar = $request->text_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function saveOurMorals(Request $request, $id)
    {
        $data = OurMorals::find($id);
        $data->text_en = $request->text_en;
        $data->text_ar = $request->text_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function homeAboutUs()
    {
        $title = 'Home About US';
        $home_about_us = HomeAboutUs::first();
        return view('admin.home.home_about_us', ['title' => $title, 'home_about_us' => $home_about_us]);
    }

    public function saveHomeAboutUs(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/home-about-us/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = HomeAboutUs::find($id);
        $data->image = $name;
        $data->text_en = $request->text_en;
        $data->text_ar = $request->text_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function homeTrading()
    {
        $title = 'Home Trading';
        $home_trading = HomeTrading::first();
        $home_data_trading = HomeDataTrading::get();
        return view('admin.home.home_trading', ['title' => $title, 'home_trading' => $home_trading, 'home_data_trading' => $home_data_trading]);
    }

    public function saveHomeTrading(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/home-trading/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = HomeTrading::find($id);
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function saveHomeDataTrading(Request $request)
    {
        $data = new HomeDataTrading();
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function editHomeDataTrading($id)
    {
        $title = 'Edit Data Trading';
        $home_data_trading = HomeDataTrading::where(['id' => $id])->first();
        return view('admin.home.edit_home_data_trading', ['title' => $title, 'home_data_trading' => $home_data_trading]);
    }

    public function updateHomeDataTrading(Request $request, $id)
    {
        $data = HomeDataTrading::find($id);
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return redirect()->route('home_trading')->with(['success' => 'Completed Update']);
        } else {
            return redirect()->route('home_trading')->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function deleteHomeDataTrading($id)
    {
        $data = HomeDataTrading::where(['id' => $id])->delete();
        if ($data) {
            return back()->with(['success' => 'Completed Delete']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function homeEngineering()
    {
        $title = 'Home Engineering';
        $home_engineering = HomeEngineering::first();
        $home_data_engineering = HomeDataEngineering::get();
        return view('admin.home.home_engineering', ['title' => $title, 'home_engineering' => $home_engineering, 'home_data_engineering' => $home_data_engineering]);
    }

    public function saveHomeEngineering(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/home-engineering/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = HomeEngineering::find($id);
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Update']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function saveHomeDataEngineering(Request $request)
    {
        $data = new HomeDataEngineering();
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function editHomeDataEngineering($id)
    {
        $title = 'Edit Data Engineering';
        $data = HomeDataEngineering::where(['id' => $id])->first();
        return view('admin.home.edit_home_data_engineering', ['title' => $title, 'data' => $data]);
    }

    public function updateHomeDataEngineering(Request $request, $id)
    {
        $data = HomeDataEngineering::find($id);
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return redirect()->route('home_engineering')->with(['success' => 'Completed Update']);
        } else {
            return redirect()->route('home_engineering')->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function deleteHomeDataEngineering($id)
    {
        $data = HomeDataEngineering::where(['id' => $id])->delete();
        if ($data) {
            return back()->with(['success' => 'Completed Delete']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function homeLogisticServices()
    {
        $title = 'Home Logistic Services';
        $home_logistic_services = HomeLogisticServices::first();
        $home_data_logistic_services = HomeDataLogisticServices::get();
        return view('admin.home.home_logistic_services', ['title' => $title, 'home_logistic_services' => $home_logistic_services, 'home_data_logistic_services' => $home_data_logistic_services]);
    }

    public function saveHomeLogisticServices(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/home-logistic-services/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = HomeLogisticServices::find($id);
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function saveHomeDataLogisticServices(Request $request)
    {
        $data = new HomeDataLogisticServices();
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function editHomeDataLogisticServices($id)
    {
        $title = 'Edit Data Logistic Services';
        $data = HomeDataLogisticServices::where(['id' => $id])->first();
        return view('admin.home.edit_home_data_logistic_services', ['title' => $title, 'data' => $data]);
    }

    public function updateHomeDataLogisticServices(Request $request, $id)
    {
        $data = HomeDataLogisticServices::find($id);
        $data->data_en = $request->data_en;
        $data->data_ar = $request->data_ar;
        $data->save();
        if ($data) {
            return redirect()->route('home_logistic_services')->with(['success' => 'Completed Update']);
        } else {
            return redirect()->route('home_logistic_services')->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function deleteHomeDataLogisticServices($id)
    {
        $data = HomeDataLogisticServices::where(['id' => $id])->delete();
        if ($data) {
            return back()->with(['success' => 'Completed Delete']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function homeOurPartner()
    {
        $title = 'Our Partner';
        $data = HomeOurPartner::get();
        return view('admin.home.our_partner', ['title' => $title, 'data' => $data]);
    }

    public function saveHomeOurPartner(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/home-our-partner/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = new HomeOurPartner();
        $data->organization_name = $request->organization_name;
        $data->organization_nickname = $request->organization_nickname;
        $data->image = $name;
        $data->save();
        if ($data) {
            return back()->with(['success' => 'Completed Add']);
        } else {
            return back()->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function editHomeOurPartner($id)
    {
        $title = 'Our Partner';
        $data = HomeOurPartner::where(['id' => $id])->first();
        return view('admin.home.edit_our_partner', ['title' => $title, 'data' => $data]);
    }

    public function updateHomeOurPartner(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/home-our-partner/';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $data = HomeOurPartner::find($id);
        $data->organization_name  = $request->organization_name;
        $data->organization_nickname  = $request->organization_nickname;
        $data->image = $name;
        $data->save();
        if ($data) {
            return redirect()->route('home_our_partner')->with(['success' => 'Completed Update']);
        } else {
            return redirect()->route('home_our_partner')->with(['error' => 'Such as Error, Please Try Again']);
        }
    }

    public function deleteHomeOurPartner($id)
    {
        $data = HomeOurPartner::where(['id' => $id])->delete();
        if ($data) {
            return redirect()->route('home_our_partner')->with(['success' => 'Completed Delete']);
        } else {
            return redirect()->route('home_our_partner')->with(['error' => 'Such as Error, Please Try Again']);
        }
    }
}
