<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/sass/app.scss', "resources/js/app.js"])

</head>

<body>
    @include('partials.header')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 col-lg-4 col-sm-12 col-md-6 py-3">
                    <x-card>
                        {{ $movie['title'] }}
                        <x-slot:originalTitle> {{ $movie['original_title'] }} </x-slot:originalTitle>
                        <x-slot:nationality> {{ $movie['nationality'] }} </x-slot:nationality>
                        <x-slot:date> {{ $movie['date'] }} </x-slot:date>
                        <x-slot:vote> {{ $movie['vote'] }} </x-slot:vote>
                    </x-card>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>