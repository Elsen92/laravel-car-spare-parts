{{--<footer class="bg-dark text-white py-4">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <!-- Sol tərəf: Əlaqə məlumatları -->--}}
{{--            <div class="col-md-6 mb-4">--}}
{{--                <h4 class="mb-4">Əlaqə Məlumatları</h4>--}}
{{--                <p><i class="fas fa-map-marker-alt me-2"></i><strong>Ünvan:</strong> Bakı, Yasamal rayonu, Şərifzadə küç., 25</p>--}}
{{--                <p><i class="fas fa-phone-alt me-2"></i><strong>Telefon:</strong> +994 55 987 65 43</p>--}}
{{--                <p><i class="fas fa-envelope me-2"></i><strong>Email:</strong> info@autoparts.az</p>--}}
{{--            </div>--}}

{{--            <!-- Sağ tərəf: Məhsul Kategoriyaları -->--}}
{{--            <div class="col-md-6 mb-4">--}}
{{--                <h4 class="mb-4">Məhsul Kategoriyaları</h4>--}}
{{--                <ul class="list-unstyled">--}}
{{--                    <li><i class="fas fa-chevron-right me-2"></i>Avtomobil Yağları</li>--}}
{{--                    <li><i class="fas fa-chevron-right me-2"></i>Filtrlər</li>--}}
{{--                    <li><i class="fas fa-chevron-right me-2"></i>Əyləc Diskləri və Yastıqları</li>--}}
{{--                    <li><i class="fas fa-chevron-right me-2"></i>Akumulyatorlar</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row mt-4">--}}
{{--            <div class="col text-center">--}}
{{--                <!-- Sosial Media İkonları -->--}}
{{--                <div class="social-icons">--}}
{{--                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>--}}
{{--                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>--}}
{{--                </div>--}}
{{--                <p class="mt-3 mb-0">&copy; 2024 AutoParts. Bütün hüquqlar qorunur.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}


<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Sol tərəf: Əlaqə məlumatları -->
            <div class="column contact-info">
                <h4>Əlaqə Məlumatları</h4>
                <p><i class="icon fas fa-map-marker-alt"></i><strong>Ünvan:</strong> Bakı, Yasamal rayonu, Şərifzadə küç., 25</p>
                <p><i class="icon fas fa-phone-alt"></i><strong>Telefon:</strong> +994 55 987 65 43</p>
                <p><i class="icon fas fa-envelope"></i><strong>Email:</strong> info@autoparts.az</p>
            </div>

            <!-- Sağ tərəf: Məhsul Kategoriyaları -->
            <div class="column product-categories">
                <h4>Məhsul Kategoriyaları</h4>
                <ul>
                    <li><i class="icon fas fa-chevron-right"></i>Avtomobil Yağları</li>
                    <li><i class="icon fas fa-chevron-right"></i>Filtrlər</li>
                    <li><i class="icon fas fa-chevron-right"></i>Əyləc Diskləri və Yastıqları</li>
                    <li><i class="icon fas fa-chevron-right"></i>Akumulyatorlar</li>
                </ul>
            </div>
        </div>

        <div class="row social-media">
            <div class="text-center">
                <!-- Sosial Media İkonları -->
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <p class="copyright">&copy; 2024 AutoParts. Bütün hüquqlar qorunur.</p>
            </div>
        </div>
    </div>
</footer>


<style>
    /* Ümumi Footer Dizaynı */
    .footer {
        background-color: #343a40;
        color: white;
        padding: 30px 15px;
        font-family: Arial, sans-serif;
    }

    .footer .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* İkonlar */
    .icon {
        margin-right: 10px;
        color: #ffc107;
    }

    /* Sol Tərəf: Əlaqə Məlumatları */
    .column {
        margin-bottom: 20px;
    }

    .contact-info h4,
    .product-categories h4 {
        font-size: 1.6rem;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .contact-info p,
    .product-categories ul {
        font-size: 1.1rem;
        margin-bottom: 10px;
    }

    .product-categories ul {
        padding-left: 20px;
    }

    .product-categories li {
        list-style: none;
    }

    .product-categories li i {
        margin-right: 10px;
    }

    /* Sosial Media İkonları */
    .social-media .social-icon {
        color: white;
        font-size: 1.5rem;
        margin-right: 15px;
        text-decoration: none;
    }

    .social-media .social-icon:hover {
        color: #ffc107;
    }

    /* Mobil cihazlar üçün */
    @media (max-width: 768px) {
        .footer .container {
            padding: 0 10px;
        }

        .row {
            flex-direction: column;
            align-items: center;
        }

        .column {
            text-align: center;
            margin-bottom: 20px;
        }

        .social-media .social-icon {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .social-media p {
            font-size: 1rem;
            margin-top: 15px;
        }

        .contact-info h4,
        .product-categories h4 {
            font-size: 1.3rem;
        }
    }

    /* Daha geniş ekranlar üçün */
    @media (min-width: 769px) {
        .row {
            display: flex;
            justify-content: space-between;
        }

        .column {
            width: 48%;
        }
    }

</style>
