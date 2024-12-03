{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">--}}
{{--    <div class="container">--}}
{{--        <!-- Logo -->--}}
{{--        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">--}}
{{--            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="me-2" style="height: 60px; object-fit: contain;">--}}
{{--            <span class="fw-bold fs-4 d-none d-md-inline">Şirkət Adı</span>--}}
{{--        </a>--}}

{{--        <!-- Mobile Toggle Button -->--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Navigasiyanı aç">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <!-- Navbar Menu -->--}}
{{--        <div class="collapse navbar-collapse" id="mainNavbar">--}}
{{--            <ul class="navbar-nav ms-auto text-uppercase fw-semibold">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('ehtiyyat_hisseleri') }}">--}}
{{--                        <i class="fas fa-cogs me-2"></i>Ehtiyat Hissələri--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('oils') }}">--}}
{{--                        <i class="fas fa-oil me-2"></i>Yağlar--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('about') }}">--}}
{{--                        <i class="fas fa-info-circle me-2"></i>Haqqımızda--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('blog') }}">--}}
{{--                        <i class="fas fa-blog me-2"></i>Bloglar--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('faq') }}">--}}
{{--                        <i class="fas fa-question-circle me-2"></i>FAQ--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="">--}}
{{--                        <i class="fas fa-envelope me-2"></i>Əlaqə--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--<style>--}}
{{--    .navbar {--}}
{{--        background: linear-gradient(45deg, #1d1d1d, #343a40) !important;--}}
{{--        transition: all 0.3s ease;--}}
{{--    }--}}

{{--    .navbar-nav .nav-link {--}}
{{--        color: #f8f9fa !important;--}}
{{--        transition: all 0.3s ease;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--    }--}}

{{--    .navbar-nav .nav-link:hover {--}}
{{--        color: #ffc107 !important;--}}
{{--        transform: scale(1.05);--}}
{{--    }--}}

{{--    .navbar-toggler {--}}
{{--        border-color: #ffc107;--}}
{{--    }--}}

{{--    .navbar-toggler-icon {--}}
{{--        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,193,7, 0.7)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");--}}
{{--    }--}}

{{--    /* Mobile responsiveness */--}}
{{--    @media (max-width: 991px) {--}}
{{--        .navbar-brand span {--}}
{{--            display: inline-block !important;--}}
{{--        }--}}

{{--        .navbar-nav .nav-link {--}}
{{--            text-align: center;--}}
{{--            padding: 10px 0;--}}
{{--            border-bottom: 1px solid rgba(255,255,255,0.1);--}}
{{--        }--}}

{{--        /* Mobile toggle button styles */--}}
{{--        .navbar-toggler {--}}
{{--            margin-top: 0.25rem;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}


<nav class="navbar navbar-expand-lg navbar-dark shadow-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="me-2" style="height: 60px; object-fit: contain;">
            <span class="fw-bold fs-4 d-none d-md-inline">Şirkət Adı</span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Navigasiyanı aç">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto text-uppercase fw-semibold">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ehtiyyat_hisseleri') }}">
                        <i class="fas fa-cogs me-2"></i>Ehtiyat Hissələri
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('oils') }}">
                        <i class="fas fa-oil me-2"></i>Yağlar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">
                        <i class="fas fa-info-circle me-2"></i>Haqqımızda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">
                        <i class="fas fa-blog me-2"></i>Bloglar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq') }}">
                        <i class="fas fa-question-circle me-2"></i>FAQ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-envelope me-2"></i>Əlaqə
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="container-fluid hero-section">
    <div class="row align-items-center justify-content-between">
        <!-- Left Side - Text -->
        <div class="col-12 col-md-8 hero-text">
            <p class="display-4 fw-bold text-warning">Avtomobil Ehtiyat Hissələri və</p>
            <p class="display-4 fw-bold mt-3 text-warning">Yağları Axtarırsan?</p>

            <!-- Button -->
            <a href="#" class="mt-4 btn btn-warning text-white py-2 px-3 rounded d-inline-block" style="width: 200px;">Mağazadan Soruş</a>
        </div>

        <!-- Right Side - Social Icons -->
        <div class="col-12 col-md-4 d-flex flex-column hero-social mt-4 mt-md-0">
            <div class="d-flex justify-content-center justify-content-md-start">
                <a href="#" class="text-white social-icon me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white social-icon me-3"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white social-icon me-3"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-white social-icon"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>

<style>
    .navbar {
        background-color: #343a40;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link {
        color: #f8f9fa !important;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
        transform: scale(1.05);
    }

    .navbar-toggler {
        border-color: #ffc107;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,193,7, 0.7)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .hero-section {
        background-color: #343a40;
        min-height: calc(100vh - 80px); /* Subtract navbar height */
        display: flex;
        flex-direction: column; /* Yuxarıdan aşağıya yerləşdirmək üçün */
        justify-content: center; /* Mərkəzə düzülmə */
        align-items: center;
        padding: 2rem;
        color: white;
    }

    .hero-text {
        text-align: center;
        margin-bottom: 1rem;
    }

    .hero-social {
        text-align: center;
        margin-top: 1rem;
    }

    /* Sosial ikonların üslubu */
    .social-icon {
        font-size: 1.5rem;
        margin: 0.5rem;
        color: white;
        transition: transform 0.3s ease;
    }

    .social-icon:hover {
        transform: scale(1.2);
        color: #ffc107 !important;
    }


    @media (max-width: 991px) {

        .navbar-brand span {
            display: inline-block !important;
        }

        .navbar-nav .nav-link {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-toggler {
            margin-top: 0.25rem;
        }

        .hero-section {
            flex-direction: column;
            padding: 1rem;
        }

        .hero-text {
            text-align: center;
            margin-bottom: 1rem;
        }

        .hero-social {
            text-align: center;
            margin-top: 1rem;
        }

        .social-icon {
            font-size: 1.3rem; /* Mobil üçün daha kiçik ikonlar */
        }
    }

    /* Tablet və kiçik ekranlar üçün düzəliş */
    @media (min-width: 768px) and (max-width: 991px) {
        .hero-text {
            text-align: left;
            font-size: 2rem; /* Böyük ekranlarda daha kiçik font */
        }

        .hero-social {
            text-align: left;
        }
    }

    /* Masaüstü ekranlar üçün düzəliş */
    @media (min-width: 992px) {
        /* Hero bölməsindəki mətnlər */
        .hero-text {
            font-size: 3rem;
        }

        .hero-social {
            text-align: right;
        }
    }



</style>
