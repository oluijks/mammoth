@extends('layout.app')

@section('title', ':: ' . trans('Blog::blog.create-blog'))

@section('content')

    @include('Blog::partials.default-page-header', ['pageHeader' => trans('Blog::blog.create-blog'), 'quote' => true])

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-push-9">
                @include('Blog::partials.blog-sidebar')
            </div>
            <div class="col-md-9 col-md-pull-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5 class="panel-title">{!! trans('Blog::blog.create-blog') !!}</h5>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda culpa earum exercitationem expedita fuga fugit in ipsam maiores maxime molestiae pariatur quae quo quod repellendus soluta, temporibus vel, veniam voluptatibus!</p>
                            </div>
                            <div class="panel-footer">
                                footer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

