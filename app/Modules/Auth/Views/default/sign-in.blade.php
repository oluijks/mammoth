<?php
/**
 * Auth Sign in view
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: ' . trans('Auth::forms.sign-in-account'))

@section('content')

@include('Auth::'.config('mammoth.theme', 'default').'.partials.default-page-header', [
    'pageHeader' => 'Sign in', 'quote' => false
])

<div class="container">
	<div class="row">
        <div class="col-md-5 text-center hidden-xs">
            <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Seated_256x256.png') !!}"
                 alt="Mammoth"
                 width="256"
                 height="256">
        </div>
		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">
                    {!! trans('Auth::forms.sign-in-account') !!}
                    <span class="pull-right">
                    <a href="{{ route('sign-up') }}">{!! trans('Auth::forms.sign-up-account') !!}</a>
                    </span>
                </div>
				<div class="panel-body">
					@include('layout.partials.session-error')
					<form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('/auth/login') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" id="remember" name="remember" value="">
                        <div class="form-group form-group-sm @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">
                                {!! trans('Auth::forms.email-address') !!}
                            </label>
							<div class="col-md-6">
								<input type="email"
                                       class="form-control"
                                       name="email"
                                       tabindex="1"
                                       placeholder="{!! trans('Auth::forms.email-address') !!}"
                                       value="{{ old('email') }}">
							</div>
						</div>
                        <div class="form-group form-group-sm @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{!! trans('Auth::forms.password') !!}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password"
                                       tabindex="2"
                                       placeholder="{!! trans('Auth::forms.password') !!}">
							</div>
						</div>
						<div class="form-group form-group-sm">
							<div class="col-md-6 col-md-offset-4">
                                <button type="button"
                                        class="btn btn-primary"
                                        id="remember-button"
                                        tabindex="4"
                                        data-toggle="button"
                                        aria-pressed="false"
                                        autocomplete="off">
                                    {!! trans('Auth::forms.remember-me') !!}
                                </button>
                                <button type="submit" class="btn btn-success" tabindex="3">
                                    {!! trans('Auth::forms.sign-in') !!}
                                </button>
							</div>
						</div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ url('/password/email') }}">{!! trans('Auth::forms.forgot-password') !!}</a>
                            </div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script>
    (function ($) {
        'use strict';
        $('#remember-button').click(function () {
            var $v = $('#remember').val();
            $('#remember').val($v === "1" ? "" : "1");
        });
    }(jQuery));
</script>
@endsection
