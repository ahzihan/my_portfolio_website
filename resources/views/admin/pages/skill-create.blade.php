@extends('admin.layout.app')
@section('page-title')
    Skill
@endsection
@section('title')
    Add New Skill
@endsection
@section('top_button')
    <a href="{{ route('skill.index') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Skill List</a>
@endsection
@section('content')
    @include('admin.components.skill.create')
@endsection
