@extends('layout.app')

@section('title', ':: ' . $blog->title)

@section('content')

    @include('partials.default-page-header', ['pageHeader' => 'About', 'quote' => true])

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
                                <h5 class="panel-title">{!! $blog->title !!}</h5>
                            </div>
                            <div class="panel-body">
                                <p>{!! $blog->body !!}</p>
                            </div>
                            <div class="panel-footer">
                                {!! $blog->created_at->formatLocalized('%A %d %B %Y') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
