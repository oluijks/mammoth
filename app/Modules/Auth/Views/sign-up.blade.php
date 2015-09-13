@extends('layout.app')

@section('title', ':: ' . trans('forms.sign-up-account'))

@section('content')

@include('partials.default-page-header', ['pageHeader' => 'Sign in', 'quote' => false])

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('forms.sign-up-account') }}</div>
				<div class="panel-body">
                    @include('layout.partials.session-error')
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        {!! csrf_field() !!}

						<div class="form-group @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.name') }}</label>
							<div class="col-md-6">
								<input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Name"
                                       value="{{ old('name') }}">
							</div>
						</div>

                        <div class="form-group @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.email-address') }}</label>
							<div class="col-md-6">
								<input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="E-Mail"
                                       value="{{ old('email') }}">
							</div>
						</div>
                        <div class="form-group @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.password') }}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="Password">
							</div>
						</div>
                        <div class="form-group @if (count($errors) > 0) has-error @endif ">
							<label class="col-md-4 control-label hidden-xs">{{ trans('forms.confirm-password') }}</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password_confirmation"
                                       placeholder="Confirm Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success btn-block">
                                    {{ trans('forms.create-account') }}
								</button>
							</div>
						</div>
                        <p class="help-block text-center">{{ trans('forms.agree_terms') }}</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection