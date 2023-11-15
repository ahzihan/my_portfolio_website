@extends('front.layout.master')

@section('page-title')
    About
@endsection
@section('content')
    @include('front.components.Navbar')
    @include('front.components.about-details')
    @include('front.components.Footer')
@endsection
