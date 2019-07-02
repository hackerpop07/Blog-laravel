@extends('home')
@section('con')
    <div class="col-lg-12">
        <form method="post"
              class="col-lg-5"
              action="{{route('categories.update',["id"=>$categories->id])}}"
              enctype="multipart/form-data">
            @csrf
            <h1>Chỉnh sửa</h1>
            <input class="form-control"
                   type="text"
                   name="name"
                   value="{{$categories->name}}" required>
            <button class="btn btn-warning" name="add">Edit</button>
        </form>
    </div>
@endsection
