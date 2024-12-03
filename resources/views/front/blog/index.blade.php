<div class="text-center mt-5">
    <a href="#" style="text-decoration: none; color: inherit;" id="blog-link">
        <h1 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 10px;">
            Avto Blog
            </h1>

    </a>
    <p style="font-size: 1.2rem; color: #555; margin-top: 10px;">
        Avtomobiliniz haqqında bildiyiniz və bilmədiyiniz məlumatlar
    </p>
</div>

<!-- Blog Cards Grid -->

<div class="row g-4 mt-4">
    @foreach($blogs as $blog)
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-0 shadow h-100">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column" style="background-color: #343a40; color: white;">
                    <h5 class="card-title" style="font-size: 1.2rem; font-weight: bold;">{{$blog->title}}</h5>
                    <p class="card-text flex-grow-1 text-truncate-2" style="margin-bottom: 10px;">
                        {{$blog->content}}
                    </p>
                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-link text-decoration-none mt-auto" style="color: #ffc107;">Daha ətraflı</a>
                </div>
            </div>
        </div>
    @endforeach
        <!-- "Daha çox" Button -->
{{--        <div class="text-center mt-4">--}}
{{--            <button class="btn" id="show-more" style="background-color: #ffc107; border-color: #ffc107;">Daha çox</button>--}}
{{--        </div>--}}
</div>





<style>
    .row {
        display: flex;
        justify-content: center; /* Kartları ortalayır */
        align-items: center;
        flex-wrap: wrap; /* Kartların yerində qalmaması üçün */
    }

    /* Mobil ekranlar üçün - Kartlar ortada */
    @media (max-width: 768px) {
        .col-12 {
            display: flex;
            justify-content: center; /* Kartları mərkəzləşdirir */
        }

        .card {
            width: 90%; /* Kartın genişliyini kiçildir */
            max-width: 350px; /* Maksimum genişliyi müəyyən edir */
            margin: 10px 0; /* Kart arasında məsafə */
        }
    }

    /* Masaüstü ekranlar üçün - Kartlar mərkəzləşir */
    @media (min-width: 769px) {
        .col-md-6, .col-lg-3 {
            display: flex;
            justify-content: center; /* Kartları mərkəzləşdirir */
        }

        .card {
            width: 100%; /* Kartların genişliyini 100% edir */
            max-width: 250px; /* Kartın maksimum genişliyi */
            margin: 10px; /* Kart arasında məsafə */
        }
    }

    /* Kartların üstündəki yazılar üçün stil */
    /*.card-body {*/
    /*    background-color: #343a40;*/
    /*    color: white;*/
    /*    display: flex;*/
    /*    flex-direction: column;*/
    /*    justify-content: space-between;*/
    /*}*/

    /* "Daha ətraflı" düyməsinin stil tərzi */
    .btn-link {
        color: #ffc107;
        font-weight: bold;
    }

    /* 2 sətirlik mətn göstərmək üçün truncation */
    .text-truncate-2 {
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        white-space: normal !important;
    }



</style>

