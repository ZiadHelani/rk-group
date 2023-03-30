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
                    <form action="{{route('save_home_logistic_services', $home_logistic_services->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="form-group">
                                <img width="200px" height="150px" src="{{asset('images/home-logistic-services/' . $home_logistic_services->image)}}" alt="">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">{{$home_logistic_services->image}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title_en">Title English</label>
                            <input name="title_en" id="title_en" class="form-control" value="{{$home_logistic_services->title_en}}">
                        </div>
                        <div class="form-group">
                            <label for="title_ar">Title Arabic</label>
                            <input name="title_ar" id="title_ar" value="{{$home_logistic_services->title_ar}}" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h5>Data Logistic Services</h5>
                </div>
                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Data English</th>
                            <th scope="col">Data Arabic</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($home_data_logistic_services as $data)
                          <tr>
                            <td>{{$data->data_en}}</td>
                            <td>{{$data->data_ar}}</td>
                            <td>
                                <a href="{{route('edit_home_data_logistic_services', $data->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('delete_home_data_logistic_services', $data->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>



            <div class="card">
                <div class="card-header">
                    <h5>Add Data Logistic Services</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_home_data_logistic_services')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="data_en">Data English</label>
                                    <input name="data_en" id="data_en" class="form-control" value="">
                                </div>
                                <div class="col">
                                    <label for="data_ar">Data Arabic</label>
                                    <input name="data_ar" id="data_ar" value="" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
