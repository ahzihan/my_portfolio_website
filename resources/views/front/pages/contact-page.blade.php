@extends('front.layout.master')

@section('page-title')
    Contact
@endsection
@section('content')
    @include('front.components.Navbar')
    @include('front.components.contact-details')
    @include('front.components.Footer')
@endsection
