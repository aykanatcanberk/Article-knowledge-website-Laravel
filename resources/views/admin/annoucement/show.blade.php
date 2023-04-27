@extends('layouts.adminbase')

@section('title','Show Annoucement:'.$data->title)
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Show Annoucement</h2>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                    <a href="/admin/annoucement/edit/{{$data->id}}" class="btn cur-p btn-primary">
                <button type="button" class="btn cur-p btn-primary" style="width: 140px;height:40px;">Edit</button>
                </a>
                    </div>
                    <div class="col-sm-3">
                    <a href="/admin/annoucemet/destroy/{{$data->id}}"
               onclick="return confirm('Are you sure for deleting?')">
                <button type="button" class="btn cur-p btn-danger" style="width: 150px; height:50px;">Delete</button>
                </a>
           </div>
        </section>

        </div><br>

        <div class="container-fluid">
            <div class="col-md-150">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Details Data</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                    <section class="content">

<div class="card">
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <tr>
                <th style="width: 200px">Id</th>
                <td>{{$data->id}}</td>
            </tr>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{$data->title}}</td>
            </tr>
            <tr>
                <th>Detail</th>
                <td>{!! $data->detail !!}</td>
            </tr>
            <th>Image</th>
            <td>     @if ($data->image)
                    <img src="{{Storage::url($data->image)}}" style="height: 100px">
                @endif</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{$data->status}}</td>
            </tr>
            <tr>
                <th >Created Date</th>
                <td>{{$data->created_at}}</td>
            </tr>
            <tr>
                <th >Update Date</th>
                <td>{{$data->updated_at}}</td>
            </tr>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection