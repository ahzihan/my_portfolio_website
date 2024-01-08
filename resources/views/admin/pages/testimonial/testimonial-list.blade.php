@extends('admin.layout.app')
@section('page-title')
    Testimonial
@endsection
@section('title')
    Testimonial List
@endsection
@section('top_button')
    <a href="{{ route('testimonial.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Add New Testimonial</a>
@endsection
@section('content')
    @include('admin.components.testimonial.index')
@endsection
