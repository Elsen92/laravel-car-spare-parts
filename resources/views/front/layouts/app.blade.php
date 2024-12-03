<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Boxicons -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            position: relative;
            overflow-x: hidden;
            color: #fff;
        }

        #snow-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .snowflake {
            position: absolute;
            top: -10px;
            font-size: 1.2em;
            color: white !important;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
            user-select: none;
            pointer-events: none;
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(100vh);
            }
        }
    </style>

    <!-- Bootstrap JS və Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</head>
<body>

@include('front.layouts.navbar')



<div id="snow-container"></div>

<div class="container" style="position: relative; z-index: 2;">
    @yield('content')
</div>

@include('front.layouts.footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const snowContainer = document.getElementById('snow-container');
        const snowflakeCount = 80;

        for (let i = 0; i < snowflakeCount; i++) {
            const snowflake = document.createElement('div');
            snowflake.classList.add('snowflake');
            snowflake.innerHTML = '✹';
            snowflake.style.color = 'white';
            snowflake.style.left = Math.random() * 100 + 'vw';
            snowflake.style.animationDuration = Math.random() * 5 + 2 + 's';
            snowflake.style.fontSize = Math.random() * 2 + 5 + 'px';
            snowContainer.appendChild(snowflake);


            snowflake.addEventListener('animationiteration', () => {
                snowflake.style.left = Math.random() * 100 + 'vw';
            });
        }
    });
</script>

</body>
</html>
