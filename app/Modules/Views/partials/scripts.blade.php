<?php
/**
 * Default scripts view.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>
@if (App::environment('production'))
<script src="{!! elixir('js/vendor/vendors.js') !!}"></script>
<script src="{!! elixir('js/app.js') !!}" async></script>
@else
<script src="{!! url('js/vendor/vendors.js') !!}"></script>
<script src="{!! url('js/app.js') !!}" async></script>    
@endif
