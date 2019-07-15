<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>MENU UTAMA</h3>
        <ul class="nav side-menu">
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-home"></i> Beranda</a>
            </li>
        </ul>

    <ul class="nav side-menu">
      <li><a><i class="fa fa-edit"></i> Data <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
           @if(auth()->user()->level == 'admin')
          <li><a href="{{url('/anggota')}}"><i class="fa fa-user"></i> Data Anggota</a>
            @endif
          <li><a href="{{url('/kegiatan')}}"><i class="fa fa-user"></i> Data Kegiatan</a>
          <li><a href="{{url('/penghargaan')}}"><i class="fa fa-user"></i> Data Penghargaan</a>
        </ul>
      </li>
    </ul>

        <!-- @if(auth()->user()->level == 'admin')
        <ul class="nav side-menu">
            <li><a href="{{url('/anggota')}}"><i class="fa fa-user"></i> Data Anggota</a>
            </li>
        </ul>
        @endif

        <ul class="nav side-menu">
            <li><a href="#"><i class="fa fa-user"></i> Data Kegiatan</a>
            </li>
        </ul>
        <ul class="nav side-menu">
            <li><a href="#"><i class="fa fa-user"></i> Data Penghargaan</a>
            </li>
        </ul> -->

    </div>
    <div class="menu_section">
        <h3>Admin</h3>
            <ul class="nav side-menu">
            <li><a><i class="fa fa-cog"></i> Setting <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('/gantipassword')}}">Ganti Password</a></li>
                    <li><a href="{{url('/')}}">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
