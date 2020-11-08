<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', "Spooky right?")</title>
</head>
<body>
    <ul>
        <li><a href="/contact">contactez nous</a></li>
        <li><a href="/">index</a></li>
        <li><a href="/products">Produits</a></li>
    </ul>
    @yield('content')
</body>