@extends('index')

@section('title', 'message')

@section('content')

    <h2>{{ $message->title }}</h2>

    <h3> {{ $message->content }}</h3>
@endsection