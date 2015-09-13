<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="_token" content="{!! csrf_token() !!}"/>
<title>Mammoth @yield('title', ':: Welcome')</title>
{{-- <link rel="apple-touch-icon" href="apple-icon-180x180.png"> --}}
@include('partials.icons')
<link href="{!! URL::asset(elixir('css/app.css')) !!}" rel="stylesheet">
<style>html.js .nojs { display: none; }</style>
<script>
    document.documentElement.className = document.documentElement.className.replace('nojs','js');
</script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
