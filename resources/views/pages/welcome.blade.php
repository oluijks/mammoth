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
                <p id="welcome-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur, dolorum enim eveniet explicabo in nemo pariatur praesentium quibusdam sunt. Consequuntur, saepe, suscipit! Id illum iste iusto molestiae odio voluptas?</p>
            </div>
        </div>
    </div>
@endsection

