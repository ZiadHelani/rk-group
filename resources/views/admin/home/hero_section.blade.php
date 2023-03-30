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
                    <form action="{{route('save_hero_section', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mt-2">
                            <div class="col">
                                <label for="title_en">Title English</label>
                                <input name="title_en" id="title_en" class="form-control" value="{{$data->title_en}}">
                            </div>
                            <div class="col">
                                <label for="title_ar">Title Arabic</label>
                                <input name="title_ar" id="title_ar" value="{{$data->title_ar}}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="col">
                                <label for="desc_en">Description English</label>
                                <input name="desc_en" id="desc_en" value="{{$data->desc_en}}" class="form-control" >
                            </div>
                            <div class="col">
                                <label for="desc_ar">Desctiption Arabic</label>
                                <input name="desc_ar" id="desc_ar" value="{{$data->desc_ar}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h5>Our Vision</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_our_vision', $vision->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="text_en">Text English</label>
                                <input name="text_en" id="text_en" class="form-control" value="{{$vision->text_en}}">
                            </div>
                            <div class="col">
                                <label for="text_ar">Text Arabic</label>
                                <input name="text_ar" id="text_ar" class="form-control" value="{{$vision->text_ar}}">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>



            <div class="card">
                <div class="card-header">
                    <h5>Our Mission</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_our_mission', $mission->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="text_en">Text English</label>
                                <input name="text_en" id="text_en" class="form-control" value="{{$mission->text_en}}">
                            </div>
                            <div class="col">
                                <label for="text_ar">Text Arabic</label>
                                <input name="text_ar" id="text_ar" class="form-control" value="{{$mission->text_ar}}">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>



            <div class="card">
                <div class="card-header">
                    <h5>Our Morals</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_our_morals', $morals->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <label for="text_en">Text English</label>
                                <input name="text_en" id="text_en" class="form-control" value="{{$morals->text_en}}">
                            </div>
                            <div class="col">
                                <label for="text_ar">Text Arabic</label>
                                <input name="text_ar" id="text_ar" class="form-control" value="{{$morals->text_ar}}">
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
