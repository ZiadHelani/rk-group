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
                    <form action="{{route('save_contact_us_follow_us', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="facebook_link">Facebook Link</label>
                            <input name="facebook_link" id="facebook_link" class="form-control" value="{{$data->facebook_link}}">
                        </div>
                        <div class="form-group">
                            <label for="twitter_link">Twitter Link</label>
                            <input name="twitter_link" id="twitter_link" class="form-control" value="{{$data->twitter_link}}">
                        </div>
                        <div class="form-group">
                            <label for="instagram_link">Instagram Link</label>
                            <input name="instagram_link" id="instagram_link" class="form-control" value="{{$data->instagram_link}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
