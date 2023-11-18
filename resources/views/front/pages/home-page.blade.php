@extends('front.layout.master')

@section('page-title')
    Home
@endsection
@section('content')
    @include('front.components.Navbar')
    @include('front.components.Hero')

    @if ($aboutInfo->status =='1')
       @include('front.components.About')
    @endif
    {{-- @if ($skillLeft->status =='1' || $skillRight->status =='1') --}}
        @include('front.components.Skill')
    {{-- @endif --}}
    {{-- @if ($qualiInfo->status =='1') --}}
        @include('front.components.Qualification')
    {{-- @endif
    @if ($serviceInfo->status =='1') --}}
        @include('front.components.Service')
    {{-- @endif
    @if ($contactInfo->status =='1') --}}
        @include('front.components.Counter')
    {{-- @endif
    @if ($portfolioInfo->status =='1') --}}
       @include('front.components.Portfolio')
    {{-- @endif
    @if ($testimonialInfo->status =='1') --}}
       @include('front.components.Testimonial')
    {{-- @endif
    @if ($blogInfo->status =='1') --}}
       @include('front.components.Blog')
    {{-- @endif
    @if ($clientInfo->status =='1') --}}
       @include('front.components.Client')
    {{-- @endif --}}

    @include('front.components.Footer')
@endsection

@section('animation')

@php $i=0; @endphp
@foreach ($skillLeft as $item)
@php $i++; @endphp
    <script>
        $(".anim_left{{ $i }}").animate({width: "{{$item->score}}%"}, 2500);
    </script>
@endforeach

@php $i=0; @endphp
@foreach ($skillRight as $item)
@php $i++; @endphp
    <script>
        $(".anim_right{{ $i }}").animate({width: "{{$item->score}}%"}, 2500);
    </script>
@endforeach

@endsection
