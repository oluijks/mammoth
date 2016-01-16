<?php
/**
 * Admin menu sidebar view.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

<ul class="nav nav-pills nav-stacked" id="stacked-menu">
    <li>
        <a class="nav-container" data-toggle="collapse" data-parent="#stacked-menu" href="#p1">LEVEL 1
            <div class="caret-container"><span class="caret arrow"></span></div>
        </a>

        <ul class="nav nav-pills nav-stacked collapse in" id="p1">
            <li data-toggle="collapse" data-parent="#p1" href="#pv1">
                <a class="nav-sub-container">Authentication
                    <div class="caret-container">
                        <span class="caret arrow"></span>
                    </div>
                </a>
            </li>
            <ul class="nav nav-pills nav-stacked collapse in" id="pv1">
                <li class="active"><a href="#">Manage Users</a></li>
                <li><a href="#">Manage User Groups</a></li>
                <li class="nav-divider"></li>
            </ul>
            <li data-toggle="collapse" data-parent="#p1" href="#pv2">
                <a class="nav-sub-container">Blog Posts
                    <div class="caret-container">
                        <span class="caret arrow"></span>
                    </div>
                </a>
            </li>
            <ul class="nav nav-pills nav-stacked collapse" id="pv2">
                <li><a href="#">All Blog Posts</a></li>
                <li><a href="#">Create Blog Post</a></li>
                <li><a href="#">Archived Blog Posts</a></li>
                <li class="nav-divider"></li>
            </ul>
            <li data-toggle="collapse" data-parent="#p1" href="#pv3">
                <a class="nav-sub-container">Site Reports
                    <div class="caret-container">
                        <span class="caret arrow"></span>
                    </div>
                </a>
            </li>
            <ul class="nav nav-pills nav-stacked collapse" id="pv3">
                <li><a href="#">Report One</a></li>
                <li><a href="#">Report Two</a></li>
            </ul>
        </ul>
    </li>
    <li>
        <a class="nav-container" data-toggle="collapse" data-parent="#stacked-menu" href="#p2">Tools
            <div class="caret-container"><span class="caret arrow"></span></div>
        </a>
        <ul class="nav nav-pills nav-stacked collapse" id="p2">
            <li><a href="#">Backup</a></li>
            <li><a href="#">Sitemaps</a></li>
            <li><a href="#">View Three</a></li>
            <li class="nav-divider"></li>
            <li><a href="#">Trash</a></li>
        </ul>
    </li>
    <li>
        <a class="nav-container" href="#">Settings
            <div class="caret-container"><span class="caret arrow"></span></div>
        </a>
    </li>
</ul>

{{--
<div class="panel-group" role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseMenuListGroupHeading">
            <h4 class="panel-title">
                <a role="button"
                   data-toggle="collapse"
                   href="#collapseMenuListGroup"
                   aria-expanded="true"
                   aria-controls="collapseMenuListGroup">Menu<span class="caret"></span>
                </a>
            </h4>
        </div>
        <div id="collapseMenuListGroup"
             class="panel-collapse collapse in"
             role="tabpanel"
             aria-labelledby="collapseMenuListGroupHeading"
             aria-expanded="true">
            <div class="list-group">
                <a href="#" class="list-group-item active">Dashboard</a>
                <a href="#" class="list-group-item">Users</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item"></a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
                <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
                <a href="#" class="list-group-item">Settings</a>
                <a href="#" class="list-group-item">Settings</a>
            </div>
            <a href="#" class="list-group-item blog-archive">Archive</a>
        </div>
    </div>
</div>
--}}
