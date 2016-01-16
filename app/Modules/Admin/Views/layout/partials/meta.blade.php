<?php
/**
 * Default meta view.
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mammoth @yield('title', ':: Welcome')</title>
@include('partials.icons')
<link href="{!! asset(elixir('css/admin/app.css')) !!}" rel="stylesheet">
<style>html.js .nojs { display: none; }</style>
<script>
    document.documentElement.className = document.documentElement.className.replace('nojs','js');
</script>
@if (config('mammoth.support_ie8'))
    @include('partials.ie8')
@endif
