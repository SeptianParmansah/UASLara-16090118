<!DOCTYPE html>
<html lang="en">
  @include('templates.back_end._header')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SI Pramuka</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/home/img/about/pram.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('templates.back_end._sidebar')
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        @include('templates.back_end._navbar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="">
              @yield('main')
              @yield('modal')
          </div>
          <!-- /top tiles -->
        </div>


                <!-- end of weather widget -->
              </div>
            </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('templates.back_end._footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    @include('templates.back_end._script')

  </body>
</html>
