@extends('front.layout.master')

@section('page-title')
    Portfolio
@endsection
@section('content')
    @include('front.components.Navbar')
    @include('front.components.portfolio-details')
    @include('front.components.Footer')
@endsection
