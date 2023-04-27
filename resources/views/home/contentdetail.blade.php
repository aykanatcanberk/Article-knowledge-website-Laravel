@extends("layouts.frontbase")
@section('title','Content Detail')
-
@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2><a href="/">Home/ </a><a href="/">Content</a><a href="">/ {{$data->category->title}}</a><a href="">/ {{$data->title}}</a></h2>
            </div>
        </div>
    </div>
       
   
    <div class="row column4 graph">
                        <!-- Gallery section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>{{$data->title}}</h2>
                                 </div>
                              </div>
                              <div class="full gallery_section_inner padding_infor_info">
                                 <div class="row">
                                    
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="{{Storage::url($data->image)}}" ><img class="img-responsive" src="{{Storage::url($data->image)}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4></h4>
                                       </div>
                                       
                                    </div>
                                    <div class="full inner_elements">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="tab_style1">
                                          <div class="tabbar padding_infor_info">
                                      
                                             <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                   <p>{{$data->detail}}
                                                   </p>
                                                </div>
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                
                     
    </div>


@endsection
