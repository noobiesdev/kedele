<div class="fixed-sidebar-left">
  <ul class="nav navbar-nav side-nav nicescroll-bar">

      <!-- User Profile -->
      <li>
        <div class="user-profile text-center">
          <img src="" alt="logo-kedele.me" class="user-auth-img img-circle"/>
          <div class="dropdown mt-5">
          <a href="#" class="dropdown-toggle pr-0 bg-transparent" data-toggle="dropdown">{{ Auth::user()->nama }} <span class="caret"></span></a>
          <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
            <li>
              <a href="{{route('akun')}}"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
            </li>
            <!-- <li>
              <a href="#"><i class="zmdi zmdi-settings"></i><span>Pengaturan</span></a>
            </li> -->
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>Keluar</span></a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </ul>
          </div>
        </div>
      </li>

    <li class="navigation-header">
      <span>Utama</span> <i class="zmdi zmdi-more"></i>
    </li>
    <li>
      <a class="active" href="{{route('dashboard')}}" data-toggle="collapse" data-target="#dashboard"><div class="pull-left"><i class="glyphicon glyphicon-home mr-20"></i><span class="right-nav-text">Dasbor</span></div><div class="clearfix"></div></a>
    </li>

    @role('konsumen')
    <li>
      <a href="javascript:void(0);" data-toggle="collapse" data-target="#belanja"><div class="pull-left"><i class="fa fa-shopping-basket mr-20"></i><span class="right-nav-text">Pembelian</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
      <ul id="belanja" class="collapse in collapse-level-1">
        <li>
          <a href="{{route('belanja.index')}}">Belanja</a>
        </li>
        <li>
          <a href="{{route('belanja.arsip')}}">Diarsipkan</a>
        </li>
      </ul>
    </li>
    @endrole

    @role('produsen')
    <li>
      <a href="{{route('pembelian.index')}}" data-target="#pembelian"><div class="pull-left"><i class="glyphicon glyphicon-inbox mr-20"></i><span class="right-nav-text">Pembelian</span></div><div class="clearfix"></div></a>
    </li>
    <li>
      <a href="{{route('produksi.index')}}" data-toggle="collapse" data-target="#produksi"><div class="pull-left"><i class="glyphicon glyphicon-cutlery mr-20"></i><span class="right-nav-text">Produksi</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
    </li>
    <li>
      <a href="{{route('pengajuan-bahan.index')}}" data-toggle="collapse" data-target="#pengajuan-bahan"><div class="pull-left"><i class="glyphicon glyphicon-list-alt mr-20"></i><span class="right-nav-text">Pengajuan Bahan</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
    </li>
    @endrole

    @role('produsen')
    <li class="navigation-header">
      <span>Kendali laman</span> <i class="zmdi zmdi-more"></i>
    </li>
    <li>
      <a href="javascript:void(0);" data-toggle="collapse" data-target="#desain"><div class="pull-left"><i class="glyphicon glyphicon-globe mr-20"></i><span class="right-nav-text">Desain</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
      <ul id="desain" class="collapse collapse-level-1">
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#website" class="" aria-expanded="true">Website<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="website" class="collapse-level-2 collapse" aria-expanded="true" style="">
              <a href="{{route('website.banner')}}">Banner</a>
              <a href="{{route('website.lokasi')}}">Lokasi</a>
            </ul>
        </li>
        <li>
          <a href="{{route('website.kontak')}}">Kontak/ Sosial Media</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="{{route('usaha.index')}}" data-target="#kelolaUsaha"><div class="pull-left"><i class="glyphicon glyphicon-briefcase mr-20"></i><span class="right-nav-text">Profil Usaha</span></div><div class="clearfix"></div></a>
    </li>
    <li class="navigation-header">
      <span>Aktivasi dan Pembayaran</span> <i class="zmdi zmdi-more"></i>
    </li>
    <li>
      <a href="###" data-target="#tagihan" style="color:orange; background-color:white"><div class="pull-left"><i class="glyphicon glyphicon-circle-arrow-up mr-20"></i><span class="right-nav-text">Pembayaran</span></div><div class="clearfix"></div></a>
    </li>
    @endrole

    @role('admin')
    <li>
      <a href="{{route('pengajuan-bahan.index2')}}" data-toggle="collapse" data-target="#pengajuan-bahan"><div class="pull-left"><i class="glyphicon glyphicon-list-alt mr-20"></i><span class="right-nav-text">Pengajuan Bahan</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
    </li>
    <li>
      <a href="{{route('admin.manage')}}" data-toggle="collapse" data-target="manage-user"><div class="pull-left"><i class="fa fa-users mr-20"></i><span class="right-nav-text">Kelola Pengguna</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
    </li>
    @endrole

    <li><hr class="light-grey-hr mb-10"/></li>
    <li class="navigation-header">
      <span>Pendukung</span>
      <i class="zmdi zmdi-more"></i>
    </li>
    <li>
      <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Bantuan</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
      <ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
        <li>
          <a class="active" href="{{route('usage')}}">Petunjuk Penggunaan</a>
        </li>
        <li>
          <a class="active" href="{{route('helpdesk')}}">Ajukan Pertanyaan</a>
        </li>
      </ul>
    </li>
    <!-- <li>
      <a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Dokumentasi</span></div><div class="clearfix"></div></a>
    </li> -->
  </ul>
</div>
