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
<script src="{!! URL::asset('js/vendor/vendors.js') !!}"></script>
<script src="{!! URL::asset('js/app.js') !!}"></script>
@include('partials.webfonts')
@include('partials.ga')
</body>
</html>
