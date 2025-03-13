<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 | C14230230</title>
    {{-- Tailwind --}}
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

        .font-primary {
            font-family: "Anton", sans-serif;
            /* font-weight: 400; */
            font-style: normal;
        }

        .font-secondary {
            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }
    </style>
    @yield('header')
</head>

<body>
    @include('utils.nav')
    @yield('content')
    @include('utils.footer')
</body>

</html>