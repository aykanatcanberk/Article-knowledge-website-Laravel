<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('assets')}}/admin2/images/logo/logo_icon.png" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="{{asset('assets')}}/admin2/images/layout_img/user_img.jpg" alt="#" /></div>
                <div class="user_info">
                    <h6>@Auth{{Auth::user()->name}}@endauth

                    </h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>User</span></a>
                <ul class="collapse list-unstyled" id="dashboard">
                    @auth 
                    <li>
                        <a href="/userpanel">User Panel<span></span></a>
                    </li>
                    @endauth
                    @guest
                    <li>
                        <a href="/userpanel">You can see user transactions by logging in.<span></span></a>
                    </li>
                    @endguest
                </ul>
            </li>

            <li><a href="/content"><i class="fa fa-diamond purple_color"></i> <span>All Contents</span></a></li>
            <li><a href="/announce"><i class="fa fa-diamond purple_color"></i> <span>All Announces</span></a></li>
            <li><a href="/contact" ><i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a></li>
            <li><a href="/message" ><i class="fa fa-paper-plane green_color"></i> <span>Messages</span></a></li>
        </ul>
    </div>
</nav>