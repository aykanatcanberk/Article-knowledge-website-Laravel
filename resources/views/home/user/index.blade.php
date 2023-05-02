@extends('layouts.frontbase')

@section('title','User Panel')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Panel</h2>
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
                    @include('profile.show')
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    
@endsection
