<script>
    var _url = "{{url('/')}}";

    String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g, '');};

    String.prototype.ltrim=function(){return this.replace(/^\s+/,'');};

    String.prototype.rtrim=function(){return this.replace(/\s+$/,'');};

    String.prototype.fulltrim=function(){return this.replace(/(?:(?:^|\n)\s+|\s+(?:$|\n))/g,'').replace(/\s+/g,' ');};

</script>

<!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<script>
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    function load() { // makes sure the whole site is loaded
        $('#dWait').modal('show');
    };
    $(function(){
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                orientation: "left",
                autoclose: true
            });
        }

        $('form#filterForm').submit(function(){
            //vérifier si les deux dates sont renseignées
            var date1 = $('input#date1').val();
            var date2 = $('input#date2').val();
            if(!date1 || !date2){
                return false;
            }
        })
    })

</script>

<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
@yield('page_javascript')
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/layouts/layout4/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout4/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
