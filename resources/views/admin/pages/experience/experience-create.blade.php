@extends('admin.layout.app')
@section('page-title')
    Experience
@endsection
@section('title')
    Add New Experience
@endsection
@section('top_button')
    <a href="{{ route('experience.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Experience List</a>
@endsection
@section('content')
    @include('admin.components.experience.create')
@endsection
