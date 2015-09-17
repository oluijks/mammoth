@extends('layout.app')

@section('title', ':: ' . trans('Auth::forms.sign-in-account'))

@section('content')

@include('Auth::partials.default-page-header', ['pageHeader' => 'Sign in', 'quote' => false])

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
                    {!! trans('Auth::forms.sign-in-account') !!}
                    <span class="pull-right">
                    <a class=""
                       href="{{ route('sign-up') }}">{!! trans('Auth::forms.sign-up-account') !!}</a>
                    </span>
                </div>
				<div class="panel-body">
					@include('layout.partials.session-error')
					<form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('/auth/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-group @if (count($errors) > 0) has-error @endif ">
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
                        <div class="form-group @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{!! trans('Auth::forms.password') !!}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="{!! trans('Auth::forms.password') !!}">
							</div>
						</div>

                        {{--
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox"
                                               name="remember">{!! trans('Auth::forms.remember-me') !!}
									</label>
								</div>

							</div>
						</div>
						--}}

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
                                <button type="button"
                                        class="btn btn-primary"
                                        name="remember"
                                        data-toggle="button"
                                        aria-pressed="false"
                                        autocomplete="off">
                                    {!! trans('Auth::forms.remember-me') !!}
                                </button>
                                <button type="submit" class="btn btn-success">
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

{{--
@section('scripts')
    <script>
        (function ($) {

            'use strict';

            var Vue = window.Vue;

            Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('input[name="_token"]').getAttribute('value');
            var url = "{{ url('/auth/login') }}";

            var login = new Vue({
                el: '.panel-body',
                data: {
                    email: '',
                    password: '',
                    response: []
                },
                methods: {
                    login: function (event) {
                        event.preventDefault();

                        var payload = {
                            email: this.email,
                            password: this.password,
                        };

                        this.$http.post(url, payload, function (data, status, request) {

                            this.response = data;
                            console.info(this.response);

                        }).error(function (data, status, request) {
                            console.log("Error:" + JSON.stringify(data));
                        });
                    }
                }
            });
        }(jQuery));
    </script>
@endsection
--}}
