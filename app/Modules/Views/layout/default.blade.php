<?php
/**
 * Default layout.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}" class="nojs">
<head>
@include('partials.meta')
</head>
<body>
@if (config('mammoth.support_ie8'))
@include('partials.browsehappy')
@endif
@include('layout.partials._navigation')
@yield('content')
@include('layout.partials.footer')
@include('partials.scripts')
@yield('scripts')
@include('layout.partials.session-status')
@if (App::environment('production'))
@include('partials.ga')
@endif
</body>
</html>
