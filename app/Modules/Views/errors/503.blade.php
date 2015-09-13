@extends('layout.app')

@section('title', ':: Be right back')

@section('content')

    @include('partials.default-page-header', ['pageHeader' => '503', 'quote' => false])

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Page not found</h3>
                    </div>
                    <div class="panel-body">
                        <p>Be right back.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

