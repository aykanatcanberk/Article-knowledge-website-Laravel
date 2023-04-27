@extends('layouts.adminbase')

@section('title','Content List')
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
  }
</style>
@endsection
@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Content List</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive-sm py-4">
            <div class="midde_cont">
                <div class="box">
                    <div class="box-header">


                        <a href="{{route('admin.content.create')}}" class="btn btn-block btn-primary btn-sm"
                           style="width: 150px"><h5 class="box-title" style="color: white"> Add Content</h5>
                        </a>
                    </div><!-- /.box-header -->
                    <br>
                    <div class="box-body">
                        <b>Search for specific: 
                                <input id="gfg" type="text" 
                                placeholder="Search here">
                        </b> <br>

                        <table class="table table-bordered"> <br>
                        <tbody id="geeks">
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Image Gallery</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>

                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif

                                    </td>

                                    <td> <a href="{{route('admin.image.index',['cid'=>$rs->id])}}"
                                            onclick="return !window.open(this.href, '','top=50 left=0 width=1000,height=400')">
                                            <img src="{{asset('assets')}}/admin2/images/imagesgallery.png" style="height: 40px">
                                        </a>
                                    </td>
                                    

                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-primary btn-sm">Edit</a></td>
                                    <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}"
                                           class="btn btn-block btn-danger btn-sm"
                                           onclick="return confirm('Are you sure for deleting?')">Delete</a></td>
                                    <td><a href="{{route('admin.content.show',['id'=>$rs->id])}}"
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
@section('foot')
<script>
            $(document).ready(function() {
                $("#gfg").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#geeks tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
@endsection