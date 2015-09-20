<?php
/**
 * Sitemap view
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: Sitemap')

@section('content')

    @include('partials.default-page-header', ['pageHeader' => 'Sitemap', 'quote' => true])

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sitemap</h3>
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

