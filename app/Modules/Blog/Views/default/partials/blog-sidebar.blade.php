<div class="panel-group" role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseMenuListGroupHeading">
            <h4 class="panel-title">
                <a role="button"
                   data-toggle="collapse"
                   href="#collapseMenuListGroup"
                   aria-expanded="true"
                   aria-controls="collapseMenuListGroup">
                    M-Blog Menu
                    <span class="caret"></span>
                </a>
            </h4>
        </div>
        <div id="collapseMenuListGroup"
             class="panel-collapse collapse"
             role="tabpanel"
             aria-labelledby="collapseMenuListGroupHeading"
             aria-expanded="true">
            <div class="list-group">
                <a href="#" class="list-group-item"><span class="badge">14</span>Archive</a>
                <a href="#" class="list-group-item"><span class="badge">6</span>April</a>
                <a href="#" class="list-group-item"><span class="badge">33</span>March</a>
            </div>
            <a href="#" class="list-group-item blog-archive">Archive</a>
        </div>
    </div>
</div>
@include('Blog::'.config('mammoth.theme', 'default').'.ads.dummy')
