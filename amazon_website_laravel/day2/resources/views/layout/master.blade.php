<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
        <!-- MDB -->

        <script src="main.js"></script>

        <link rel="stylesheet" href="{{ asset('style.css') }}">

        <title>@yield('title', 'unknown page')</title>
    </head>
    <body>
        <!-- Header -->
        @include('layout.header')
        <!-- end header -->

        <!-- body of page -->
        @yield('content')
        <!-- end body -->

        <!-- footer -->
        {{-- @include('layout.footer') --}}
        <!-- end footer -->
    </body>

</html>
