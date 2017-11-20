
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
            <a style="float:right" class="btn btn-primary btn-sm " href="{{route('')}}"> ADD MORE TOPICS</a>
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
                                         ID
                                       </th>
                                       <th>
                                           Name
                                       </th>
                                       <th>
                                           Image_url
                                       </th>

                                       <th>
                                           Date &amp; time
                                       </th>
                                       
                                       <th>

                                       </th>
                                       <th>
                                           
                                       </th>
                                   </tr>
                               </thead>
                               <tbody>
                                       @foreach($records as $record)
                                   <tr>
                                        <td>{{$record->id}}</td>record
                                       <td>
                                             {{$record->name}}
                                       </td>
                                       <td>
                                           {{$record->image_url}}
                                       </td>

                                       <td>
                                           {{ $record->created_at }}
                                       </td>
                                       
                                      <td>
                                            <a class="btn btn-primary btn-pill" href="{{route('image_status_list')}}"> VIEW</a>
                                        </td>
                                        <td>
                                           <a class="btn btn-primary btn-pill " href="{{ route('master-topic.edit', ['master_topic' => $record->id]) }}">Edit</a>
                                       </td>
                                       <td>
                                            <form action="{{ route('master-topic.destroy',['master_topic' => $record->id]) }}" method="POST" >
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger btn-pill" onclick="">Delete</button>
                                            </form>
                                           <!-- <a class="btn btn-primary btn-pill " href="">Delete</a> -->
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