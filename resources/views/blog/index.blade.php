@extends('layout.app')

@section('title', ':: M-Blog')

@section('content')

    @include('partials.default-page-header', ['pageHeader' => 'M-Blog', 'quote' => true])

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-push-9">
                @include('blog.partials.blog-sidebar')
            </div>
            <div class="col-md-9 col-md-pull-3">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($blogs as $blog)
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5 class="panel-title">{!! $blog->title !!}</h5>
                            </div>
                            <div class="panel-body">
                                <p>{!! $blog->excerpt !!}</p>
                            </div>
                            <div class="panel-footer">
                                {!! $blog->created_at->formatLocalized('%A %d %B %Y') !!}
                                <a class="pull-right" href="{{ url('blog', [$blog->slug])  }}">
                                    {{ trans('blog.read-more') }}
                                </a>
                            </div>
                        </div>
                        @endforeach
                        {!! $blogs->render() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

