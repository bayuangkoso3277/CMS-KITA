<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{url('loket')}}"><i class="fa fa-users-line"></i> <span>Loket</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{url('assets')}}/img/icons/menu-icon-02.svg"
                                alt=""></span> <span> Doktor </span> <span class="menu-arrow"></span></a>
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
