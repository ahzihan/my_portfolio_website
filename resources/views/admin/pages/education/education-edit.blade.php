@extends('admin.layout.app')
@section('page-title')
    Education
@endsection
@section('title')
    Education Update
@endsection
@section('top_button')
    <a href="{{ route('education.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Education List</a>
@endsection
@section('content')
    @include('admin.components.education.edit')
@endsection
