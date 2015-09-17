<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">{{ $pageHeader or 'Welcome' }}</h1>
            @if ($quote)
            <p class="lead">
                {{ Inspiring::quote() }} {{--Just one big idea. One big idea, and we can change the world.--}}
            </p>
            @endif
        </div>
    </div>
</div>
