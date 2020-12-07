<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                       <li><a href="/dashboard">HOME</a></li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-house"></i> Ruangan</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Sarana dan Prasarana</a>
                        </li>
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Ruangan Pembelajaran Umum</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Ruangan pembelajaran Khusus</a>
                        </li>

                    
                    </ul>
                    <div class="tab-content custom-menu-content">
                        
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="/rsatu">Ruang Satu</a>
                                </li>
                                <li><a href="/rdua">Ruang Dua</a>
                                </li>
                                <li><a href="/rtiga">Ruang Tiga</a>
                                </li>
                                <li><a href="/rempat">Ruang Empat</a>
                                </li>
                                <li><a href="/rlima">Ruang Lima</a>
                                </li>
                                <li><a href="/renam">Ruang Enam</a>
                                </li>
                                <li><a href="/rlacp">Ruang Lab ACP</a>
                                </li>
                                <li><a href="/rlbh">Ruang Lab Bahasa</a>
                                </li>
                                <li><a href="/rbc">Ruang Lab Broadcasting</a>
                                </li>
                                <li><a href="/netadv">Ruang Network advance</a>
                                </li>
                                <li><a href="/rmmadv">Ruang Lab MM Advance</a>
                                </li>
                                <li><a href="/rnet">Ruang Lab Network</a>
                                </li>
                                <li><a href="/rrpladv">Ruang RPL Advance</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="/sarpras">Sarana Dan Prasarana</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="/umum">Ruang Pembelajaran Umum</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="/khusus">Ruang Pembelajaran khusus</a>
                                </li>
                            </ul>
                        </div>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal">Logout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Menu area End-->

    <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>