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
                    <h6>Name</h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>IBP</span></a>
                <ul class="collapse list-unstyled" id="dashboard">
                    <li>
                        <a href="dashboard.html">> <span></span></a>
                    </li>
                    <li>
                        <a href="dashboard_2.html">> <span></span></a>
                    </li>
                </ul>
            </li>

            <li><a href="/admin/category"><i class="fa fa-clock-o orange_color"></i> <span>Categories</span></a></li>
            <li><a href="/admin/content"><i class="fa fa-diamond purple_color"></i> <span>Content</span></a></li>
            <li><a href="/admin/messages" ><i class="fa fa-paper-plane red_color"></i> <span>Messages</span></a></li>
            <li><a href="/admin/user"><i class="fa fa-clock-o orange_color"></i> <span>Users</span></a></li>
            <li>
                <a href="/admin/annoucement">
                    <i class="fa fa-paper-plane red_color"></i> <span>Annoucement</span></a>
            </li>
        </ul>
    </div>
</nav>