@extends('admin.layout.app')
@section('page-title')
    Skill
@endsection
@section('title')
    Skill List
@endsection
@section('top_button')
    <a href="{{ route('skill.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Skill</a>
@endsection
@section('content')
    @include('admin.components.skill.index')
@endsection
