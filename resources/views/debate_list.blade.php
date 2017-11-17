
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
                Tables
            </h2>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Tables</li>
            </ol>
            <a style="float:right" class="btn btn-primary btn-sm " href="{{route('add_debate')}}"> ADD MORE DEBATES</a>
        </header>
        <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Tables</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body no-padding">
                            <div class="table-responsive">


                            <table class="table table-align-middle table-hover table-demo">
                                <thead>
                                    <tr>

                                        <th>
                                            Captain
                                        </th>
                                        
                                        <th>
                                            Crew Size
                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                                <img src="http://via.placeholder.com/500x500" alt="" class="img-thumb-xs img-circle"> Cricket
                                        </td>
                                       
                                        <td>
                                            <span class="label label-success label-chip">10</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm " href="{{route('image_status_list')}}"> VIEW</a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="http://via.placeholder.com/500x500" alt="" class="img-thumb-xs img-circle"> Politics
                                        </td>
                                        
                                        <td>
                                                <span class="label label-warning label-chip">6</span>
                                        </td>
                                        <td>
                                           <a class="btn btn-primary btn-sm " href="{{route('image_status_list')}}"> VIEW</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="http://via.placeholder.com/500x500" alt="" class="img-thumb-xs img-circle"> GST
                                        </td>
                                        
                                        <td>
                                                <span class="label label-info label-chip">8</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm " href="{{route('image_status_list')}}"> VIEW</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="http://via.placeholder.com/500x500" alt="" class="img-thumb-xs img-circle"> FIFA Under 17 World Cup
                                        </td>
                                       
                                        <td>
                                                <span class="label label-success label-chip">10</span>
                                        </td>
                                        <td>
                                           <a class="btn btn-primary btn-sm " href="{{route('image_status_list')}}"> VIEW</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="http://via.placeholder.com/500x500" alt="" class="img-thumb-xs img-circle"> Gujarat Election
                                        </td>
                                       
                                        <td>
                                                <span class="label label-danger label-chip">2</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm " href="{{route('image_status_list')}}"> VIEW</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-md-6 -->

            </div>
           
            
            
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection