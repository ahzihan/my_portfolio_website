@extends('front.layout.master')

@section('page-title')
    Service
@endsection
@section('content')
    @include('front.components.Navbar')
    @include('front.components.service-details')
    @include('front.components.Footer')
@endsection
