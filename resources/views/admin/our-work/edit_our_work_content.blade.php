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
                <form action="{{route('update_our_work_content', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="title_en">Title English</label>
                                <input name="title_en" id="title_en" class="form-control" value="{{$data->title_en}}">
                            </div>
                            <div class="col">
                                <label for="title_ar">Title Arabic</label>
                                <input name="title_ar" id="title_ar" value="{{$data->title_ar}}" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <label for="desc_en">Description English</label>
                                <input name="desc_en" id="desc_en" class="form-control" value="{{$data->desc_en}}">
                            </div>
                            <div class="col">
                                <label for="desc_ar">Description Arabic</label>
                                <input name="desc_ar" id="desc_ar" value="{{$data->desc_ar}}" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validatedCustomFile">Image</label>
                        <div class="form-group">
                            <img width="200px" height="150px" src="{{asset('images/our-work-content/' . $data->image)}}" alt="">
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">{{$data->image}}</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
