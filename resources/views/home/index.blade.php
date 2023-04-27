@extends("layouts.frontbase")
@section('title','home')

@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2><a href="/">Home</a></h2>
            </div>
        </div>
    </div>
    
       
    </div>
   
    <div class="row column3"  style="width: 100%;">
        <!-- testimonial -->
        <div class="col-md-6" >
            <div class="dark_bg full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2><a class="" style="color:white" href="/announce">Annoucements</a></h2>
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
                                            <div class="img-box"><img src="{{asset('assets')}}/admin2/images/layout_img/annoucement.png" alt=""></div>
                                            <p class="testimonial">You can use the control keys to see some announcements dynamically.</p>
                                            <p class="overview"><b></b>Admin</p>
                                        </div>

                                        @foreach ($sliderdata as $rs) 
                                        <div class="item carousel-item">
                                            <div class="img-box"><img src="{{Storage::url($rs->image)}}" alt=""></div>
                                            <p class="testimonial">{{$rs->detail}}</p>
                                            <p class="overview"><b>{{$rs->title}}</b>Admin</p>
                                        </div>
                                        @endforeach  
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
    
    </div>
    <div class="row column4 graph">
        <div class="col-md-6 margin_bottom_30"  style="width: 100%;">
            <div class="dash_blog">
                <div class="dash_blog_inner">
                    <div class="dash_head">
                        <h3><span><i class="fa fa-comments-o"></i> Let's Check Our Contents!</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                    </div>
                    <div class="msg_list_main">
                        <ul class="msg_list">
                        @foreach($contentlist as $rs)
                            <li>
                        
                                <span><img src="{{Storage::url($rs->image)}}" class="img-responsive" width="100px" height="100px" alt="#" /></span>
                                <span>
                                          
                                          <span class="msg_user">{{$rs->title}}</span>
                                          <span class="time_ago">{{$rs->updated_at}}</span>
                                          </span>
                            </li>
                        @endforeach
                            
                        </ul>
                    </div>
                    <div class="read_more">
                        <div class="center"><a class="main_bt read_bt" href="/content">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection