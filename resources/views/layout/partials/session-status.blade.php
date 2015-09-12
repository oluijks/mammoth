{{-- http://bootstrap-growl.remabledesigns.com/ --}}
@if (session('status'))
    <script>
        $.notify({
            icon: '{!! URL::asset('img/mammoth-icons/' . session('image')) !!}',
            message: '{!! session('status') !!}'
        },{
            type: '{{ session('type') }}',
            icon_type: 'image'
        });
    </script>
@endif
