@extends("layouts.frontbase")
@section('title','Messages List')
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
                    @guest<h2>You cannot view messages without logging in.</h2>@endguest
                    @auth<h2>Message List</h2>@endauth
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
            <th>Your Subject</th>
            <th>Admin's Answer</th>
            <th>Message Status</th>
            <th>Show</th>
            
        </tr>
    </thead>
    <tbody id="geeks">
        @foreach($data as $rs)
        @if($rs->user_id == auth()->id())
        <tr>
            <td>{{$rs->subject}}</td>
            <td>{{$rs->note}}</td>
            <td>{{$rs->status}}</td>
            <td><a href="message/show/{{$rs->id}}" class="btn btn-success btn-sm" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></td>
        </tr>
        @endif
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