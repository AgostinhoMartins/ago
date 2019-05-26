<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>AGO</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles2.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fontawesome-free/css/all.css') }}">
    </head>
    <?php
        /**************** Descrição do documento ****************
        * Nome do ficheiro: master.blade.php                    *
        * UC: Projeto Multimédia                                *
        * @autor Agostinho Martins                              *
        * @versão 1.0                                           *
        * Data: 25 Maio de 2019                                 *
        * Descrição: Página master do website AGO               *
        ********************************************************/
    ?>
    <body>

        @include('layouts.menu')


        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @yield('content')

        @include('layouts.footer')

            <!-- scripts  -->
            <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
            <script src="{{ asset('js/popper.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('js/script.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/moment-with-locales.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
        </body>
</html>

