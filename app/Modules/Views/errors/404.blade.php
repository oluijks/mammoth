<?php
/**
 * Default 404 view
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('layout.app')

@section('title', ':: 404 Page not found')

@section('content')

    @include('Pages::partials.default-page-header', ['pageHeader' => '404', 'quote' => false])

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Page not found</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-5 text-center">
                            <img src="{!! asset('img/mammoth-icons/Mammooth_256x256.png') !!}"
                                 alt=""
                                 width="256"
                                 height="256">
                        </div>
                        <div class="col-md-7">
                            <h3>Something went wrong...</h3><br>

                            <p>Try one of these links:</p>

                            <ul class="">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Credits</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

