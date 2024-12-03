@extends('front.layouts.app')

@section('content')
    <div class="container text-center my-5">
        <h1 class="display-3 fw-bold">Haqqımızda</h1>
        <div class="border-top border-warning my-4" style="width: 10%; margin: 0 auto; border-width: 10px;"></div>
        <h2 class="text-muted">SOLO AVTO Ehtiyat Hissələri Mərkəzi</h2>
    </div>

    @include('front.about.biz_kimik')

    @include('front.about.musteri')



@endsection
