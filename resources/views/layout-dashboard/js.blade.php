
    <script src="{{asset('../../assets2/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('../../assets2/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>


    <!-- END CORE PLUGINS -->

    <script src="{{asset('../../assets2/global/scripts/metronic.js')}}" type="text/javascript"></script>
    <script src="{{asset('../../assets2/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{asset('../../assets2/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('../../assets2/admin/pages/scripts/login.js') }}" type="text/javascript"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function () {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            QuickSidebar.init(); // init quick sidebar
            // Demo.init(); // init demo features
            Login.init();
            // Index.init();
            // Index.initDashboardDaterange();
            Index.initJQVMAP(); // init index page's custom scripts
            // Index.initCalendar(); // init index page's custom scripts
            // Index.initCharts(); // init index page's custom scripts
            // Index.initChat();
            // Index.initMiniCharts();
            // Tasks.initDashboardWidget();
        });
    </script>
    <!-- END JAVASCRIPTS -->
