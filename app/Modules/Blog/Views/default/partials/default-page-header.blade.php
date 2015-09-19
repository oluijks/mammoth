<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">{{ $pageHeader or 'Welcome' }}</h1>
            @if ($quote)
                <p class="lead">{{ Inspiring::quote() }}</p>
            @endif
        </div>
    </div>
</div>
