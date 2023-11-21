@extends('admin.layout.app')
@section('page-title')
    Experience
@endsection
@section('title')
    Experience List
@endsection
@section('top_button')
    <a href="{{ route('experience.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Experience</a>
@endsection
@section('content')
    @include('admin.components.experience.index')
@endsection
