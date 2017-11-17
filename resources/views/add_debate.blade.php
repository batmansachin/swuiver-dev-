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
            <a style="float:right" class="btn btn-primary btn-sm " href="{{route('debate_argument')}}"> ADD DEBATE ARGUMENT</a>
        </header>
        <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                        	<h4 class="header2" style="font-weight: bold">
                                ADD NEW HEALTH CONDITION
                            </h4>
                            
                             <form method="POST" action="{{route('submitQuery_debate')}}" accept-charset="UTF-8" class="col s12">
                              {{ csrf_field() }} 
                          
                                <div class="input-field col s12">
                                    <label for="name">Title:</label>
                                    <input class="form-control" name="title" type="text" id="name">
                                </div>
                        
                                <div class="input-field col s12">
                                    <label for="name">Banner_url:</label>
                                    <input class="form-control" name="banner_url" type="text" id="name">
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input class="btn btn-primary pull-right" type="submit" value="Add Lesion Status">
                                    </div>
                                </div>

                              </form>
                        </div>
                        <!-- /.panel-heading -->
                        

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