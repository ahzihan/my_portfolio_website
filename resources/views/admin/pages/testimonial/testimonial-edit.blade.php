@extends('admin.layout.app')
@section('page-title')
    Testimonial
@endsection
@section('title')
    Update Testimonial
@endsection
@section('top_button')
    <a href="{{ route('testimonial.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Testimonial List</a>
@endsection
@section('content')
    @include('admin.components.testimonial.edit')
@endsection
