@extends('layouts.adminbase')

@section('title','Annoucements')
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Annoucement List</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive-sm py-4">
            <div class="midde_cont">
                <div class="box">
                    <div class="box-header">


                        <a href="{{route('admin.annoucement.create')}}" class="btn btn-block btn-primary btn-sm"
                           style="width: 170px"><h5 class="box-title" style="color: white"> Add Annoucement</h5></a>
                    </div><!-- /.box-header -->
                    <div class="box-body"> <br>

                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>

                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif

                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.annoucement.edit',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-primary btn-sm">Edit</a></td>
                                    <td><a href="{{route('admin.annoucement.destroy',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-danger btn-sm"
                                           onclick="return confirm('Are you sure for deleting?')">Delete</a></td>
                                    <td><a href="{{route('admin.annoucement.show',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-success btn-sm">Show</a></td>
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