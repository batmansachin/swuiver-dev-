
<meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{ asset('public/admin/vendor/loaders.css/loaders.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CRubik:300,400,500%7CSource+Code+Pro" rel="stylesheet">
<style>
#loader-container {
    display: block;
    position: fixed;
    z-index: 100;
    left: 0;
    top:0;
    width: 100%;
    height: 100%;
    width: 100vw;
    height: 100vh;
    background: rgb(241,246,251);
    overflow: hidden;
}
#loader-container .loader-inner {
    text-align: center;
    position: absolute;
    top:40%;
    left:0;
    width: 100%;
    top:40vh;
    left:0;
    width: 100vw;
    transform: scale(1);

}
#loader-container .loader-inner div {
    background-color: #7359EE;
}
</style>

<!-- <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet"> -->
<!--  Bootstrap -->
<link href="{{ asset('public/admin/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Font Awesome Icon Fonts -->
<link href="{{ asset('public/admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- Include MDI Icon Fonts -->
<link href="{{ asset('public/admin/vendor/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">

<link href="{{ asset('public/admin/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Open Iconic Icon Fonts -->

<link href="{{ asset('public/admin/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">

<!-- Bootstrap Switch -->
<link href="{{ asset('public/admin/vendor/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') }}" rel="stylesheet">

<!-- Chartist Charts base CSS -->
<link href="{{ asset('public/admin/vendor/chartist/dist/chartist.min.css') }}" rel="stylesheet">

<!-- Toastr Popups -->
<link href="{{ asset('public/admin/vendor/toastr/toastr.min.css') }}" rel="stylesheet">

<!-- Sweet Alert Popups -->
<link href="{{ asset('public/admin/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

<!-- iCheck Checkboxes -->
<link href="{{ asset('public/admin/vendor/iCheck/skins/square/_all.css') }}" rel="stylesheet">

<!-- Emphasize (Always Include Last)-->
<link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">

<style>
.subtasks h4 {
    margin-bottom: 1em;
}
.subtask h6 {
    margin-bottom: 1em;
}
</style>
</head>
