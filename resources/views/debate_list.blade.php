
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
                                       <th>ID</th>
                                       <th>
                                           Title
                                       </th>
                                       <th>
                                           Banner_url
                                       </th>

                                       <th>
                                          Expiry Date
                                       </th>
                                       
                                       <th>

                                       </th>
                                       <th>
                                           
                                       </th>
                                   </tr>
                               </thead>
                               <tbody>
                                       @foreach($records as $class)
                                   <tr>
                                       <td>{{$class->id}}</td>
                                       <td>
                                             {{$class->title}}
                                       </td>
                                       <td>
                                           {{$class->banner_url}}
                                       </td>

                                       <td>
                                           {{ $class->expiry_date }}
                                       </td>
                                       
                                      <td>
                                            <a class="btn btn-primary btn-sm " href="{{route('image_status_list')}}"> VIEW</a>
                                        </td>
                                       
                                   </tr>
                                        @endforeach
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