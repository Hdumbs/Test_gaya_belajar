<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'EduStyle - Pemetaan Gaya Belajar' }}</title>

        <!-- Tambahkan baris Vite ini agar Tailwind terbaca -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-50 antialiased py-10">

        {{ $slot }}

    </body>
</html>
