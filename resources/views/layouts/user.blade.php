<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.user.meta')

    <title>
        @yield('title') | Landing Page
    </title>

    <link rel="stylesheet" rel="apple-touch-icon" href="">
    <link rel="stylesheet" rel="shortcut icon" href="image/x-icon">

    @stack('before-style')

    @include('includes.user.style')

    @stack('after-style')
</head>
<body>
    
    @include('includes.user.header')
    @yield('content')
    @include('includes.user.footer')

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>
</html>