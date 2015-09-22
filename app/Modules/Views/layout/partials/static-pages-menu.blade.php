<li class="{{ Route::is('home') ? 'active' : '' }}">
    <a href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
</li>
<li class="{{ Route::is('about') ? 'active' : '' }}">
    <a href="{{ route('about') }}">About</a>
</li>
<li class="dropdown">
    <a href="#"
       class="dropdown-toggle"
       data-toggle="dropdown"
       role="button"
       aria-haspopup="true"
       aria-expanded="false">Modules <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="{{ route('blog.index') }}">M-Blog</a></li>
        <li><a href="{{ route('forum') }}">M-Forum</a></li>
        <li><a href="{{ route('herd') }}">M-Herd</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="{{ route('sitemap') }}">M-Sitemap</a></li>
    </ul>
</li>
<li class="{{ Route::is('contact') ? 'active' : '' }}">
    <a href="{{ route('contact') }}">Contact</a>
</li>
<li class="{{ Route::is('credits') ? 'active' : '' }}">
    <a href="{{ route('credits') }}">Credits</a>
</li>
