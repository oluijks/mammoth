<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}" class="nojs">
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
@if (App::environment('production'))
@include('partials.ga')
@endif
</body>
</html>
