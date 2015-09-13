<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}" class="nojs">
<head>
@include('Admin::layout.partials.meta')
</head>
<body>
@include('Admin::layout.partials._navigation')
<div class="container" id="app">{{ PHP_EOL  }}@yield('content'){{ PHP_EOL  }}</div>
@include('Admin::layout.partials.footer')
@include('partials.scripts')
@yield('scripts')
@include('layout.partials.session-status')
@include('partials.webfonts')
</body>
</html>
