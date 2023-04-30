@extends('layouts.adminbase')

@section('title','Show Category:'.$data->title)
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Show Category</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <a href="/admin/category/edit/{{$data->id}}" class="btn cur-p btn-primary">
                <button type="button" class="btn cur-p btn-primary" style="width: 150px " >Edit</button> 
            </a>
        </div><br>

        <div class="col-sm-3">

            <a href="/admin/category/destroy/{{$data->id}}"
               onclick="return confirm('Are you sure for deleting?')">
                <button type="button" class="btn cur-p btn-danger" style="width: 170px">Delete</button> 
            </a>
        </div> <br>

        <div class="container-fluid">
            <div class="col-md-150">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Details</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->keywords}}</td>
                                    <td> 
                                        @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td>{{$data->status}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
@endsection