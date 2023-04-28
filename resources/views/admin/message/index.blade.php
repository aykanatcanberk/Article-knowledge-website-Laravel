@extends('layouts.adminbase')
@section('title','Contact Form Messages List')
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Message List</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive-sm py-4">
            <div class="midde_cont">
                <div class="box">
                    <div class="box-body">

                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th></th>
                                <th style="width: 10px">Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>IP</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Delete</th>

                            </tr>
                            @foreach($data as $rs)
                            <tr>
                                    @if($rs->status == 'Read')
                                    <td><input type="checkbox" id="checkbox" name="checkbox" value="checkbox" checked></td>
                                     @else
                                    <td><input type="checkbox" id="checkbox" name="checkbox" value="checkbox"></td>
                                    @endif
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->ip}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-success btn-sm"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a>
                                    </td>


                                    <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-danger btn-sm"
                                           onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
