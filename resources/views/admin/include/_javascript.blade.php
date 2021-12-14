
    @yield('js')
   <script src="{{asset('assets/admin/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('assets/admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/admin/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/admin/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/admin/lib/gmaps/gmaps.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bracket.js')}}"></script>
    <script src="{{asset('assets/admin/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('assets/admin/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
      </script>
      <script>
            $(function() {
              $( "#your_datepicker_id" ).datepicker({
              // dateFormat: 'dd/mm/yyyy',
              dateFormat: 'd/m/Y',
              changeMonth: true,
              changeYear: true});
              });
      </script>




