@extends('admin.main')

@section('title', 'Article')

@section('content')
    <div id="app">
        <admin-media :media="{{$media}}"  csrf="{{csrf_token()}}"></admin-media>
    </div>
@endsection
