<?php
/**
 * Session status view.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@if (session('status'))
<script>
(function() {
    $.notify({
        icon: '{!! asset('img/mammoth-icons/' . session('image')) !!}',
        message: '{!! session('status') !!}'
    },{
        type: '{{ session('type') }}',
        icon_type: 'image'
    });
}());
</script>
@endif
