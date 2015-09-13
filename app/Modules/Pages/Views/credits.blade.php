@extends('layout.app')

@section('title', ':: ' . trans('Pages::pages.credits.title'))

@section('content')

    @include('partials.default-page-header', ['pageHeader' => 'M-Credits', 'quote' => false])

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p>
                    {{ trans('Pages::pages.credits.intro') }}
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5 class="panel-title">{{ trans('Pages::pages.credits.credit_list') }}</h5>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="http://bootstrap-growl.remabledesigns.com/"
                                       target="_blank"
                                       class="list-group-item">
                                        <h4 class="list-group-item-heading">Bootstrap</h4>
                                        <p class="list-group-item-text">
                                            Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework
                                            for faster and easier web development.
                                        </p>
                                    </a>

                                    <a href="http://bootstrap-growl.remabledesigns.com/" class="list-group-item">
                                        <h4 class="list-group-item-heading">Bootstrap Notify</h4>
                                        <p class="list-group-item-text">
                                            This plugin helps to turn standard bootstrap alerts into "growl" like
                                            notifications.
                                        </p>
                                    </a>

                                    <a href="http://www.favicon-generator.org/"
                                       target="_blank"
                                       class="list-group-item">
                                        <h4 class="list-group-item-heading">Favicon & App Icon Generator</h4>
                                        <p class="list-group-item-text">
                                            Convert your GIF, PNG or JPEG into a favicon.ico and App icons.
                                        </p>
                                    </a>

                                    <a href="http://laravel.com/"
                                       target="_blank"
                                       class="list-group-item">
                                        <h4 class="list-group-item-heading">Laravel</h4>
                                        <p class="list-group-item-text">
                                            The PHP Framework For Web Artisans.
                                        </p>
                                    </a>

                                    <a href="http://fasticon.com/"
                                       target="_blank"
                                       class="list-group-item">
                                        <h4 class="list-group-item-heading">Mammoth Icons</h4>
                                        <p class="list-group-item-text">
                                            By Fast Icon Design
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-footer">
                                {!! mailto(config('mammoth.admin_email'), 'Mail me') !!} if you think you should be on
                                this list.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel-group" role="tablist">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="collapseMenuListGroupHeading">
                            <h4 class="panel-title">
                                <a class=""
                                   style="text-decoration: none; display: block; width: 100%;"
                                   role="button"
                                   data-toggle="collapse"
                                   href="#collapseMenuListGroup"
                                   aria-expanded="true"
                                   aria-controls="collapseMenuListGroup">
                                    M-App Partners
                                    <span class="caret"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseMenuListGroup"
                             class="panel-collapse collapse in"
                             role="tabpanel"
                             aria-labelledby="collapseMenuListGroupHeading"
                             aria-expanded="true">
                            <div class="list-group">
                                <a href="#" class="list-group-item">Archive</a>
                                <a href="#" class="list-group-item">April</a>
                                <a href="#" class="list-group-item">March</a>
                            </div>
                            <a href="#" class="list-group-item blog-archive">Archive</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

