<?php
/**
 * Admin dashboard view
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('Admin::layout.admin')

@section('title', ':: Admin Dashboard')

@section('content')

    {{-- @include('Admin::partials.default-page-header', ['pageHeader' => 'Admin Dashboard', 'quote' => false]) --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 admin-menu-sidebar">
                @include('Admin::partials.admin-menu-sidebar')
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">
                            {{ Mammoth\Modules\Quotes::quote() }}
                        </p>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h5 class="panel-title">Admin Dashboard</h5>
                            </div>
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti dolorum exercitationem, fugiat, impedit incidunt inventore iusto nam non odio praesentium quibusdam.
                                </p>
                            </div>
                            <div class="panel-footer">
                                Footer
                            </div>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti dolorum exercitationem, fugiat, impedit incidunt inventore iusto nam non odio praesentium quibusdam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
