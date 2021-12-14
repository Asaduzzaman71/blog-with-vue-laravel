<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.include._head')
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Smart <i>clinic</i><span>]</span></a></div>
    @include('admin.include._leftsidebar')
    <!-- ########## END: LEFT PANEL ########## -->



    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.include._leftsidebar')
    <!-- ########## END: HEAD PANEL ########## -->

    @include('admin.include._header')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
    @yield('content')
    @include('admin.include._footer')
   </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    @include('admin.include._javascript')

  </body>
</html>
