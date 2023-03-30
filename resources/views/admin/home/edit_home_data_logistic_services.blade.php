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
                    <h5>Add Data Logistic Services</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('update_home_data_logistic_services', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="data_en">Data English</label>
                                    <input name="data_en" id="data_en" class="form-control" value="{{$data->data_en}}">
                                </div>
                                <div class="col">
                                    <label for="data_ar">Data Arabic</label>
                                    <input name="data_ar" id="data_ar" value="{{$data->data_ar}}" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
