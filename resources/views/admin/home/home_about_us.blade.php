@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif(session()->has('error'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{session()->get('error')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
            <div class="card">
                <div class="card-header">
                    <h5>{{$title}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_home_about_us', $home_about_us->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="form-group">
                                <img width="200px" height="150px" src="{{asset('images/home-about-us/' . $home_about_us->image)}}" alt="">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">{{$home_about_us->image}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="text_en">Text English</label>
                                <input name="text_en" id="text_en" class="form-control" value="{{$home_about_us->text_en}}">
                        </div>
                        <div class="form-group">
                            <label for="text_ar">Text Arabic</label>
                            <input name="text_ar" id="text_ar" value="{{$home_about_us->text_ar}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>

    </div>
</div>
@endsection
