@extends('home')
@section('con')
    <table class="table table-striped">
        <tr>
            <th>ID: {{ $categories->id }}</th>
            <th>Name: {{ $categories->name }}</th>
        </tr>
    </table>
@endsection
