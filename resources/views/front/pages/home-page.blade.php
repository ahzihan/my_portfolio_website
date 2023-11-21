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

        @include('front.components.Skill')
        @include('front.components.Qualification')
        @include('front.components.Service')
        @include('front.components.Counter')
        @include('front.components.Portfolio')
        @include('front.components.Testimonial')
        @include('front.components.Blog')
        @include('front.components.Client')


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
