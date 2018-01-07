<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('include.navbar')
<div class="container">
    @include('include.system.messages')
    @yield('content')
</div>
<footer class="text-center">
    <br>
    <br>
    <p>Copyright &copy; 2018 Klaus Donnert</p>
</footer>
<script src="/js/app.js"></script>
</body>
</html>