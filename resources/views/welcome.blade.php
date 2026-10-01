<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduStyle - Pemetaan Gaya Belajar</title>

    <!-- WAJIB untuk styling form Filament di Frontend -->
    @filamentStyles
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 antialiased py-10">

    <livewire:form-identitas />

    @filamentScripts
    @vite('resources/js/app.js')
</body>
</html>
