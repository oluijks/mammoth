@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: ' . trans('Pages::pages.about.title'))

@section('content')

    @include('Pages::'.config('mammoth.theme', 'default').'.partials.default-page-header', [
        'pageHeader' => trans('Pages::pages.about.title'), 'quote' => true
    ])

    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{!! trans('Pages::pages.about.title') !!}</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti dolorum exercitationem,
                            fugiat, impedit incidunt inventore iusto nam non odio praesentium quibusdam.
                        </p>
                        <br>
                        <h4>Available Modules:</h4>
                        <ul type="square">
                            <li>Admin</li>
                            <li>Authentication</li>
                            <li>Blog</li>
                            <li>Forum</li>
                            <li>Herd (Community)</li>
                            <li>(Static) Pages</li>
                            <li>Site Search</li>
                            <li>Sitemap</li>
                            <li>Webshop</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img class="img-responsive" alt="Olaf Luijks" src="{{ URL::asset('img/olaf.png') }}" lazyload>
                    <div class="caption">
                        <h3>Olaf Luijks</h3><p>PHP Developer</p>
                        <p><i>You learn the wisest lessons from your enemy. If you live.</i> <br>&mdash; Aleksandr Voinov</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

