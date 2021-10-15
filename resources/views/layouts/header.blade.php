<div class="page-header-inner  ">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
        <a href="{{url('/')}}">
            <img src="{{url('img/cadi.png')}}" alt="logo" class="logo-default" height="60" width="80" >
        </a>
    </div>
    <!-- END LOGO -->

    {{--BEGIN APP NAME--}}
    <div class="text-center appnamediv">
        <span class="appname">{{config('app.APP_NAME')}}</span>
    </div>
    {{--END APP NAME--}}

    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
    <!-- END RESPONSIVE MENU TOGGLER -->

    <!-- BEGIN PAGE TOP -->
    <div class="page-top">
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="separator hide"> </li>
                <li class="dropdown dropdown-user dropdown-dark">
                    <a href="{{url('login')}}"  class="dropdown-toggle" style="">
                        <i class="fa fa-user-secret"></i>
                        <span class="username username-hide-mobile"> Connexion</span>
                    </a>
                </li>
                <li class="separator hide"> </li>
                <li class="dropdown dropdown-user dropdown-dark">
                    <a href="{{url('register')}}" class="dropdown-toggle" style="">
                        <i class="fa fa-institution"></i>
                        <span class="username username-hide-mobile"> Inscription</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END PAGE TOP -->
</div>

