@extends("layouts.frontbase")
@section('title','home')

@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Dashboard</h2>
            </div>
        </div>
    </div>
    
       
    </div>
   
    <div class="row column3">
        <!-- testimonial -->
        <div class="col-md-6">
            <div class="dark_bg full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2>Annoucements</h2>
                    </div>
                </div>
                <div class="full graph_revenue">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content testimonial">
                                <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item carousel-item active">
                                            <div class="img-box"><img src="{{asset('assets')}}/admin2/images/layout_img/user_img.jpg" alt=""></div>
                                            <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                            <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                        </div>
                                        <div class="item carousel-item">
                                            <div class="img-box"><img src="{{asset('assets')}}/admin2/images/layout_img/user_img.jpg" alt=""></div>
                                            <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                            <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                        </div>
                                        <div class="item carousel-item">
                                            <div class="img-box"><img src="{{asset('assets')}}/admin2/images/layout_img/user_img.jpg" alt=""></div>
                                            <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                            <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                        </div>
                                    </div>
                                    <!-- Carousel controls -->
                                    <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonial -->
        <!-- progress bar -->
        <div class="col-md-6">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2>Progress Bar</h2>
                    </div>
                </div>
                <div class="full progress_bar_inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="progress_bar">
                                <!-- Skill Bars -->
                                <span class="skill" style="width:73%;">Facebook <span class="info_valume">73%</span></span>
                                <div class="progress skill-bar ">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                                    </div>
                                </div>
                                <span class="skill" style="width:62%;">Twitter <span class="info_valume">62%</span></span>
                                <div class="progress skill-bar">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                    </div>
                                </div>
                                <span class="skill" style="width:54%;">Instagram <span class="info_valume">54%</span></span>
                                <div class="progress skill-bar">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                    </div>
                                </div>
                                <span class="skill" style="width:82%;">Google plus <span class="info_valume">82%</span></span>
                                <div class="progress skill-bar">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                                    </div>
                                </div>
                                <span class="skill" style="width:48%;">Other <span class="info_valume">48%</span></span>
                                <div class="progress skill-bar">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end progress bar -->
    </div>
    <div class="row column4 graph">
        <div class="col-md-6 margin_bottom_30">
            <div class="dash_blog">
                <div class="dash_blog_inner">
                    <div class="dash_head">
                        <h3><span><i class="fa fa-calendar"></i> 6 July 2018</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                    </div>
                    <div class="list_cont">
                        <p>Today Tasks for Ronney Jack</p>
                    </div>
                    <div class="task_list_main">
                        <ul class="task_list">
                            <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>10:00 AM</strong></li>
                            <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                            <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>11:00 AM</strong></li>
                            <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                            <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>02:00 PM</strong></li>
                        </ul>
                    </div>
                    <div class="read_more">
                        <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dash_blog">
                <div class="dash_blog_inner">
                    <div class="dash_head">
                        <h3><span><i class="fa fa-comments-o"></i> Updates</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                    </div>
                    <div class="list_cont">
                        <p>User confirmation</p>
                    </div>
                    <div class="msg_list_main">
                        <ul class="msg_list">
                            <li>
                                <span><img src="{{asset('assets')}}/admin2/images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                <span>
                                          <span class="name_user">Herman Beck</span>
                                          <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                            </li>
                            <li>
                                <span><img src="{{asset('assets')}}/admin2/images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">On the other hand, we denounce.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                            </li>
                            <li>
                                <span><img src="{{asset('assets')}}/admin2/images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                            </li>
                            <li>
                                <span><img src="{{asset('assets')}}/admin2/images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                <span>
                                          <span class="name_user">John Smith</span>
                                          <span class="msg_user">On the other hand, we denounce.</span>
                                          <span class="time_ago">12 min ago</span>
                                          </span>
                            </li>
                        </ul>
                    </div>
                    <div class="read_more">
                        <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection