@extends('layout.app')

@section('title', ':: ' . trans('forms.sign-in-account'))

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('forms.sign-in-account') }}</div>
				<div class="panel-body">
					@include('layout.partials.session-error')
					<form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('/auth/login') }}">
                        {{-- <form class="form-horizontal" v-on="submit: login"> --}}
                        {!! csrf_field() !!}
                        <div class="form-group @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.email-address') }}</label>
							<div class="col-md-6">
								<input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="E-Mail"
                                       value="{{ old('email') }}"
                                       {{-- v-model="email" --}}>
							</div>
						</div>
                        <div class="form-group @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.password') }}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="Password"
                                       {{-- v-model="password" --}}>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox"
                                               name="remember"> {{ trans('forms.remember-me') }}
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success">{{ trans('forms.sign-in') }}</button>
								<a class="btn btn-link"
                                   href="{{ route('sign-up') }}">{{ trans('forms.sign-up-account') }}</a>
							</div>
						</div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-link"
                                   href="{{ url('/password/email') }}">{{ trans('forms.forgot-password') }}</a>
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
