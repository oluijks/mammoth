@extends('layout.app')

@section('title', ':: ' . trans('Pages::pages.about.title'))

@section('content')

    @include('Pages::partials.default-page-header', ['pageHeader' => 'About', 'quote' => true])

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ trans('Pages::pages.title') }}</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti dolorum exercitationem,
                            fugiat, impedit incidunt inventore iusto nam non odio praesentium quibusdam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

