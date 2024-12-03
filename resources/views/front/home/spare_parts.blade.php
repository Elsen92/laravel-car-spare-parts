<div class="container my-5 text-center">
    <!-- Başlıq -->
    <h1 class="mb-4 fw-bold" style="font-size: 2.5rem;">Maşın Ehtiyyat hisseleri</h1>

    <!-- Mətn -->
    <p class="fs-5 mx-auto" style="line-height: 1.8; width: 80%;">
        Masin Ehtiyat Hisseleri Magazasi - Kia, Hyundai, Toyota, Nissan, Mitsubishi, Infiniti, Lexus üçün masin ehtiyat hisseleri `nin satisi    </p>
</div>

<!-- Yağ Kartları -->
<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($spareParts as $part)
        <div class="col">
            <div class="card h-100 shadow-sm" style="width: 230px;">
                <!-- Yağın şəkli -->
                <img src="{{ asset('storage/' . $part->image) }}" class="card-img-top" alt="Avtomobil Yağı" style="height: 180px; object-fit: cover;">

                <div class="card-body text-center">
                    <!-- Yağın adı -->
                    <h5 class="card-title fs-6">{{ $part->name }}</h5>

                    <!-- Yağın qiyməti -->
                    <p class="card-text fw-bold text-danger">
                        {{ $part->price }} <i class="fa-solid fa-manat-sign"></i>
                    </p>

                    <!-- Link -->
                    <a href="#" class="btn btn-warning text-white py-2 px-3 rounded">Ətraflı Bax</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Daha çox düyməsi -->
<div class="text-center mt-5">
    <a href="#" class="btn btn-warning btn-lg text-white" style="width: 300px;">Daha Çox Göstər</a>
</div>


<style>
    .card {
        position: relative;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .card .btn {
        transition: transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .card:hover .btn {
        transform: translateY(-5px);
    }
    .card {
        position: relative;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
        width: 230px; /* Sabit en */
        height: 350px; /* Sabit hündürlük */
    }

    .card img {
        height: 180px;
        object-fit: cover; /* Şəkli kart ölçüsünə uyğunlaşdırır */
    }

    .card .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Mətnlərin yuxarı və aşağı hissələrdə yerləşməsi */
        height: calc(100% - 180px); /* Şəkil hündürlüyünü çıxır */
    }

</style>

