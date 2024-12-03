@extends('front.layouts.app')

@section('content')
    <div class="container my-5">
        <h2>{{ $oil->brand }} Yağı Haqqinda Ətraflı Məlumatı</h2>

        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($oil->image) }}" class="img-fluid" alt="{{ $oil->brand }}">
            </div>
            <div class="col-12 col-md-6">
                <h3>{{ $oil->brand }}</h3>
                <p><strong>Həcmi:</strong> {{ $oil->volume }} L</p>
                <p><strong>Qiymət:</strong> {{ $oil->price }} ₼</p>
                <p><strong>Nov:</strong> {{ $oil->type }}</p>
                <p>{{ $oil->description }}</p> <!-- Məhsulun təsviri əlavə edilə bilər -->
            </div>
        </div>

        <a href="{{ route('home') }}" class="btn btn-warning mt-4">Geri</a>
    </div>
@endsection
