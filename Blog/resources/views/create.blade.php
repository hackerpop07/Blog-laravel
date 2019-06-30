@extends('home')
@section('con')
    <div class="col-lg-12">
        <form method="post" class="col-lg-6" action="{{route('blogs.store')}}" enctype="multipart/form-data">
            @csrf
            <h1>Thêm mới</h1>
            <input class="form-control" type="text" name="name" placeholder="name" required>
            <br>
            <input class="form-control" type="text" name="title" placeholder="phone" required>
            <br>
            <input class="form-control" type="text" name="contents" placeholder="email">
            <br>
            <input type="file"
                   class="form-control-file"
                   id="inputFile"
                   name="inputFile">
            <button class="btn btn-warning" name="add">ADD</button>
        </form>
    </div>
@endsection
