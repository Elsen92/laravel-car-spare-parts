@extends('front.layouts.app')

@section('title', 'Ana Səhifə')

@section('content')
    @include('front.home.background')
    @include('front.home.service')
    @include('front.home.avto_models')
    @include('front.home.spare_parts')
    @include('front.oils.oil')
    @include('front.blog.index')
@endsection
