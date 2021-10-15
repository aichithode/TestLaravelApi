
<link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('css_page')

<link href="{{asset('css/overrrideStyle.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
<link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{{asset('assets/layouts/layout4/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/layouts/layout4/css/themes/light.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
<link href="{{asset('assets/layouts/layout4/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .preloader {
        position: fixed;

        top: 0;
        /*  left: 50%; !* centers the loading animation horizontally one the screen *!
          top: 50%; !* centers the loading animation vertically one the screen *!*/
        background-image:{{url("img/icon_piece.png")}};/* path to your loading animation */
        background-repeat: no-repeat;
        background-position: center;
    }

</style>
