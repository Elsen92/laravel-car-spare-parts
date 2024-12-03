@extends('front.layouts.app')

@section('content')
    <div class="container">
        <!-- Search Input -->
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="input-group" style="max-width: 500px; width: 100%;">
                <span class="input-group-text bg-light border-0">
                    <i class="fa fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-0 shadow-sm" placeholder="Ehtiyyat Hissesi axtar">
            </div>
        </div>

        <!-- Main Title -->
        <div class="mt-5 px-4">
            <h1 class="fw-bold" style="font-size: 2.5rem;">Masin ehtiyat hisseleri mağazası</h1>
            <h2 class="text-muted mt-2" style="font-size: 1.2rem; width: 60%;">
                Masin Ehtiyat Hisseleri Magazasi - Kia, Hyundai, Toyota, Nissan, Mitsubishi, Infiniti, Lexus üçün masin ehtiyat hisseleri `nin satisi
            </h2>
        </div>
    </div>

    @include('front.ehtiyyat_hisseleri.ehtiyyat')

@endsection



<!-- Stil əlavə edirik -->
<style>
    .card {
        position: relative;
        overflow: hidden;
    }

    .card .more-link {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card:hover .more-link {
        opacity: 1;
    }

    /* Hover zamanı box-shadow artırma */
    .card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }
</style>
