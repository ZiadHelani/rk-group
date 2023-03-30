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
                    <h5>About Us Content</h5>
                </div>
                <div class="card-body">
                    <table class="table" style="text-align: center">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Title English</th>
                            <th scope="col">Title Arabic</th>
                            <th scope="col">Desctiption Arabic</th>
                            <th scope="col">Desctiption Arabic</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($content as $content)
                            <td>{{$content->title_en}}</td>
                            <td>{{$content->title_ar}}</td>
                            <td>{{$content->desc_en}}</td>
                            <td>{{$content->desc_ar}}</td>
                            <td><img src="{{asset('images/our-work-content/' . $content->image)}}" alt="" width="100px" height="100px"></td>
                            <td>
                                <a href="{{route('edit_our_work_content', $content->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('delete_our_work_content', $content->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>



            <div class="card">
                <div class="card-header">
                    <h5>Add About Us Content</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('save_our_work_content')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="title_en">Title English</label>
                                    <input name="title_en" id="title_en" class="form-control" value="">
                                </div>
                                <div class="col">
                                    <label for="title_ar">Title Arabic</label>
                                    <input name="title_ar" id="title_ar" value="" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="desc_en">Description English</label>
                                    <input name="desc_en" id="desc_en" class="form-control" value="">
                                </div>
                                <div class="col">
                                    <label for="desc_ar">Description Arabic</label>
                                    <input name="desc_ar" id="desc_ar" value="" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validatedCustomFile">Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile"></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
