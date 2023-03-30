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
                    <h5>Edit {{$title}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('update_home_our_partner', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="organization_name">Organization Name</label>
                            <input name="organization_name" id="organization_name" class="form-control" value="{{$data->organization_name}}">
                        </div>
                        <div class="form-group">
                            <label for="organization_nickname">Organization Nickname</label>
                            <input name="organization_nickname" id="organization_nickname" class="form-control" value="{{$data->organization_nickname}}">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Our Partner Image</label>
                            <div class="form-group">
                                <img width="200px" height="150px" src="{{asset('images/home-our-partner/' . $data->image)}}" alt="">
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
