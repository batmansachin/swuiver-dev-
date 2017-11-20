<div class="sidebar sidebar-left sidebar-dark sidebar-fixed sidebar-navbar-theme" id="sidebar">
    <div class="sidebar-scrollable-content">
    <div class="sidebar-body">
    <div class="sidebar-cover">
        <a class="sidebar-user" data-toggle="collapse" href="#sidebar-highlight" aria-expanded="false" aria-controls="sidebar-highlight">

            <div class="sidebar-user-img">
                <img src="http://via.placeholder.com/500x500" alt="" class="img-circle img-online img-thumbnailimg-thumbnail-primary">
            </div>
            <div class="sidebar-user-name">
                Sachin Kumar
                <span class="sidebar-user-expand"><i class="fa fa-caret-down"></i></span>
                <span class="text-small sidebar-user-email">
                    sachin@innovalabs.com

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
                       <!--  <a href=""><i class="mdi mdi-logout"></i> Logout</a> -->
                                                 <a href="{{ url('logout') }}"
                                            >
                                            Logout
                                        </a>
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
                <a href="{{ route('debate_list') }}">

                    <i class="mdi mdi-cube"></i><span class="title">Debates</span>


                </a>
            </li>


            <li>
                <a href="" class="has-arrow">
                    <span class=""></span>
                    <i class="mdi mdi-layers"></i><span class="title">Polls</span>
                </a>
                
            </li>
             <li>
                <a href="{{ route('User_profile') }}" class="has-arrow">
                    <span class=""></span>
                    <i class="mdi mdi-layers"></i><span class="title">Users</span>
                </a>
                
            </li>
             <li>
                <a href="{{ route('master-topic.index') }}" class="has-arrow">
                    <span class=""></span>
                    <i class="mdi mdi-layers"></i><span class="title">Topics</span>

                </a>
                
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