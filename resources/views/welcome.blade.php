<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-Vue-SPA</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <meta name="csrf-token" value="{{ csrf_token() }}" />
</head>

<body>
    <div id="app"></div>
    <script>
        var apiUrl = "{{env('API_URL')}}";
    </script>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>