<!DOCTYPE html>
<html lang="en">
<head>
<title>Innovalabs</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('public/admin/vendor/loaders.css/loaders.min.css') }}">
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
<body class="">
<div class="page-wrapper fixed-navbar-top">

    <div id="loader-container" style="display:none">
    <div id="loader">
        <div class="loader-inner line-scale">
            <div></div><div></div><div></div><div></div><div></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var loadersign = document.getElementById('loader-container');
    loadersign.style.display = "block";
    window.onload = function() {
        loadersign.style.display = "none";
    }
</script>
<nav class="navbar navbar-blue navbar-fixed-top topbar" style="" id="topbar">

    <div class="navbar-header navbar-always-float navbar-left">
        <button class="btn btn-transparent-light navbar-btn navbar-sidebar-toggle  hidden-xs ">
            <i class="mdi mdi-menu"></i>
        </button>
        <button class="btn btn-transparent-light navbar-btn navbar-sidebar-collapse hidden-sm hidden-md hidden-lg">
            <i class="mdi mdi-menu"></i>
        </button>
        <a class="navbar-brand" href="#">
            <i class="mdi mdi-crown"></i><span class="navbar-brand-text">Emphasize</span>
        </a>


    </div>

    <div class="navbar-body">
        <div class="">
                <div class="row row-table">
                    <div class="col-md-7 col-lg-8  hidden-sm hidden-xs">
                        <form class="navbar-form navbar-form-full">
                            <div class="input-group navbar-input-group">
                                  <input type="text" class="form-control" placeholder="Search">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="mdi mdi-magnify"></i></button>
                                  </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-11 col-xs-11">

                        <ul class="nav navbar-nav navbar-right navbar-always-float">

                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="notification-pulse pulse-right"></span>
                              <i class="mdi mdi-message"></i>

                            </a>
                            <ul class="dropdown-menu notification-dropdown list-group list-group-linked list-group-wide ">
                              <li class="list-group-item list-group-header">
                                  <a href="#" class="link-wrapper">
                                      <div class="media">


                                        <div class="media-full">
                                            <h5 class="nowrap align-left" style="padding:0;margin:0; font-weight:400">
                                              <span class="pull-right">(12)</span>Notifications
                                            </h5>
                                        </div>
                                      </div>
                                  </a>
                              </li>
                              <li class="list-group-item">
                                  <a href="#" class="link-wrapper">
                                      <div class="media">
                                        <div class="media-left">
                                            <img class="media-object img-circle img-thumb-xxs" src="http://via.placeholder.com/500x500" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-post">
                                                <p class="media-content">
                                                  <span class="media-user-inline">Alexis Parker </span> is now following you
                                                </p>
                                                <div class="media-time text-small text-muted">1d</div>
                                            </div>

                                        </div>

                                      </div>
                                  </a>
                              </li>
                              <li class="list-group-item">
                                  <a href="#" class="link-wrapper">
                                      <div class="media">
                                        <div class="media-left">
                                            <span class="media-object rounded-icon rounded-icon-mini rounded-icon-success">
                                              <i class="mdi mdi-email"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-post">
                                                <p class="media-content">
                                                  Company Official Policy on Use of Magic is now Out!
                                                </p>
                                                <div class="media-time text-small text-muted">1d</div>
                                            </div>

                                        </div>

                                      </div>
                                  </a>
                              </li>

                              <li class="list-group-item">
                                  <a href="#" class="link-wrapper">
                                      <div class="media">
                                        <div class="media-left">
                                            <span class="media-object rounded-icon rounded-icon-primary">
                                              <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-post">
                                                <p class="media-content">
                                                  Meeting with Mr. Kirk at 3 PM
                                                </p>
                                                <div class="media-time text-small text-muted">1d</div>
                                            </div>

                                        </div>

                                      </div>
                                  </a>
                              </li>





                              <li class="list-group-item list-group-footer">
                                  <a href="#" class="link-wrapper">
                                      <div class="media">


                                        <div class="media-full">
                                            <h6 class="nowrap align-center bold text-muted" style="padding:0;margin:0; font-weight:400">
                                              SEE ALL
                                            </h6>

                                        </div>
                                      </div>
                                  </a>
                              </li>


                            </ul>
                          </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                  <span class="notification-pulse pulse-right"></span>
                                    <i class=" mdi mdi-email"></i>

                                </a>
                                <ul class="dropdown-menu list-group list-group-linked">
                                  <li class="list-group-item list-group-header">
                                      <a href="#" class="link-wrapper">
                                          <div class="media">


                                            <div class="media-full">
                                                <h5 class="nowrap align-left" style="padding:0;margin:0; font-weight:400">
                                                  <span class="pull-right">(3)</span>Messages
                                                </h5>
                                            </div>
                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item">
                                      <a href="#" class="link-wrapper">
                                          <div class="media">
                                            <div class="media-left">
                                                <img class="media-object img-circle img-thumb-xs" src="http://via.placeholder.com/500x500" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-post">

                                                    <h6 class="media-user">
                                                        Alexis Parker
                                                    </h6>
                                                    <p class="media-content">
                                                      Let's meet and discuss the finer details of the Johnson Deal.

                                                    </p>

                                                </div>

                                            </div>
                                            <div class="media-right">
                                              <span class="media-time text-small text-muted pull-right">12h</span>
                                            </div>

                                          </div>
                                      </a>
                                  </li>

                                  <li class="list-group-item">
                                      <a href="#" class="link-wrapper">
                                          <div class="media">
                                            <div class="media-left">
                                                <img class="media-object img-circle img-thumb-xs" src="http://via.placeholder.com/500x500" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-post">
                                                    <h6 class="media-user">
                                                        Bruce Battman
                                                    </h6>
                                                    <p class="media-content">
                                                      Let's meet and discuss the finer details of the Johnson Deal.
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="media-right">
                                              <span class="media-time text-small text-muted pull-right">1d</span>
                                            </div>

                                          </div>
                                      </a>
                                  </li>

                                  <li class="list-group-item">
                                      <a href="#" class="link-wrapper">
                                          <div class="media">
                                            <div class="media-left">
                                                <img class="media-object img-circle img-thumb-xs" src="http://via.placeholder.com/500x500" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-post">
                                                    <h6 class="media-user">
                                                        Wulfric Dumbly
                                                    </h6>
                                                    <p class="media-content">
                                                      Let's meet and discuss the finer details of the Johnson Deal.
                                                    </p>
                                                </div>

                                            </div>

                                          </div>
                                      </a>
                                  </li>

                                  <li class="list-group-item">
                                      <a href="#" class="link-wrapper">
                                          <div class="media">
                                            <div class="media-left">
                                                <img class="media-object img-circle img-thumb-xs" src="http://via.placeholder.com/500x500" alt="...">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-post">
                                                    <h6 class="media-user">
                                                        Alastair Moopy
                                                    </h6>
                                                    <p class="media-content">
                                                      Let's meet and discuss the finer details of the Johnson Deal.
                                                    </p>
                                                </div>

                                            </div>

                                          </div>
                                      </a>
                                  </li>
                                  <li class="list-group-item list-group-footer">
                                      <a href="#" class="link-wrapper">
                                          <div class="media">


                                            <div class="media-full">
                                                <h6 class="nowrap align-center bold text-muted" style="padding:0;margin:0; font-weight:400">
                                                  SEE ALL
                                                </h6>
                                            </div>
                                          </div>
                                      </a>
                                  </li>


                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-tune-vertical"></i></a>
                                <ul class="dropdown-menu list-group no-click-exit">
                                    <li class="list-group-item list-group-header">

                                            <div class="media">


                                              <div class="media-full">
                                                  <h5 class="nowrap align-left" style="padding:0;margin:0; font-weight:400">
                                                    Navbar Color
                                                  </h5>
                                              </div>
                                            </div>

                                    </li>
                                    <li class="list-group-item">

                                            <div class="media">

                                              <div class="media-body">
                                                  <div class="media-post">
                                                      <ul class="nav nav-tabs sidebar-theming">
                                                          <li>
                                                              <a href="#" class="info dark class-set" data-toggle="class-set" data-target="#topbar" data-class-value="navbar-blue" data-class-remove="navbar-primary navbar-teal">


                                                              </a>
                                                          </li>
                                                          <li>
                                                              <a href="#" class="primary class-set" data-toggle="class-set" data-target="#topbar" data-class-value="navbar-primary" data-class-remove="navbar-info navbar-teal">
                                                                  </a>
                                                          </li>
                                                          <li>
                                                              <a href="#" class="success class-set" data-toggle="class-set" data-target="#topbar" data-class-value="navbar-teal"  data-class-remove="navbar-primary navbar-info">
                                                                  </a>
                                                          </li>

                                                      </ul>
                                                  </div>

                                              </div>

                                            </div>

                                    </li>

                                    <li class="list-group-item">

                                            <div class="media">

                                              <div class="media-body">
                                                  <div class="media-post">

                                                          <label for="topbar-fix" ><input type="checkbox" checked class="bootstrap-switch fixed-topbar-toggle" data-size="mini" id="topbar-fix"   />
                                                              <span style="margin-left:0.3em;">Fixed Topbar</span></label>


                                                  </div>

                                              </div>

                                            </div>

                                    </li>
                                    <li class="list-group-item">

                                            <div class="media">

                                              <div class="media-body">
                                                  <div class="media-post">

                                                          <label for="sidebar-fix" data-toggle="tooltip" data-placement="top" title="*Requires A Fixed Topbar" data-original-title="Tooltip on Top" >
                                                              <input type="checkbox" checked class="bootstrap-switch fixed-sidebar-toggle" data-size="mini" id="sidebar-fix"   />
                                                              <span style="margin-left:0.3em;">Fixed Sidebar</span></label>


                                                  </div>

                                              </div>

                                            </div>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>





        </div><!-- /.container-fluid -->
    </div>

