@extends('layout.app')

@section('title', ':: ' . trans('Pages::pages.about.title'))

@section('content')

    <div class="row-callout">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <img src="{!! URL::asset('img/mammoth-icons/Mammooth_256x256.png') !!}"
                         class="center-block img-responsive"
                         alt="Mammoth">
                    <br>

                    <p id="welcome-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur,
                        dolorum enim eveniet explicabo in nemo pariatur praesentium quibusdam sunt. Consequuntur, saepe,
                        suscipit! Id illum iste iusto molestiae odio voluptas?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="marketing">
        <div class="row text-center">
            <div class="col-md-6 col-lg-3">
                <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Happy_256x256.png') !!}"
                     alt="Happy Mammoth"
                     width="256"
                     height="256">

                <h2>M-App</h2>

                <p>Big mammoth is BIG!</p>

                <p><a class="btn btn-default btn-block" href="{{ route('blog.index') }}" role="button">View M-App &raquo;</a></p>
            </div>

            <div class="col-md-6 col-lg-3">
                <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Seated_256x256.png') !!}"
                     alt=""
                     width="256"
                     height="256">

                <h2>M-Blog</h2>

                <p>Big mammoth WRITES!</p>

                <p><a class="btn btn-default btn-block" href="{{ route('blog.index') }}" role="button">View M-Blog &raquo;</a></p>
            </div>

            <div class="col-md-6 col-lg-3">
                <img src="{!! URL::asset('img/mammoth-icons/Mammooth_256x256.png') !!}"
                     alt=""
                     width="256"
                     height="256">

                <h2>M-Forum</h2>

                <p>Big mammoth is BIG!</p>

                <p><a class="btn btn-default btn-block" href="{{ route('blog.index') }}" role="button">View M-Forum &raquo;</a></p>
            </div>

            <div class="col-md-6 col-lg-3">
                <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Back_256x256.png') !!}"
                     alt=""
                     width="256"
                     height="256">

                <h2>M-Social</h2>

                <p>Big mammoth is SOCIAL!</p>

                <p><a class="btn btn-default btn-block" href="{{ route('blog.index') }}" role="button">View M-Herd &raquo;</a></p>
            </div>

        </div>

    </div>
@endsection

