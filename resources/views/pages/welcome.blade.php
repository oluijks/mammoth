@extends('layout.app')

@section('title', ':: Welcome')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <img src="{!! URL::asset('img/woolly-mammoth.jpg') !!}"
                     class="center-block img-responsive"
                     alt="Mammoth">
                <br>
                <p v-text="message" id="welcome-message"></p>
            </div>
        </div>
    </div>
@endsection

