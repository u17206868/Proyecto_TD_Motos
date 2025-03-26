<!DOCTYPE html>
<html lang="es-PE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link href="https://cds.neoauto.pe/neoauto2/plugins/styes-form/form.css?20230516121747" rel="stylesheet"
        type="text/css">
    <link href="https://cds.neoauto.pe/neoauto2/css/new.css?20230516121747" rel="stylesheet" type="text/css">
    <link href="https://cds.neoauto.pe/neoauto2/css/reset.css?20230516121747" rel="stylesheet" type="text/css">
    {{--<link href="https://cds.neoauto.pe/neoauto2/css/styles.css?20230516121747" rel="stylesheet" type="text/css">--}}
    {{--<link href="https://cds.neoauto.pe/neoauto2/css/fonts.css?20230516121747" rel="stylesheet" type="text/css"--}}
    {{--    charset="utf-8">--}}
    <!-- Para poner el logo -->
    {{-- <link rel="shortcut icon" href="{{ asset('icons/logo.svg') }}" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ asset('images/logo3.webp') }}" type="image/x-icon">
    <link href="https://cds.neoauto.pe/neoauto2/css/footer-styles.css?20230516121747" rel="stylesheet" type="text/css"
        media="all">

    <link href="https://cds.neoauto.pe/neoauto2/css/neoauto.css?20230516121747" rel="stylesheet" type="text/css"
        charset="utf-8">
    <link href="https://cds.neoauto.pe/neoauto2/f/css/bjqs.css?20230516121747" rel="stylesheet" type="text/css"
        charset="utf-8">
    <link rel="stylesheet" href="https://cds.neoauto.pe/neoauto2/css/temporal.css?20230516121747">
    <link rel="stylesheet" href="{{ $style ?? '' }}">
    <link rel="stylesheet" href="/css/app.css">

    <title>MotosYamaha.pe</title>
</head>

<body>

    @include('partials.header')

    <div class="container-fluid" style="flex: 1; padding: 0;">
        <main role="main">
            {!! $renderBody !!}
        </main>
    </div>

    @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>
