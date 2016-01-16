<?php
/**
 * Default 503 view.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('layout.app')

@section('title', ':: Be right back')

@section('content')

    @include('Pages::partials.default-page-header', ['pageHeader' => '503', 'quote' => false])

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Page not found</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-5 text-center">
                            <img src="{!! asset('img/mammoth-icons/Mammoth_Back_256x256.png') !!}"
                                 alt=""
                                 width="256"
                                 height="256">
                        </div>
                        <div class="col-md-7">
                            <h3>Be right back...</h3><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

