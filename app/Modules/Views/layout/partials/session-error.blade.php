<?php
/**
 * Session error view
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive hidden-xs session-error-icon"
                     src="{!! URL::asset('img/icon_error.png') !!}"
                     alt="{!! trans('validation.form_problems') !!}"
                     width="128"
                     height="128">
                </p>
            </div>
            <div class="col-md-9">
                <h4>{!! trans('validation.form_problems') !!}</h4><br>
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
