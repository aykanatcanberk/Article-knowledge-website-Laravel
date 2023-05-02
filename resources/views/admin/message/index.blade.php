@extends('layouts.adminbase')
@section('title','Contact Form Messages List')
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
                        <h2>Message List</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive-sm py-4">
            <div class="midde_cont">
            <div class="row">
                <div class="col-md-6">
                    <b>Search for specific: 
                        <input id="gfg" type="text" placeholder="Search here" class="form-control">
                     </b>
                </div>
             </div><br>
                <div class="box">

                      <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>User Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>IP</th>
                <th>Subject</th>
                <th>Status</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="geeks">
            @foreach($data as $rs)
            <tr>
                @if($rs->status == 'Read')
                <td><input type="checkbox" id="checkbox" name="checkbox" value="checkbox" checked></td>
                @else
                <td><input type="checkbox" id="checkbox" name="checkbox" value="checkbox"></td>
                @endif
                <td>{{$rs->user_id}}</td>
                <td>{{$rs->name}}</td>
                <td>{{$rs->phone}}
                <td>{{$rs->email}}</td>
                <td>{{$rs->ip}}</td>
                <td>{{$rs->subject}}</td>
                <td>{{$rs->status}}</td>
                <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>
                <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
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