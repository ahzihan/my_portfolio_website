@extends('front.layout.master')

@section('page-title')
    Blog
@endsection
@section('content')
    @include('front.components.Navbar')
    @include('front.components.blog-details')
    @include('front.components.Footer')
@endsection
