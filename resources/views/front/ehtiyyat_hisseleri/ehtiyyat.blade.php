
<div class="container-fluid px-4 py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($spareParts as $part)
            <div class="col d-flex justify-content-center">
                <div class="card card-custom mb-4" style="max-width: 250px; width: 100%;">
                    <!-- Part Image -->
                    <div class="card-img-container" style="height: 200px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $part->image) }}"
                             class="card-img-top img-fluid"
                             alt="{{ $part->name }}"
                             style="width: 100%; height: 100%; object-fit: cover;">
                    </div>

                    <div class="card-body text-center">
                        <!-- Part Name -->
                        <h5 class="card-title mb-2" style="font-size: 1rem; min-height: 40px;">
                            {{ Str::limit($part->name, 30) }}
                        </h5>

                        <!-- Part Price -->
                        <p class="card-text mb-3" style="font-size: 0.9rem; font-weight: bold; color: #d9534f;">
                            {{ $part->price }} <i class="fa-solid fa-manat-sign"></i>
                        </p>

                        <!-- Link -->
                        <a href="#" class="more-link btn btn-warning text-white py-2 px-3 rounded w-100">
                            Etrafli Bax
                        </a>
                    </div>

                    <!-- Overlay with Hover Effect -->
                    <div class="card-overlay">
                        <a href="#" class="more-link btn btn-warning text-white py-2 px-3 rounded w-100">
                            Etrafli Bax
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="#" class="btn btn-warning btn-lg text-white w-100 mw-md-auto" style="max-width: 300px;">
            Daha Çox Göster
        </a>
    </div>
</div>

<style>
    .card-custom {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-custom:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 10;
    }

    .card-custom:hover .card-overlay {
        display: flex;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .card-custom {
            max-width: 100%;
        }

        .card-body {
            padding: 0.75rem;
        }
    }

    @media (min-width: 577px) and (max-width: 992px) {
        .card-custom {
            max-width: 220px;
        }
    }
</style>

<script>
    // Optional: Add hover effect for touch devices
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card-custom');

        cards.forEach(card => {
            card.addEventListener('touchstart', function() {
                this.classList.add('hover');
            });

            card.addEventListener('touchend', function() {
                this.classList.remove('hover');
            });
        });
    });
</script>
