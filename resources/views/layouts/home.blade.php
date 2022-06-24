<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.home.meta')
    
    <title>@yield('title') | SIPPRA </title>

    <link rel="stylesheet" rel="apple-touch-icon" href="">
    <link rel="stylesheet" rel="shortcut icon" href="image/x-icon">
    @stack('before-style')

    @include('includes.home.style')

    @stack('after-style')
</head>

<body>
    @include('includes.home.header')
    @include('includes.home.navbar')

    @yield('content')
    @include('includes.home.footer')

    @stack('before-script')
    @include('includes.home.script')
    @stack('after-script')
    
</body>
</html>