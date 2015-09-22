<li class="{{ Route::is('home') ? 'active' : '' }}">
    <a href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
</li>
<li class="{{ Route::is('about') ? 'active' : '' }}">
    <a href="{{ route('about') }}">About</a>
</li>
<li class="{{ Route::is('blog') ? 'active' : '' }}">
    <a href="{{ route('blog.index') }}">Blog</a>
</li>
<li class="{{ Route::is('contact') ? 'active' : '' }}">
    <a href="{{ route('contact') }}">Contact</a>
</li>
<li class="{{ Route::is('credits') ? 'active' : '' }}">
    <a href="{{ route('credits') }}">Credits</a>
</li>
