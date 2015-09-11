@extends('layout.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">Sign Up for an account</div>
				<div class="panel-body">
                    @include('layout.partials.session-error')

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        {!! csrf_field() !!}

						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">Name</label>
							<div class="col-md-6">
								<input type="text"
                                       class="form-control"
                                       name="name"
                                       placeholder="Name"
                                       value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email"
                                       class="form-control"
                                       name="email"
                                       placeholder="E-Mail"
                                       value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">Password</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="Password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label hidden-xs">Confirm Password</label>
							<div class="col-md-6">
								<input type="password"
                                       class="form-control"
                                       name="password_confirmation"
                                       placeholder="Confirm Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Sign Up
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
