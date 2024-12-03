<div class="container">
    <!-- Search Input -->
{{--    <div class="d-flex justify-content-center align-items-center mt-5">--}}
{{--        <form action="{{ route('search') }}" method="GET" style="max-width: 500px; width: 100%;">--}}
{{--            <div class="input-group">--}}
{{--                <input type="text" name="brand" class="form-control border-0 shadow-sm" placeholder="Brend axtar">--}}
{{--                <button class="btn btn-warning text-white" type="submit">Axtar</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}


    <!-- Main Title -->
    <div class="mt-5 px-4 text-center full-screen-center">
        <h1 class="fw-bold" style="font-size: 2.5rem;">Maşın yağları</h1>
        <h2 class="text-muted mt-2" style="font-size: 1.2rem; width: 60%; margin: 0 auto;">
            Maşın yağları qiymətləri və satışı burada ✅ Yapon və Koreya istehsalı avtomobiliniz üçün keyfiyyətli maşın yağı SOLO Avto-dan əldə edin.
        </h2>
    </div>
</div>

<div class="container my-5 text-center">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($oils as $oil)
            <div class="col">
                <div class="card card-custom">
                    <img src="{{ Storage::url($oil->image) }}" class="card-img-top" alt="{{ $oil->brand }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size: 1.2rem;">{{ $oil->brand }}</h5>
                        <p class="card-text" style="font-size: 1rem; font-weight: bold; color: #d9534f;">
                            <span>{{ $oil->price }} <i class="fa-solid fa-manat-sign"></i></span>
                        </p>
                    </div>

                    <!-- Overlay with Hover Effect -->
                    <div class="card-overlay">
                        <a href="{{route('oil.details', $oil->id)}}" class="more-link btn btn-warning text-white py-2 px-3 rounded">Etrafli Bax</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="text-center mt-5">
    <a href="#" class="btn btn-warning btn-lg text-white" style="width: 300px; font-size: 1.2rem;">Daha Çox Göster</a>
</div>


<!-- Yeni bölmə -->
<div class="mt-5 px-4">
    <h1 class="fw-bold" style="font-size: 2.5rem;">Orijinal Masin yaglari qiymeti</h1>
    <p class="text-muted mt-2" style="font-size: 1.2rem; width: 60%; ">
        SOLO Avto-da biz keyfiyyətdən ödün vermədən sərfəliliyin vacibliyini başa düşürük, buna görə də bizim orijinal məhsullarımız rəqabətqabiliyyətli qiymətə malikdir. Hər bir avtomobil sahibinin öz büdcəsinə uyğun məhsul tapa bilməsini təmin etmək üçün biz müxtəlif orijinal masin yaglari qiymeti təklif edirik.
    </p>
</div>

<div class="mt-5 px-4">
    <h1 class="fw-bold" style="font-size: 2.5rem;">Solo Avto ən keyfiyyətli Maşın yağı təklif edir!</h1>
    <p class="text-muted mt-2" style="font-size: 1.2rem; width: 60%;">
        SOLO Avto öz müştərilərinə ən keyfiyyətli maşın yağı təklif edir. Bizim mərkəzimizdə hər bir məhsul ən yüksək sənaye standartlarına cavab vermək üçün ciddi sınaqlardan keçir və avtomobilinizin mühərriki üçün misilsiz etibarlılıq və uzunömürlülük təklif edir. Bizim diqqətlə seçilmiş məhsullar bütün avtomobil modellərinin müxtəlif ehtiyaclarını ödəmək üçün nəzərdə tutulmuşdur, üstün mühərrik qorunması və performansını təmin edir.
    </p>
</div>


<div class="container" style="margin-top: 40px; margin-bottom: 30px;">
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="border p-4" style="width: 100%;">--}}
{{--                @include('front.questions')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

<style>
    .card {
        width: 100%;
        max-width: 250px;
        height: 350px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .card-custom {
        position: relative;
        height: 100%;
    }

    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .card:hover .card-overlay {
        opacity: 1;
    }

    .card .card-title {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card .card-text {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card img {
        height: 200px;
        width: 100%;
        object-fit: cover;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .more-link {
        width: 200px;
        height: 50px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    @media (max-width: 768px) {
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .col {
            display: flex;
            justify-content: center;
        }
    }

    /* Masaüstü üçün kartların sol tərəfdə sıralanması */
    @media (min-width: 769px) {
        .row {
            display: flex;
            justify-content: flex-start; /* Kartları sola sıralayır */
        }
    }
</style>