</nav>

    
<div class="sidebar sidebar-left sidebar-dark sidebar-fixed sidebar-navbar-theme" id="sidebar">


    <div class="sidebar-scrollable-content">


    <div class="sidebar-body">


    <div class="sidebar-cover">
        <a class="sidebar-user" data-toggle="collapse" href="#sidebar-highlight" aria-expanded="false" aria-controls="sidebar-highlight">

            <div class="sidebar-user-img">
                <img src="http://via.placeholder.com/500x500" alt="" class="img-circle img-online img-thumbnailimg-thumbnail-primary">
            </div>
            <div class="sidebar-user-name">
                John Doe Man
                <span class="sidebar-user-expand"><i class="fa fa-caret-down"></i></span>
                <span class="text-small sidebar-user-email">
                    john@doeman.com

                </span>
            </div>

        </a>
        <div class="sidebar-highlight collapse" id="sidebar-highlight">

                <ul class="main-nav">
                    <li>
                        <a href=""><i class="mdi mdi-settings"></i> Account</a>
                    </li>
                    <li>
                        <a href=""><i class="mdi mdi-account"></i> Profile</a>
                    </li>
                    <li>
                        <a href=""><i class="mdi mdi-logout"></i> Logout</a>
                    </li>
                </ul>

        </div>
    </div>


    <div class="main-menu-container">
        <ul class="main-nav" id="main-nav">
            <li class="main-nav-label">
                <span>
                    Main Navigation
                </span>
            </li>
            <li>
                <a href="../dashboard/index.html">

                    <i class="mdi mdi-cube"></i><span class="title">Dashboard</span>


                </a>
            </li>


            <li>
                <a href="" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-layers"></i><span class="title">UI Elements</span>
                </a>
                <ul>
                    <li>
                        <a href="../ui/panels.html"><span class="title">Panels</span></a>
                    </li>
                    <li>
                        <a href="../ui/buttons.html"><span class="title">Buttons</span></a>
                    </li>
                    <li>
                        <a href="../ui/progress.html"><span class="title">Progress</span></a>
                    </li>
                    <li>
                        <a href="../ui/nav.html"><span class="title">Tabs</span></a>
                    </li>

                    <li>
                        <a href="../ui/labels.html"><span class="title">Labels & Badges</span></a>
                    </li>
                    <li>
                        <a href="../ui/tooltips.html"><span class="title">Tooltips & Popovers</span></a>
                    </li>
                    <li>
                        <a href="../ui/breadcrumb.html"><span class="title">Breadcrumb</span></a>
                    </li>
                    <li>
                        <a href="../ui/utility.html"><span class="title">Utility Classes</span></a>
                    </li>

                </ul>
            </li>



            <li>
                <a href="" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-message-alert"></i><span class="title">Alerts & Popups</span>
                </a>
                <ul class="">

                    <li>
                        <a href="../alerts/alerts.html"><span class="title">Alerts</span></a>
                    </li>
                    <li>
                        <a href="../alerts/modals.html"><span class="title">Modals</span></a>
                    </li>
                    <li>
                        <a href="../alerts/sweet.html"><span class="title">Sweet Alerts</span></a>
                    </li>
                    <li>
                        <a href="../alerts/toastr.html"><span class="title">Toastr</span></a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-creation"></i><span class="title">Panel Demos</span>
                </a>
                <ul>
                    <li>
                        <a href="../widgets/small.html"><span class="title">Small Widgets</span></a>
                    </li>
                    <li>
                        <a href="../widgets/index.html"><span class="title">Large Widgets</span></a>
                    </li>


                </ul>
            </li>

            <li>
                <a href="" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-hexagon"></i><span class="title">Icons</span>
                </a>
                <ul>

                    <li>
                        <a href="../ui/icons-fa.html"><span class="title">Font Awesome</span></a>
                    </li>
                    <li>
                        <a href="../ui/icons-mdi.html"><span class="title">Material Design</span></a>
                    </li>
                    <li>
                        <a href="../ui/icons-oi.html"><span class="title">Open Iconic</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../ui/forms.html">
                    <i class="mdi mdi-checkbox-multiple-marked"></i><span class="title">Forms</span>
                </a>
            </li>

            <li class="">
                <a href="#" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-chart-arc"></i><span class="title">Charts</span>
                </a>
                <ul class="">
                    <li>
                        <a href="../charts/charts.html"><span class="title">Chartjs</span></a>
                    </li>
                    <li>
                        <a href="../charts/chartist.html"><span class="title">Chartist</span></a>
                    </li>
                    <li>
                        <a href="../charts/morris.html"><span class="title">Morrisjs</span></a>
                    </li>
                    <li>
                        <a href="../charts/cthree.html"><span class="title">C3 Charts</span></a>
                    </li>
                    <li>
                        <a href="../charts/peity.html"><span class="title">Piety</span></a>
                    </li>


                    <li>
                        <a href="../charts/other.html"><span class="title">Other</span></a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="../ui/tables.html">
                    <i class="mdi mdi-table"></i><span class="title">Tables</span>
                </a>
            </li>

            <li class="main-nav-label">
                <span class="title">
                    UI Demos
                </span>
            </li>
            <li>
                <a href="../pages/calendar.html">
                    <i class="mdi mdi-calendar"></i><span class="title">Calendar</span>
                </a>
            </li>

            <li>
                <a href="../pages/loaders.html">
                    <i class="mdi mdi-reload"></i><span class="title">Loaders</span>
                </a>
            </li>
            <li>
                <a href="../pages/animations.html">
                    <i class="mdi mdi-animation"></i><span class="title">Animations</span>
                </a>
            </li>

            <li>
                <a href="../pages/profile.html">
                    <i class="mdi mdi-account"></i><span class="title">Profile</span>
                </a>
            </li>
            <li class="" aria-expanded="true">
                <a href="" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-email"></i><span class="title">Messaging</span>
                </a>
                <ul class="">
                    <li class="">
                        <a href="../email/inbox.html"><span class="title">Inbox</span></a>
                    </li>
                    <li class="">
                        <a href="../email/message.html"><span class="title">Inbox Message</span></a>
                    </li>
                    <li>
                        <a href="../email/compose.html"><span class="title">Email Compose</span></a>
                    </li>


                </ul>
            </li>
            <li class="">
                <a href="" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-book"></i><span class="title">Sample Pages</span>
                </a>
                <ul class="">
                    <li class="">
                        <a href="../pages/login.html"><span class="title">Login</span></a>
                    </li>
                    <li class="">
                        <a href="../pages/signup.html"><span class="title">Signup</span></a>
                    </li>
                    <li class="">
                        <a href="../pages/empty.html"><span class="title">Empty</span></a>
                    </li>
                    <li class="">
                        <a href="../pages/recovery.html"><span class="title">Forgot Password</span></a>
                    </li>
                    <li class="">
                        <a href="../pages/faq.html"><span class="title">FAQ</span></a>
                    </li>
                    <li class="">
                        <a href="../pages/invoice.html"><span class="title">Invoice</span></a>
                    </li>
                    <li class="">
                        <a href="../pages/pricing.html"><span class="title">Pricing</span></a>
                    </li>


                </ul>
            </li>
            <li class="" >
                <a href="#" class="has-arrow">
                    <span class="menu-caret"></span>
                    <i class="mdi mdi-format-list-bulleted"></i><span class="title">Multi Level Menu</span>
                </a>
                <ul class="">
                    <li class="" >
                        <a href="#" class="has-arrow">
                            <span class="menu-caret"></span>
                            <span class="title">Level 2 One</span>
                        </a>
                        <ul class="">
                            <li class="">
                                <a href="#"><span class="title">Menu Item</span></a>
                                <a href="#"><span class="title">Menu Item</span></a>
                            </li>

                        </ul>
                    </li>
                    <li class="" >
                        <a href="#" class="has-arrow">
                            <span class="menu-caret"></span>
                            <span class="title">Level 2 Two</span>
                        </a>
                        <ul class="">
                            <li class="">
                                <a href="#"><span class="title">Menu Item</span></a>
                                <a href="#"><span class="title">Menu Item</span></a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
    <!-- /.main-menu-container -->
    </div>
    <!-- /.sidebar-body -->
    </div>
    <!-- /.sidebar-scrollable-content -->

    <div class="sidebar-footer">
        <div class="horizontal-nav">
            <ul class="horizontal-nav horizontal-nav-3">
                <li>
                    <a href=""><i class="mdi mdi-settings"></i></a>
                </li>
                <li>
                    <a href=""><i class="mdi mdi-account"></i></a>
                </li>
                <li>
                    <a href=""><i class="mdi mdi-logout"></i></a>
                </li>
            </ul>
        </div>
    </div>


