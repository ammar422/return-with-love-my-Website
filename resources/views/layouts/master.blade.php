<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>@yield('tittle', 'ammar-portfolio')</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="assets/css/meyawo.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')

</body>

</html>
