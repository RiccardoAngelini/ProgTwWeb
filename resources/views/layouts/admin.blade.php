<!DOCTYPE html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_aziende.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_login.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_faq2.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_chisiamo.css')}}">
    <link rel="stylesheet" href="{{asset('css/style_contatti.css')}}">
    <link rel="stylesheet" href="{{asset('css/catalogo.css')}}">
    <link rel="stylesheet" href="{{asset('css/dovesiamo.css')}}">
    <link rel="stylesheet" href="{{asset('css/registrazione.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/staff.css')}}">

    

    <script src="js/script.js" defer></script>
    <script src="js/JS_FAQ.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
     <!--Navbar-->
    <div id="nav">
        @include('layouts/navadmin')
    </div>

    <!--Content-->

    <div id="content">
        @yield('content')
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>

</body>
</html>