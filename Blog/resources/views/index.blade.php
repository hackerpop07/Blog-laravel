@extends('home')
@section('con')
    <h1>Danh sách Blog</h1>
    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên Blog</th>
            <th>Title</th>
            <th>Contents</th>
            <th>Image</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        @forelse($blogs as $blog)
            <tr>
                <th class="align-middle">{{ $blog->id }}</th>
                <th class="align-middle"><a
                        href="{{route('blogs.show',["id"=>$blog->id])}}">{{ $blog->name }}</a></th>
                <th class="align-middle">{{ $blog->title }}</th>
                <th class="align-middle">{{ $blog->contents }}</th>
                <th class="align-middle"><img src="{{ asset('storage/' . $blog->image) }}" alt=""
                                              style="width: 50px"></th>
                <th class="align-middle"><a href="{{route('blogs.edit',["id"=>$blog->id])}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{route('blogs.destroy',["id"=>$blog->id])}}">
                        <button onclick="return confirm('Bạn muốn xóa không?') " class="btn btn-primary">Delete
                        </button>
                    </a>
                </th>
            </tr>
        @empty
            <tr>
                <td colspan="5"><h5 class="text-primary">Hiện tại chưa có danh sách khách hàng nào được tạo!</h5></td>
            </tr>
        @endforelse
    </table>
        <div class="row">{{$blogs->links()}}</div>
@endsection
