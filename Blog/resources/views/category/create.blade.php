@extends('home')
@section('con')
    <div class="col-lg-12">
        <form method="post" class="col-lg-6" action="{{route('categories.store')}}" enctype="multipart/form-data">
            @csrf
            <h1>Thêm mới</h1>
            <input class="form-control" type="text" name="name" placeholder="name" required>
            <button class="btn btn-warning" name="add">ADD</button>
        </form>
    </div>
@endsection
