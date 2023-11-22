@extends('admin.layout.app')
@section('page-title')
    Counter
@endsection
@section('title')
    Update Counter
@endsection
@section('content')
    @include('admin.components.counter.UpdateCounter')
@endsection
