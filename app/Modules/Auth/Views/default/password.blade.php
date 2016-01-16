<?php
/**
 * Auth password view.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: ' . trans('Auth::forms.reset-password'))

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-5 text-center hidden-xs">
            <img src="{!! asset('img/mammoth-icons/Mammoth_Seated_256x256.png') !!}"
                 alt="Mammoth"
                 width="256"
                 height="256">
        </div>
		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">{!! trans('Auth::forms.reset-password') !!}</div>
				<div class="panel-body">
                    @include('layout.partials.session-error')
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}
						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">{!! trans('Auth::forms.email-address') !!}</label>
							<div class="col-md-6">
								<input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="{!! trans('Auth::forms.email-address') !!}"
                                       value="{{ old('email') }}">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
                                    {!! trans('Auth::forms.send-password-button') !!}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
