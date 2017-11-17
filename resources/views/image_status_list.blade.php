
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
            <a style="float:right" class="btn btn-primary btn-sm " href="{{route('album_form')}}"> ADD MORE FIELD</a>
        </header>
        <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <table class="ui selectable inverted table">
                              <thead style="font-weight: bold">
                                <tr>
                                  <th>Name</th>
                                  <th>Status</th>
                                  <th class="right aligned">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>John</td>
                                  <td>Approved</td>
                                  <td class="right aligned">None</td>
                                </tr>
                                <tr>
                                  <td>Jamie</td>
                                  <td>Approved</td>
                                  <td class="right aligned">Requires call</td>
                                </tr>
                                <tr>
                                  <td>Jill</td>
                                  <td>Denied</td>
                                  <td class="right aligned">None</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        <!-- /.panel-heading -->
                 
                               
                            
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