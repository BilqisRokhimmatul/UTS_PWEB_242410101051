<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Bloom & Grace Florist</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
        .orb {
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255,182,193,0.3) 0%, rgba(253,242,242,0) 70%);
            border-radius: 50%;
            z-index: 0;
            filter: blur(40px);
            animation: floatOrb 20s infinite alternate;
        }

        @keyframes floatOrb {
            0% { transform: translate(-10%, -10%); }
            100% { transform: translate(20%, 20%); }
        }

        .petal {
            position: absolute;
            background-color: #ffdae9; 
            border-radius: 150% 0 150% 0;
            animation: falling 10s infinite linear;
            opacity: 0.6;
            z-index: 1;
            pointer-events: none;
        }

        @keyframes falling {
            0% { transform: translate(0, -10vh) rotate(0deg); opacity: 0; }
            10% { opacity: 0.7; }
            90% { opacity: 0.7; }
            100% { transform: translate(150px, 105vh) rotate(360deg); opacity: 0; }
        }
    </style>
</head>
<body class="bg-[#fdf2f2] text-gray-800">
    @if(!Route::is('login'))
    @include('components.navbar', ['username' => $username ?? 'Staff'])
    @endif

    <main class="min-h-screen">
        @yield('content')
    </main>

    @if(!Route::is('login'))
    @include('components.footer')
    @endif
</body>
</html>