</div>

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
                <div class="col-lg-8">

                    <div class="panel">
                        <div class="panel-heading">
                          <h2>
                              Monthly Sale
                          </h2>
                          <span class="subtext">
                              From July to November 2017
                          </span>
                            <ul class="panel-actions">
                                <li>
                                    <a href="#" class="panel-action">
                                        <i class="mdi mdi-dots-vertical">

                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-action panel-collapse-toggle">
                                        <i class="mdi mdi-chevron-up">

                                        </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="panel-action panel-action-fullscreen ">
                                        <i class="mdi mdi-fullscreen"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="panel-body" style="padding-top:0.5em;">

                            <div class="chart-legends"  style="text-align:right; padding-right:1em;">
                                <span>
                                    <i class="fa fa-circle mg-sm" style="color:rgba(36,169,188,1);"></i>Product Sale

                                    <i class="fa fa-circle mg-sm" style="color:rgba(30,126,239,1);"></i>Visitors
                                    <i class="fa fa-circle mg-sm" style="color:rgba(115,89,238,1);"></i>Revenue
                                </span>
                            </div>

                            <div class="chart-container" style="position:relative;">

                                <canvas id="chart-bar" width="500" height="300"></canvas>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                          <h2>
                              Monthly Sale
                          </h2>
                          <span class="subtext">
                              From July to November 2017
                          </span>
                          <ul class="panel-actions">

                              <li>
                                  <a href="#" class="panel-action panel-collapse-toggle">
                                      <i class="mdi mdi-chevron-up">

                                      </i>
                                  </a>
                              </li>


                          </ul>
                        </div>
                        <div class="panel-body">
                            <div id="donut-chart"></div>


                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                </div>
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
    <!-- /.container-fluid -->
