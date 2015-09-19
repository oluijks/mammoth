@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: ' . trans('Pages::pages.about.title'))

@section('content')

    @include('Pages::'.config('mammoth.theme', 'default').'.partials.default-page-header', [
        'pageHeader' => trans('Pages::pages.about.title'), 'quote' => true
    ])

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{!! trans('Pages::pages.about.title') !!}</h3>
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

