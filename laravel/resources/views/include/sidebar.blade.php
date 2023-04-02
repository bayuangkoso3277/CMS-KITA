<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-users-line"></i><span>Loket</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{url('loket')}}">Loket</a></li>
                        <li><a href="{{url('loket/pasien_lama')}}">Loket Pasien Lama</a></li>
                        <li><a href="{{url('loket/pasien_baru')}}">Loket Pasien Baru</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{url('assets')}}/img/icons/menu-icon-02.svg"
                                alt=""></span> <span> Dokter </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="doctors.html">Doctor List</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{url('assets')}}/img/icons/menu-icon-03.svg"
                                alt=""></span> <span>Pasien </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="patients.html">Pasien List</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-clipboard-question"></i><span>Rekam Medis</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{url('rekam-medis')}}">Rekam Medis List</a></li>
                        <li><a href="{{url('rekam-medis/cari')}}">Rekam Medis Search</a></li>
                        <li><a href="{{url('rekam-medis/input')}}">Rekam Medis Input</a></li>
                        <li><a href="{{url('rekam-medis/detail')}}">Rekam Medis Detail</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-clipboard-question"></i><span>Poli</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{url('poli/antri')}}">Antri Poli</a></li>
                        <li><a href="{{url('poli')}}">Input Poli</a></li>
                    </ul>
                </li>
                <li>
                    <a href="chat.html"><span class="menu-side"><img src="{{url('assets')}}/img/icons/menu-icon-10.svg"
                                alt=""></span> <span>Chat</span></a>
                </li>
                <li>
                    <a href="{{url('assets')}}.html"><i class="fa fa-cube"></i> <span>Obat</span></a>
                </li>
            </ul>
            <div class="logout-btn">
                <a href="login.html"><span class="menu-side"><img src="{{url('assets')}}/img/icons/logout.svg"
                            alt=""></span> <span>Logout</span></a>
            </div>
        </div>
    </div>
</div>
