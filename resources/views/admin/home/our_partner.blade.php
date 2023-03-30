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
                <table class="table" style="text-align: center">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Organization Name</th>
                        <th scope="col">Organization Nickname</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                      <tr>
                        <td>{{$data->organization_name}}</td>
                        <td>{{$data->organization_nickname}}</td>
                        <td><img src="{{asset('images/home-our-partner/' . $data->image)}}" alt="" width="100px" height="100px"></td>
                        <td>
                            <a href="{{route('edit_home_our_partner', $data->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{route('delete_home_our_partner', $data->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>


            <div class="card">
                <div class="card-header">
                    <h5>Add {{$title}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_home_our_partner')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="organization_name">Organization Name</label>
                            <input name="organization_name" id="organization_name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="organization_nickname">Organization Nickname</label>
                            <input name="organization_nickname" id="organization_nickname" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Our Partner Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
