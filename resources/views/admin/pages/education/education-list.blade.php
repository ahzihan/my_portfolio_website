@extends('admin.layout.app')
@section('page-title')
    Education
@endsection
@section('title')
    Education List
@endsection
@section('top_button')
    <a href="{{ route('education.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Education</a>
@endsection
@section('content')
    @include('admin.components.education.index')
@endsection
