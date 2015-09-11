<!DOCTYPE html>
<html lang="en" class="nojs">
<head>
@include('partials.meta')
</head>
<body>
@include('partials.browserupgrade')
@include('layout.partials._navigation')
<div class="container" id="app">
@yield('content')
</div>
@include('layout.partials.footer')
@include('partials.scripts')
@include('layout.partials.session-status')
@include('partials.webfonts')
@include('partials.ga')
</body>
</html>
