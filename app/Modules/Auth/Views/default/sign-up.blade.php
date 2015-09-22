<?php
/**
 * Auth Sign up view
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: ' . trans('Auth::forms.sign-up-account'))

@section('content')

@include('Auth::'.config('mammoth.theme', 'default').'.partials.default-page-header', [
    'pageHeader' => 'Sign in', 'quote' => false
])

<div class="container">
	<div class="row">
        <div class="col-md-5 text-center hidden-xs">
            <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Seated_256x256.png') !!}"
                 alt=""
                 width="256"
                 height="256">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus fugiat mollitia nostrum
                perspiciatis praesentium recusandae similique veniam! Blanditiis commodi esse facere libero mollitia
                numquam quisquam quo reiciendis, totam voluptas?</p>
        </div>
		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">{!! trans('Auth::forms.sign-up-account') !!}</div>
				<div class="panel-body">
                    @include('layout.partials.session-error')
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        {!! csrf_field() !!}
						<div class="form-group form-group-sm @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{!! trans('Auth::forms.name') !!}</label>
							<div class="col-md-6">
								<input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="{!! trans('Auth::forms.name') !!}"
                                       value="{{ old('name') }}">
							</div>
						</div>
                        <div class="form-group form-group-sm @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">
                                {!! trans('Auth::forms.email-address') !!}
                            </label>
							<div class="col-md-6">
								<input type="email"
                                       class="form-control"
                                       name="email"
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
                                       placeholder="Password">
							</div>
						</div>
                        <div class="form-group form-group-sm @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">
                                {!! trans('Auth::forms.confirm-password') !!}
							</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password_confirmation"
                                       placeholder="{!! trans('Auth::forms.confirm-password') !!}">
							</div>
						</div>
                        @if (config('mammoth.google_recaptcha'))
                        <div class="form-group recaptcha">
                            <div class="col-md-6 col-md-offset-4">
                                <div id="recaptcha" class="g-recaptcha recaptcha-inner"></div>
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-block">
                                    {!! trans('Auth::forms.create-account') !!}
                                </button>
                            </div>
                        </div>
                        <p class="help-block text-center">{!! trans('Auth::forms.agree_terms') !!}</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
@if (config('mammoth.google_recaptcha'))
<script>
(function (window, $) {
    var onloadRecaptchaCallback = function () {
        $(".recaptcha").show();
        grecaptcha.render("recaptcha", {
            "sitekey" : "{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}",
        });
    };
    return window.onloadRecaptchaCallback = onloadRecaptchaCallback;
}(window, jQuery));
</script>
<script
    src="https://www.google.com/recaptcha/api.js?hl={{ config('app.locale') }}&onload=onloadRecaptchaCallback&render=explicit"
    async defer>
</script>
@endif
@endsection
