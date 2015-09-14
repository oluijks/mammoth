<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('admin-dashboard') }}">
                <img alt="Mammoth" src="{{ URL::asset('img/mammoth-icons/Mammooth_32x32.png')  }}">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Route::is('admin-dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin-dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            @if (Auth::check())
                <li class="dropdown">
                    <a href="#"
                       class="dropdown-toggle"
                       data-toggle="dropdown"
                       role="button"
                       aria-haspopup="true"
                       aria-expanded="false">{!! Auth::user()->name !!} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('sign-out') }}">
                                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;Sign out</a>
                        </li>
                    </ul>
                </li>
            @else
            <li class="{{ Route::is('sign-in') ? 'active' : '' }}"><a href="{{ route('sign-in') }}">Sign in</a></li>
            <li class="{{ Route::is('sign-up') ? 'active' : '' }}"><a href="{{ route('sign-up') }}">Sign up</a></li>
            @endif
            </ul>
        </div>
    </div>
</nav>
