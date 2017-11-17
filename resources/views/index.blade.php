
@extends('layouts.backend')


@section('navbar')

    @include('comman.menu')

@endsection

@section('sidebar')

    @include('comman.sidebar')

@endsection

@section('content')

    <div class="page">

        <header class="ribbon">
            <h2>
                Dashboard
            </h2>
            <ol class="breadcrumb">
                 <li class=""><a href="">Home</a></li>
                 <li class="active">Dashboard</li>
            </ol>
        </header>
        <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-raised" >
                        <div class="">
                            <div class="panel-heading no-padding panel-item-raised pull-left">
                                <div class="square-icon square-icon-lg square-icon-primary">
                                    <i class="fa fa-gamepad"></i>
                                </div>
                                <!-- /.media-block -->

                            </div>
                        </div>

                        <div class="panel-body ">
                            <div class="align-right">
                                <h6>DOWNLOADS</h6>
                                <h2>
                                    1,200,000
                                </h2>
                            </div>
                            <div class="chart-container">
                                <div class="widget-chart">
                                    <canvas id="chart-line" width="400" height="87"></canvas>

                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-lg-4">


                    <div class="panel panel-raised" style="">
                        <div class="">
                            <div class="panel-heading no-padding panel-item-raised pull-left">
                                <div class="square-icon square-icon-lg square-icon-info">
                                    <i class="fa fa-retweet"></i>
                                </div>
                                <!-- /.media-block -->

                            </div>
                        </div>

                        <div class="panel-body ">
                            <div class="align-right">
                                <h6>POPULARITY</h6>
                                <h2>
                                    3,240,100
                                </h2>
                            </div>
                            <div class="chart-container">
                                <div class="widget-chart">
                                    <canvas id="chart-line2" width="400" height="87"></canvas>

                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-raised" style="">
                        <div class="">
                            <div class="panel-heading no-padding panel-item-raised pull-left">
                                <div class="square-icon square-icon-lg square-icon-success">
                                    <i class="fa fa-dollar"></i>
                                </div>
                                <!-- /.media-block -->

                            </div>
                        </div>

                        <div class="panel-body ">
                            <div class="align-right">
                                <h6>REVENUE</h6>
                                <h2>
                                    11,240,100
                                </h2>
                            </div>
                            <div class="chart-container">
                                <div class="widget-chart">
                                    <canvas id="chart-line3" width="400" height="87"></canvas>


                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>



                </div>
            </div>
            <!-- /.row -->
            <div class="row">

                <!-- /.col-lg-4 -->
                
                
        
                <!-- /.col-md-4 -->

            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-5">
                    <div class="panel panel-info">
                        <div class="panel-cover" style="background-image:url('http://via.placeholder.com/2000x1300');">

                        </div>
                        <div class="panel-highlight-image">

                                <img src="http://via.placeholder.com/500x500" alt="" class="img-thumb  img-circle">


                        </div>
                        <div class="panel-body align-center">
                            <h2 style="margin-bottom:0.7rem">Alice Wondergirl</h2>
                            <h4 class="" style="margin-bottom:1.2rem">
                                Astronaut

                            </h4>
                            <p style="width:80%; margin-left:auto; margin-right:auto;">
                                As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature.
                            </p>
                            <p>
                                <button class="btn btn-primary btn-round ">
                                    <i class="fa fa-facebook"></i>
                                </button>
                                <button class="btn btn-info btn-round ">
                                    <i class="mdi mdi-twitter"></i>
                                </button>
                                <button class="btn btn-warning btn-round ">
                                    <i class="mdi mdi-email"></i>
                                </button>
                            </p>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-4" style="">
                  <div class="panel panel-primary">


                    <div class="panel-heading">
                        <div class="media">
                            <div class="media-left" style="padding:0;">
                                <div class="chart-container" style="">
                                    <div class="easyPieChart" data-percent="73" style="position:relative; width:28px; height:28px; line-height: 28px; text-align:center;">
                                        <div class="" style="padding-top:0px;">

                                            <!--<i class="mdi mdi-adjusted mdi-check mdi-1x text-inactive" style="font-size:12px;"></i>-->
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="media-body" style="padding-top:3px;">
                                <h4>
                                    Finish UI Polishing

                                </h4>
                        </div>

                    </div>
                    <ul class="panel-actions">

                        <li>
                            <a href="#" class="panel-action">
                                <i class="mdi mdi-pencil" style="font-size:0.9em">

                                </i>
                            </a>
                        </li>

                    </ul>

                    </div>
                    <!-- /.panel-heading -->

                    <div class="panel-body" style="padding-top:2em;">
                            <div class="text-muted">
                                    <i class="fa fa-calendar"></i> 22 July 2017
                                    <div class="pull-right">
                                         Alex Jones <img class="img-circle img-thumb-xxs mg-xs" src="http://via.placeholder.com/500x500" alt="...">
                                    </div>
                            </div>
                            <div class="description text-dimmed" style="margin-top:2em; padding-right:2em; padding-bottom:0.1em;">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                                    Nam porta sem sit amet nunc rutrum blandit.

                                </p>
                                <p>
                                     Sed volutpat vitae justo quis tristique.

                                </p>
                            </div>
                            <div class="subtasks" style="padding:1.5em 0; padding-right:2em;">

                                <h4>
                                    Subtasks
                                </h4>
                                <div class="subtasks-list" style="padding:0.3em 0">
                                    <div class="subtask" style="padding-bottom:0.1em;">
                                        <h6>
                                            Update Photoshop File
                                        </h6>
                                        <div class="progress progress-md">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span></span>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="subtask" style="padding-bottom:0.1em;">
                                        <h6>
                                            Generate Bug Report
                                        </h6>
                                        <div class="progress progress-md progress-md-success">
                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                            <span></span>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="subtask" style="padding-bottom:0.1em;">
                                        <h6>
                                            Remove Outdated Code
                                        </h6>
                                        <div class="progress progress-md progress-md-warning">
                                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span></span>
                                          </div>
                                        </div>
                                    </div>
                                </div>




                            </div>


                    </div>
                    <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
                </div>
                <!-- /.col-md-4 -->



                <div class="col-lg-3">
                    <div class="panel">
                        <div class="panel-heading no-padding panel-item-raised">
                            <img src="http://via.placeholder.com/1000x665" alt="" class="panel-image">
                        </div>
                        <div class="panel-highlight-action">
                            <button class="btn btn-round btn-danger btn-lg">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                        <div class="panel-body">
                            <h2>Alice in Wonderland</h2>
                            <p>


                                As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature.
                            </p>

                            <p>
                                <button class="btn btn-primary">
                                    Download
                                </button>
                            </p>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-md-3 -->




              </div>
              <!-- /.row -->

        </div>
        </div>
    </div>

@endsection