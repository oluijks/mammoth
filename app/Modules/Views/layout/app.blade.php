<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}" class="nojs">
<head>
@include('partials.meta')
</head>
<body>
@include('partials.browserupgrade')
@include('layout.partials._navigation')
<div class="container" id="app">{{ PHP_EOL  }}@yield('content'){{ PHP_EOL  }}</div>
@include('layout.partials.footer')
@include('partials.scripts')
@yield('scripts')
@include('layout.partials.session-status')
@include('partials.webfonts')
@if (app()->environment('production'))
@include('partials.ga')
@endif
</body>
</html>
