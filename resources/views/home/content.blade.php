@extends("layouts.frontbase")
@section('title','All Contents')
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2><a href="/">Home</a></h2>
            </div>
        </div>
    </div>
       
   
    <div class="row column3" style="width: 100%;height:100px">
        <!-- testimonial -->
        <div class="col-md-6" >
            <div class="dark_bg full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0">
                        <h2>All Contents</h2><br>
                        <b>Search for specific content: 
          <input id="gfg" type="text" 
                 placeholder="Search here">
        </b>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- end testimonial -->
    
    </div> <br>
    <div class="row column4 graph">
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
</head>
  
<body>
        <table>
            <br>
            <tr>
                <th>Image</th>
                <th>Category</th>
                <th>Title</th>
                <th>Upadated Time</th>

            </tr>
            <tbody id="geeks">
                @foreach ($content as $rs)
                <tr>
                    <td><img src="{{Storage::url($rs->image)}}" style="width:70px; height:70px" ></td>
                    <td>{{$rs->category->title}}</td>
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->updated_at}}</td>
                    <td><div class="center"><a class="main_bt read_bt" href="/contentdetail/{{$rs->id}}">Read More</a></div></td>
                </tr>
               @endforeach
            </tbody>
        </table>
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