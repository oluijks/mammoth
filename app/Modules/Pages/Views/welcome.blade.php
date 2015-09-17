@extends('layout.app')

@section('title', ':: ' . trans('Pages::pages.welcome.title'))

@section('content')
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Welcome</h1>
            <blockquote>
                <p>{{ Mammoth\Modules\Quotes::quote() }}</p>
            </blockquote>
            <div class="form-group">
                <form class="form-horizontal" method="POST" action="{{ route('search') }}">
                <div class="input-group col-sm-offset-2 col-sm-8">
                    {!! csrf_field() !!}
                    <input type="search"
                           id="searchInput"
                           name="searchInput"
                           class="form-control"
                           placeholder="Search for..."
                           autocomplete="off">
                        <span class="input-group-btn">
                            <button id="searchButton"
                                    class="btn btn-default active"
                                    type="submit"
                                    role="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="marketing">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3 col-lg-12">
                    <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Happy_256x256.png') !!}"
                         alt="Mammoth App is BIG!"
                         width="256"
                         height="256">
                    <h2>M-App</h2>
                    <p>Mammoth App is BIG, BIGGER, HUGE, HUMONGOUS!</p>
                    <p>
                        <a class="btn btn-success btn-block"
                          href="{{ route('blog.index') }}"
                          role="button">See it in action</a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Seated_256x256.png') !!}"
                         alt="M-Blog. Write, post, done!"
                         width="256"
                         height="256">
                    <h2>M-Blog</h2>
                    <p>Maintaining your has never been more easy. Write, post, done!</p>
                    <p>
                        <a class="btn btn-success btn-block"
                          href="{{ route('blog.index') }}"
                          role="button">See it in action</a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="{!! URL::asset('img/mammoth-icons/Mammooth_256x256.png') !!}"
                         alt="Forum for questions and answers"
                         width="256"
                         height="256">
                    <h2>M-Forum</h2>
                    <p>Setup a forum where people can post questions and answers.</p>
                    <p>
                        <a class="btn btn-success btn-block"
                           href="{{ route('blog.index') }}"
                           role="button">See it in action</a>
                    </p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="{!! URL::asset('img/mammoth-icons/Mammoth_Back_256x256.png') !!}"
                         alt="Community Website"
                         width="256"
                         height="256">
                    <h2>M-Social</h2>
                    <p>A community were your website users can interact with each other.</p>
                    <p>
                        <a class="btn btn-success btn-block"
                           href="{{ route('blog.index') }}"
                           role="button">See it in action</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="information">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <h3>Successful Website</h3>
                    <div class="text-justify well well-lg">
                        <p>
                            Out of the box Mammoth comes with everything you need to run a successful website. Blog,
                            Forum, Admin, Auth, Community, Site search and Sitemap. All these goodies are ready to go,
                            fully customizable and extensible.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Responsive &amp; Mobile friendly</h3>
                    <div class="text-justify well well-lg">
                        <p>
                            Mammoth App is fully Responsive &amp; Mobile friendly, creating your own theme is a breeze,
                            but out of the box Mammoth comes with three themes. Mammoth App is Open Source and the
                            installation is a no-brainer.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
