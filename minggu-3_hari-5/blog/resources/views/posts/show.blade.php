@extends('adminlte.master')

@section('content')
    <h2> {{ $post->title}} </h2>
    <h4> {{ $post->body}} </h4>
@endsection