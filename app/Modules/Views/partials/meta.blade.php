<?php
/**
 * Default meta view.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mammoth @yield('title', ':: Welcome')</title>
@include('partials.icons')
@if (App::environment('production'))
<link href="{!! elixir('css/app.css') !!}" rel="stylesheet">
@else
<link href="{!! url('css/app.css') !!}" rel="stylesheet">
@endif
<style>html.js .nojs { display: none; }</style>
<script>
    document.documentElement.className = document.documentElement.className.replace('nojs','js');
</script>
@if (config('mammoth.support_ie8'))
@include('partials.ie8')
@endif
