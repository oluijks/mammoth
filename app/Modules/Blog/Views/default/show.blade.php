<?php
/**
 * Blog show blog post view.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: ' . $blog->title)

@section('content')

    @include('Blog::'.config('mammoth.theme', 'default').'.partials.default-page-header', [
        'pageHeader' => 'M-Blog', 'quote' => true
    ])

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-push-9">
                @include('Blog::'.config('mammoth.theme', 'default').'.partials.blog-sidebar')
            </div>

            <div class="col-md-9 col-md-pull-3">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        </ol>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5 class="panel-title">{!! $blog->title !!}</h5>
                            </div>
                            <div class="panel-body">
                                <p>{!! $blog->body !!}</p>
                            </div>
                            <div class="panel-footer">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> {!! $blog->created_at->formatLocalized('%A %d %B %Y') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

