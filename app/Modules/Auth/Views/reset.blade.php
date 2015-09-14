@extends('layout.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{!! trans('Auth::forms.reset-password') !!}</div>
				<div class="panel-body">
                    @include('layout.partials.session-error')

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="token" value="{{ $token }}">

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
							<label class="col-md-4 control-label hidden-xs">{!! trans('Auth::forms.password') !!}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="{!! trans('Auth::forms.password') !!}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">{!! trans('Auth::forms.confirm-password') !!}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password_confirmation"
                                       placeholder="{!! trans('Auth::forms.confirm-password') !!}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary btn-block">
                                    {!! trans('Auth::forms.reset-password') !!}
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
