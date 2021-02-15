@extends('frontend.layouts.master')

@section('main_content')
@include('frontend.pages.hero')
@include('frontend.pages.about')
@include('frontend.pages.resume')
@include('frontend.pages.service')
@include('frontend.pages.partials.counter')
@include('frontend.pages.workProcess')
@include('frontend.pages.skill')
@include('frontend.pages.workProject')
@include('frontend.pages.partials.team')
@include('frontend.pages.testimonial')
@include('frontend.pages.contact')

@endsection
