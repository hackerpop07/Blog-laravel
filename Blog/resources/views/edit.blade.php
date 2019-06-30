@extends('home')
@section('con')
    <div class="col-lg-12">
        <form method="post"
              class="col-lg-5"
              action="{{route('blogs.update',["id"=>$blog->id])}}"
              enctype="multipart/form-data">
            @csrf
            <h1>Chỉnh sửa</h1>
            <input class="form-control"
                   type="text"
                   name="name"
                   value="{{$blog->name}}" required>
            <br>
            <input class="form-control"
                   type="text"
                   name="title"
                   value="{{$blog->title}}"
                   required>
            <br>
            <input class="form-control"
                   type="text"
                   name="contents"
                   value="{{$blog->contents}}">
            <br>
            <input type="file"
                   class="form-control-file"
                   id="inputFile"
                   name="inputFile" value="{{$blog->image}}">
            <button class="btn btn-warning" name="add">Edit</button>
        </form>
    </div>
@endsection
