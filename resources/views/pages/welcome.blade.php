@extends('layout.app')

@section('title', ':: Welcome')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <img src="{!! URL::asset('img/woolly-mammoth.jpg') !!}" class="center-block img-responsive" alt="Mammoth">
                <br><br>
                <p>Alias animi consequntur deleniti esse facere obcacati provident recusandae rerum, vitae?</p>
            </div>
        </div>
    </div>
@endsection

