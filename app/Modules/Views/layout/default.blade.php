<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}" class="nojs">
<head>
@include('partials.meta')
</head>
<body>
@include('partials.browsehappy')
@include('layout.partials._navigation')
{{ PHP_EOL  }}@yield('content'){{ PHP_EOL  }}
@include('layout.partials.footer')
@include('partials.scripts')
@yield('scripts')
@include('layout.partials.session-status')
@if (app()->environment('production'))
@include('partials.ga')
@endif
</body>
</html>
