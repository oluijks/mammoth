@extends('layout.' . config('mammoth.theme', 'default'))

@section('title', ':: ' . trans('Pages::pages.welcome.title'))

@section('content')
    <section class="jumbotron">
        <div class="container text-center">
            <h1>Welcome</h1>
            <blockquote>
                <p>{{ $quote }}</p>
            </blockquote>
            <div class="form-group">
                <form class="form-horizontal" method="POST" action="{{ route('search') }}">
                <div class="input-group col-sm-offset-2 col-sm-8">
                    {!! csrf_field() !!}
                    <input type="search"
                           id="searchInput"
                           name="searchInput"
                           class="form-control"
                           placeholder="{{ trans('Search::search.search_input_placeholder') }}"
                           autocomplete="off" required>
                    <span class="input-group-btn">
                        <button id="searchButton"
                                class="btn btn-default"
                                type="submit"
                                role="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
                </form>
            </div>
        </div>
    </section>
    <section class="container marketing">
        <div class="row text-center">
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-md-6 col-lg-3 col-lg-12">
                    <img src="{!! URL::asset(trans('Pages::pages.welcome.marketing.block_'.$i.'.image.src')) !!}"
                         alt="{!! trans('Pages::pages.welcome.marketing.block_'.$i.'.image.alt') !!}"
                         width="{!! trans('Pages::pages.welcome.marketing.block_'.$i.'.image.width') !!}"
                         height="{!! trans('Pages::pages.welcome.marketing.block_'.$i.'.image.height') !!}">
                    <h2>{!! trans('Pages::pages.welcome.marketing.block_'.$i.'.head') !!}</h2>
                    <p>{!! trans('Pages::pages.welcome.marketing.block_'.$i.'.text') !!}</p>
                    <p>
                        <a class="btn btn-success btn-block"
                           id="mammoth-app-{{$i}}"
                           href="{{ route(trans('Pages::pages.welcome.marketing.block_'.$i.'.route')) }}"
                           role="button">{{ trans('Pages::pages.welcome.marketing.block_'.$i.'.button') }}</a>
                    </p>
                </div>
            @endfor
        </div>
    </section>
    <section class="information">
        <div class="container">
            <div class="row text-center">
                <article class="col-md-6">
                    <h3>{{ trans('Pages::pages.welcome.head_first_block') }}</h3>
                    <div class="text-justify well well-lg">
                        <p>{{ trans('Pages::pages.welcome.first_block') }}</p>
                    </div>
                </article>
                <article class="col-md-6">
                    <h3>{{ trans('Pages::pages.welcome.head_second_block') }}</h3>
                    <div class="text-justify well well-lg">
                        <p>{{ trans('Pages::pages.welcome.second_block') }}</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
    var searchForm = $('#searchForm');
    var searchInput = $('#searchInput');
    searchInput.focus();
    searchInput.bind('keypress', {}, keyPress);
    function keyPress(e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if (code == 13) {
            searchForm.submit();
        }
    }
    </script>
@stop
