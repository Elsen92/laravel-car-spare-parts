@extends('front.layouts.app')

@section('content')
    <div class="container my-5">
        <h2>Axtarış Nəticəsi</h2>

        @if($oils->isEmpty())
            <p>Heç bir məhsul tapılmadı.</p>
        @else
            <div class="row">
                @foreach ($oils as $oil)
                    <div class="col-12 mb-4">
                        <div class="card d-flex flex-row h-100">
                            <!-- Şəkil Sol Tərəf -->
                            <div class="card-img-container" style="width: 50%; height: 350px; overflow: hidden;">
                                <img src="{{ Storage::url($oil->image) }}" alt="{{ $oil->brand }}" class="card-img" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- Məhsul Haqqında Məlumatlar Sağ Tərəf -->
                            <div class="card-body d-flex flex-column justify-content-center" style="width: 50%; padding: 20px;">
                                <!-- Brand məlumatı ortada -->
                                <div class="d-flex justify-content-center mb-3">
                                    <h5 class="card-title">{{ $oil->brand }}</h5>
                                </div>

                                <!-- Digər məlumatlar -->
                                <div>
                                    <p><strong>Brend:</strong> {{ $oil->brand }}</p>
                                    <p><strong>Hecm:</strong> {{ $oil->volume }} L</p>
                                    <p><strong>Nov:</strong> {{ $oil->type }}</p>
                                    <p><strong>Qiymət:</strong> {{ $oil->price }} ₼</p>
                                </div>

                                <!-- Əldə Et linki və Qiymət -->
                                <div class="d-flex justify-content-between align-items-center mt-auto">
                                    <a href="#" class="btn btn-warning text-white py-3 px-4 rounded">Əldə Et</a>
                                    <p class="mb-0"> {{ $oil->price }} ₼</p>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

<style>
    .card {
        display: flex;
        flex-direction: row;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        height: 350px; /* Cardın hündürlüyü müəyyən edilir */
    }

    .card-img-container {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        height: 100%; /* Məhsul məlumatlarının sahəsi */
    }

    .card-body .card-title {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .card-body p {
        margin-bottom: 10px;
    }

    .card-body .mt-auto {
        margin-top: auto;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Əldə Et linkinin ölçüsünü artırmaq */
    .btn-warning {
        font-size: 18px; /* Əldə Et linkinin font ölçüsünü artırır */
        padding: 15px 30px; /* Buttonun içərisindəki boşluğu artırır */
    }
</style>
