<!DOCTYPE html>
<html lang="en" class="nojs">
<head>
@include('partials.meta')
</head>
<body>
@include('partials.browserupgrade')
@include('layout.partials._navigation')
<div class="container">
@include('layout.partials.session-status')
@yield('content')
</div>
<footer class="navbar navbar-footer navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><p class="navbar-text">Copyright &copy; 2015 Mammoth</p></div>
            <div class="col-md-6"><p class="navbar-text navbar-right">Made with &hearts; by Olaf</p></div>
        </div>
    </div>
</footer>
<script src="{!! URL::asset('js/vendor/vendors.js') !!}"></script>
<script src="{!! URL::asset('js/app.js') !!}"></script>
@include('partials.webfonts')
@include('partials.ga')
</body>
</html>
