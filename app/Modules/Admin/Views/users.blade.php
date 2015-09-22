<?php
/**
 * Admin dashboard view
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

@extends('Admin::layout.admin')

@section('title', ':: Admin Dashboard')

@section('content')

    {{-- @include('Admin::partials.default-page-header', ['pageHeader' => 'Admin Dashboard', 'quote' => false]) --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 admin-menu-sidebar">
                @include('Admin::partials.admin-menu-sidebar')
            </div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-2">
                        <div class="text-center">
                            <h3 class="text-center">User stats</h3>
                            <canvas id="userChart" width="155" height="155"></canvas>
                            <div class="text-center" id="legend"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class="lead"></p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>E-Mail Address</th>
                                    <th>Created</th>
                                    <th>Last updated</th>
                                    <th>Last signed in</th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>&nbsp;-</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                            <button type="button" class="btn btn-default">View</button>
                                            <button type="button" class="btn btn-success">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10">
                        <div class="text-left">{!! $users->render() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="http://www.chartjs.org/assets/Chart.min.js"></script>

    <script>
    var data = [
        {
            value: 18,
            color: "#FF5A5E",
            highlight: "#FF5A5E",
            label: "Inactive"
        },
        {
            value: '{{ $activeUsers }}',
            color: "#449d44",
            highlight: "#449d44",
            label: "Active"
        },
        {
            value: 16,
            color: "#df691a",
            highlight: "#df691a",
            label: "New today"
        }
    ];

    var options = {
        // Boolean - Whether we should show a stroke on each segment
        segmentShowStroke : true,
        // String - The colour of each segment stroke
        segmentStrokeColor : "#fff",
        // Number - The width of each segment stroke
        segmentStrokeWidth : 1,
        // Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout : 0, // This is 0 for Pie charts
        // Number - Amount of animation steps
        animationSteps : 1,
        // String - Animation easing effect
        animationEasing : "easeOutBounce",
        // Boolean - Whether we animate the rotation of the Doughnut
        animateRotate : true,
        // Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale : false,
        // String - A legend template
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend list-inline\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"color:<%=segments[i].fillColor%>\"><%if(segments[i].label){%><%=segments[i].label%><%}%></span></li><%}%></ul>"

    };

    var ctx = document.getElementById("userChart").getContext("2d");

    var myPieChart = new Chart(ctx).Pie(data, options);
    document.getElementById("legend").innerHTML = myPieChart.generateLegend();

    // var myDoughnutChart = new Chart(ctx).Doughnut(data, options);
    </script>
@endsection
