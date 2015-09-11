@if (count($errors) > 0)
    <div class="alert alert-danger">
        <p><strong>{{ trans('validation.form_problems') }}</strong></p><br>
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
