@extends('layouts.public')

@section('title', htmlspecialchars($page->title))

@section('content')
  <img src="/storage/{{ $page->image }}" alt="">
  {!! $page->body !!}
@stop
