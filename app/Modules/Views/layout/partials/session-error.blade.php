@if (count($errors) > 0)
    <div class="alert alert-danger">
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive hidden-xs"
                    style="float: right;" src="{!! URL::asset('img/mammoth-icons/Mammooth_128x128.png') !!}"
                     alt=""
                     width="128"
                     height="128">
                </p>
            </div>
            <div class="col-md-9">
                <h4>{{ trans('validation.form_problems') }}</h4><br>
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
