@extends('layouts.frontbase2')

@section('title','User Comments&Reviews')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Comment</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2></h2>
            </div>
            <div class="row">
                <div class="user-select-all">
                    <h5>User Profile</h5>
                    <hr>
                    <div class="col-lg-3 col-md-6">
                        @include('home.user.usermenu')
                    </div>
                </div>
                <div class="col-lg-10">
                    <h5></h5>
                    <hr>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Content Name</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th style="width: 40px">Delete</th>

                        </tr>
                        
                            <tr>
                                <td></td>
                                <td>
                                    <a href="{{route('content',['id'=>$rs->content_id])}}">{{$rs->content->title}}</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->status}}</td>

                                <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"
                                       class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <div>

    </div>
    <div>

    </div>
    <div>

    </div>
@endsection
