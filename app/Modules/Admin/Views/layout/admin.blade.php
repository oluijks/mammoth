<?php
/**
 * Default admin layout
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

<!DOCTYPE html>
<html lang="{{ config('app.locale')  }}" class="nojs">
<head>
@include('Admin::layout.partials.meta')
</head>
<body>
@include('Admin::layout.partials._navigation')
<div class="container-fluid" id="app">{{ PHP_EOL  }}@yield('content'){{ PHP_EOL  }}</div>
@include('Admin::layout.partials.footer')
@include('partials.scripts')
@yield('scripts')
@include('layout.partials.session-status')
</body>
</html>
