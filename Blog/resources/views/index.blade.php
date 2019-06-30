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
        @forelse($customers as $customer)
            <tr>
                <th class="align-middle">{{ $customer->id }}</th>
                <th class="align-middle"><a
                        href="{{route('customers.show',["id"=>$customer->id])}}">{{ $customer->name }}</a></th>
                <th class="align-middle">{{ $customer->phone }}</th>
                <th class="align-middle">{{ $customer->email }}</th>
                <th class="align-middle"><img src="{{ asset('storage/' . $customer->image) }}" alt=""
                                              style="width: 50px"></th>
                <th class="align-middle"><a href="{{route('customers.edit',["id"=>$customer->id])}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{route('customers.destroy',["id"=>$customer->id])}}">
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
    @if(isset($message))
        {{$message}}
    @endif
    <div class="row">{{$customers->links()}}</div>
@endsection