</div>
<!-- /.page-wrapper -->
<!-- jQuery -->
<script src="{{ asset('public/admin/vendor/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Javascript -->
<script src="{{ asset('public/admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Chartjs-->
<script src="{{ asset('public/admin/vendor/chart.js/dist/Chart.min.js') }}"></script>

<!-- Easy Pie Chart-->
<script src="{{ asset('public/admin/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

<!-- Bootstrap Switch-->
<script src="{{ asset('public/admin/vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>

<!-- Color Variables -->
<script src="{{ asset('public/admin/scripts/colors.min.js') }}"></script>

<!-- Collapsible Menu Plugin -->
<script src="{{ asset('public/admin/scripts/collapsibleMenu.min.js') }}"></script>

<!-- Collapsible Sidebar Plugin -->
<script src="{{ asset('public/admin/scripts/sidebar.js') }}"></script>

<!-- Panel Actions -->
<script src="{{ asset('public/admin/scripts/panel.min.js') }}"></script>

<!-- Class Toggle Plugin -->
<script src="{{ asset('public/admin/scripts/classtoggle.min.js') }}"></script>

<!-- Initialize Emphasize -->
<script src="{{ asset('public/admin/scripts/init.js') }}"></script>

<!-- Chartist -->
<script src="{{ asset('public/admin/vendor/chartist/dist/chartist.min.js') }}"></script>
<!-- jQuery SlimScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('public/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js" data-turbolinks-track="true"></script>
<!-- Sweet Alert -->
<script src="{{ asset('public/admin/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('public/admin/vendor/toastr/toastr.min.js') }}"></script>

<!-- Icheck Checkboxes -->
<script src="{{ asset('public/admin/vendor/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('public/admin/vendor/d3/d3.min.js') }}"></script>
<script src="{{ asset('public/admin/vendor/c3/c3.min.js') }}"></script>

<script>
$(function() {
    var ctx = $('#chart-line');
    var salesChart = new Chart(ctx, {
        'type': 'line',
        data: {
            labels: ["0","1","2", "3","4", "5","6","7","8", "9","0","1","2", "3","4", "5","6","7","8", "9"],
            datasets:[
                {
                    label:'Performance Score',
                    data:[200,250,340,160,150,170,200,180,210, 150,200,290,260,330,350,300,340,400,500,600 ],
                    borderColor: "rgba(119,95,238,1)",
                    backgroundColor: "rgba(119,95,238,1)",
                    lineTension: 0,
                    pointRadius:0
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:false,
                        display: false,
                        stepSize:50,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false,
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        display: false,
                    }
                }]
            },
            legend: {
                display: false,
                position: 'top',
                fullWidth: false,
                labels: {
                    boxWidth:14
                }
            }
        }
    })
    var ctx = $('#chart-line2');
    var salesChart = new Chart(ctx, {
        'type': 'line',
        data: {
            labels: ["0","1","2", "3","4", "5","6","7","8", "9","0","1","2", "3","4", ],
            datasets:[
                {
                    label:'Performance Score',
                    data:[200,250,340,210, 250,200,400,500,400,290,260,340,330,350,300],
                    borderColor: "rgba(30,126,239,0.9)",
                    backgroundColor: "rgba(30,126,239,0.9)",
                    lineTension: 0,
                    pointRadius:0,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:false,
                        display: false,
                        stepSize:50,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false,
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        display: false,
                    }
                }]
            },
            legend: {
                display: false,
                position: 'top',
                fullWidth: false,
                labels: {
                    boxWidth:14
                }
            }
        }
    })
    var ctx = $('#chart-line3');
    var salesChart = new Chart(ctx, {
        'type': 'line',
        data: {
            labels: ["0","1","2", "3","4", "5","6","7","8", "9","0","1","2", "3","4", ],
            datasets:[
                {
                    label:'Performance Score',
                    data:[200,250,240,250, 220,200,300,400,300,190,160,240,330,350,300],
                    borderColor: "rgba(38,193,177,0.9)",
                    backgroundColor: "rgba(38,193,177,0.9)",
                    lineTension: 0,
                    pointRadius:0,
                }
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:false,
                        display: false,
                        stepSize:50,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false,
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        display: false,
                    }
                }]
            },
            legend: {
                display: false,
                position: 'top',
                fullWidth: false,
                labels: {
                    boxWidth:14
                }
            }
        }
    })
    var ctx = $('#chart-bar');
    var salesChart = new Chart(ctx, {
        'type': 'bar',
        data: {
            labels: ["Jan","Feb","March","April", "May"],
            datasets:[
                {
                    label:'Performance Score',
                    data:[100,50,180,70,80],
                    borderColor:"rgba(38,193,177,1)",
                    backgroundColor: "rgba(38,193,177,1)",
                    lineTension: 0.3,
                    borderWidth:1,
                },
                {
                    label:'Performance Score',
                    data:[200,100,180,50,90],
                    borderColor:"rgba(30,126,239,1)",
                    backgroundColor: "rgba(30,126,239,1)",
                    lineTension: 0.3,
                    borderWidth:1,
                },
                {
                    label:'Performance Score',
                    data:[400,150,280,130,300],
                    borderColor: 'rgba(115,89,238,1)',
                    backgroundColor: "rgba(115,89,238,1)",
                    lineTension: 0.3,
                    borderWidth:1,
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:true,
                        stepSize: 100,
                        display: true,
                        padding: 10,
                    }
                }],
                xAxes: [{
                  categoryPercentage: 0.7,
                    gridLines: {
                        tickMarkLength:10,
                        drawBorder:false,
                        color: 'rgba(240,240,240,0)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display: true,
                    },
                    ticks: {
                        beginAtZero:true,
                        display: true,
                    }
                }]
            },
            legend: {
                display: false,
            }
        }
    })
    var chart = c3.generate({
    bindto: '#donut-chart',
    data: {
        columns: [
            ['Retweets', 0],
            ['Shares', 100],
            ['Sale', 160],
            ['Revenue', 80],
        ],
        colors: {
            'Retweets': '#FC5F7C',
            'Shares': '#1E88E5',
            'Sale': '#7359EE',
            'Revenue': 'rgba(38,193,177,0.9)',
        },
        type: 'donut'
    }
    });
    $('.easyPieChart').easyPieChart({
        size:28,
        scaleColor:false,
        lineWidth:2,
        barColor:'#fff',
        trackColor: 'rgba(0,0,0,0.1)',
    });
});
</script>



</body>
</html>