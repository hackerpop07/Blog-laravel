@extends('home')
@section('con')
    <table class="table table-striped">
        <tr>
            <th>ID: {{ $blog->id }}</th>
            <th>Name: {{ $blog->name }}</th>
            <th>Phone: {{ $blog->title }}</th>
            <th>Email: {{ $blog->contents }}</th>
        </tr>
    </table>
    <br>
    <img src="{{ asset('storage/' . $blog->image) }}" alt="" style="width: 800px">
@endsection
