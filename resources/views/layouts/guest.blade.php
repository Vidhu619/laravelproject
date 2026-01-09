<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Tailwind (Breeze uses this) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            
        }

        .auth-container {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        /* LEFT SIDE */
        .auth-left {
            width: 50%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Breeze card wrapper */
        .auth-left > div {
            width: 100%;
            max-width: 420px;
        }

        /* RIGHT SIDE */
        .auth-right {
            width: 50%;
         background-image: url('/image/back1.jpg'); /* change filename */
    background-size: cover;        /* cover full screen */
    background-position: center;   /* center image */
    background-repeat: no-repeat;  /* no tiling */
    background-attachment: fixed;  /* optional: parallax effect */
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .auth-container {
                flex-direction: column;
            }

            .auth-left,
            .auth-right {
                width: 100%;
                height: 50%;
            }
        }
    </style>
</head>

<body>
    <div class="auth-container">

     
        <div class="auth-left">
            {{ $slot }}
        </div>

       
        <div class="auth-right"></div>

    </div>
</body>
</html>
