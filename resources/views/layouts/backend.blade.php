<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   <title>{{ config('app.name', 'Laravel') }}</title>
<!-- /.page-header -->
@include('comman.header')

    <body>
        <div class="page-wrapper fixed-navbar-top">

        <!-- /.page-navbar -->
            @yield('navbar')

        <!-- /.page-sidebar -->
            @yield('sidebar')

        <!-- /.page-content -->
            @yield('content')

    </div>
    </body>

<!-- /.page-footer -->
@include('comman.footer')