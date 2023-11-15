@extends('admin.layout.app')
@section('page-title')
    Dashboard
@endsection
@section('title')
    Home Page
@endsection
@section('content')
    @include('admin.components.dashboard.Dashboard')
@endsection
