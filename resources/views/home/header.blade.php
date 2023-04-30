<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="full">
            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
            <div class="logo_section">
                <a href="index.html"><img class="img-responsive" src="{{asset('assets')}}/admin2/images/logo/logo.png" alt="#" /></a>
            </div>
            <div class="right_topbar">
                <div class="icon_info">
                    <ul>
                    @guest
                    <li><a href="/registeruser">Register</a></li>
                    <li><a href="#"></a></li>
                     @endguest   
                    
                    
                    </ul>
                    <ul class="user_profile_dd">
                        <li>
                        @auth
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <img class="img-responsive rounded-circle" src="{{asset('assets')}}/admin2/images/layout_img/user_img.jpg" alt="#" />
                                <span class="name_user">{{Auth::user()->name}}</span>
                            </a>
                            @endauth

                            @guest
                                <span class="name_user" href="loginuser"><a href="loginuser">Login</a></span>
                            @endguest
                            @auth
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                <a class="dropdown-item" href="settings.html">Settings</a>
                                <a class="dropdown-item" href="help.html">Help</a>
                                <a class="dropdown-item" href="/logoutuser"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                            </div>
                            @endauth
                        
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>