@extends('layout.app')

@section('title', ':: ' . $blog->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">M-Blog</h1>
                <p class="lead">Just one big idea. One big idea, and we can change the world.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-push-9">
                @include('blog.partials.blog-sidebar')
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

