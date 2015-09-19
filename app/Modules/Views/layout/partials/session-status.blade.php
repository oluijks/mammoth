@if (session('status'))
<script>
(function() {
    $.notify({
        icon: '{!! URL::asset('img/mammoth-icons/' . session('image')) !!}',
        message: '{!! session('status') !!}'
    },{
        type: '{{ session('type') }}',
        icon_type: 'image'
    });
}());
</script>
@endif
