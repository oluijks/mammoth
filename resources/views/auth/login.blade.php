@extends('layout.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('forms.sign-in-account') }}</div>
				<div class="panel-body">
					@include('layout.partials.session-error')
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        {!! csrf_field() !!}
						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.email-address') }}</label>
							<div class="col-md-6">
								<input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="E-Mail"
                                       value="{{ old('email') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.password') }}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="Password">
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
								<button type="submit" class="btn btn-primary">{{ trans('forms.sign-in') }}</button>
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
