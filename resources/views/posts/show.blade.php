@extends('layouts.app')

@section('content')
    <h3><a href="/posts" class="btn btn-default"> Go back</a><h3>
    <h1>{{$post-> title}}</h1>
    <small></small>
    <p>No posts found </p>

@endsection
