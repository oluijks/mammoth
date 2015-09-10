<nav class="navbar navbar-inverse navbar-default">
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
            <a class="navbar-brand" href="#">Mammoth</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Route::is('home') ? 'active' : '' }}">
                    <a href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="{{ Route::is('about') ? 'active' : '' }}">
                    <a href="/about">About</a>
                </li>
                <li class="{{ Route::is('contact') ? 'active' : '' }}">
                    <a href="/contact">Contact</a>
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
                       aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/auth/logout">Sign out</a></li>
                    </ul>
                </li>
            @else
            <li class="{{ Route::is('sign-in') ? 'active' : '' }}"><a href="/sign-in">Sign in</a></li>
            <li class="{{ Route::is('sign-up') ? 'active' : '' }}"><a href="/sign-up">Sign up</a></li>
            @endif
            </ul>
        </div>
    </div>
</nav>
