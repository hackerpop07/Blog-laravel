@extends('home')
@section('con')
    <h1>Danh sách Blog</h1>
    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên Blog</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        @forelse($categories as $category)
            <tr>
                <th class="align-middle">{{ $category->id }}</th>
                <th class="align-middle"><a
                        href="{{route('categories.show',["id"=>$category->id])}}">{{ $category->name }}</a></th>
                <th class="align-middle"><a href="{{route('categories.edit',["id"=>$category->id])}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{route('categories.destroy',["id"=>$category->id])}}">
                        <button onclick="return confirm('Bạn muốn xóa không?') " class="btn btn-primary">Delete
                        </button>
                    </a>
                </th>
            </tr>
        @empty
            <tr>
                <td colspan="5"><h5 class="text-primary">Hiện tại chưa có mục nào được tạo!</h5></td>
            </tr>
        @endforelse
    </table>
    <div class="row">{{$categories->links()}}</div>
    <a class="btn btn-primary" href="{{route('categories.create')}}">Thêm mới</a>
@endsection
