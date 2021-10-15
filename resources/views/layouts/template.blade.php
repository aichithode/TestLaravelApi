<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
    <!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{config('app.APP_NAME')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Amanda" name="author"/>
@yield('meta_description')
<!-- BEGIN GLOBAL MANDATORY STYLES -->
@include('layouts.assets.css')
<!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{url('favicon.ico')}}"/>
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-sidebar-closed-hide-logo page-boxed">
<!-- BEGIN HEADER -->
<div class="page-header navbar ">
    <!-- BEGIN HEADER INNER -->
@include('layouts.header')
<!-- END HEADER INNER -->

    <div class="col-xs-12" style="padding:0;box-shadow: 0px -5px 11px -3px #282828; ">
        <div class="col-xs-3" style="height:4px; background-color:rgba(11,63,194,0.6)"></div>
        <div class="col-xs-6" style="height:4px; background-color:rgba(11,63,194,0.6)"></div>
        <div class="col-xs-3" style="height:4px; background-color:rgba(11,63,194,0.6)"></div>
    </div>
</div>
<!-- END HEADER -->

<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->

<!-- BEGIN CONTAINER -->
<div class="container-fluid">
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
    <!-- @include('layouts.left_menu')-->
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content" >
                @yield('content')
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    @include('layouts.footer')
</div>
<!-- END FOOTER -->

@include('layouts.assets.js')
<script>
    //Token mismatch
    $(document).ajaxComplete(function(event, xhr, settings) {
        switch (xhr.status) {
            case 500:
                alert('Ce formulaire a expiré, nous actualisons la page, merci de patienter');
                location.reload();
                break;
            case 400:
                alert('Ce formulaire a expiré, nous actualisons la page, merci de patienter');
                location.reload();
                break;
            case 403:
                alert('Ce formulaire a expiré, nous actualisons la page, merci de patienter');
                location.reload();
                break;
        }
    });

</script>
</body>

</html>
