<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Poster</title>

    {{-- Vite --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="poster">
        {{ $slot }}
    </div>
</body>
</html>