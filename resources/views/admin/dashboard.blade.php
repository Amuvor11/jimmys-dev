@extends('admin.main')

@section('title', 'Admin' )
@section('content')
    <h1>Dashboard:</h1>
    <hr class="mb-5">
    <a class="btn btn-jimmys" href="{{route('articles.index')}}">Blog</a>
@endsection
