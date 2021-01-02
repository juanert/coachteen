<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

        <title>Coachteen</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Helvetica">

        <link rel="stylesheet" href="{{ asset('sass/app.scss') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

        <script src="{{ asset('js/slider.js') }}"></script>

    <body>

        <x-hero/>
        <x-benefits/>
        <x-key-to-success/>
        <x-allies/>
        <x-components/>
        <x-advantages-wrapper/>
        <x-wit-generation/>
        <x-plans/>
        <x-blog/>

    </body>
</html>
