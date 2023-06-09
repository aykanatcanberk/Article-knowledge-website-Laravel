@extends('layouts.adminwindow')
@section('title','Show Message:'.$data->subject)
@section('head')
<style>
@media screen and (max-width: 767px) {
  .table-responsive {
    overflow-x: auto;
  }
  .table-responsive table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    border-collapse: collapse;
  }
  .table-responsive table td,
  .table-responsive table th {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}
</style>
@endsection
@section('content')
    <div class="table-responsive-sm py-4">
        <div class="midde_cont">
            <div class="heading1 margin_0">
                <h2>Detail Message Data</h2>
            </div>
            <div class="table-responsive">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name & Surname</th>
        <td><span>{{$data->name}}</span></td>
      </tr>
      <tr>
        <th>Phone Number</th>
        <td><span>{{$data->phone}}</span></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><span>{{$data->email}}</span></td>
      </tr>
      <tr>
        <th>Subject</th>
        <td><span>{{$data->subject}}</span></td>
      </tr>
      <tr>
        <th>Message</th>
        <td><span>{{$data->message}}</span></td>
      </tr>
      <tr>
        <th>Sending Date</th>
        <td><span>{{$data->created_at}}</span></td>
      </tr>
      <tr>
        <th>Updated Date</th>
        <td><span>{{$data->updated_at}}</span></td>
      </tr>
      <tr>
        <th>Reply</th>
        <td>
          <form action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
            @csrf
            <textarea cols="50" id="note" name="note" style="float: left;">
                {{$data->note}}
            </textarea>
            <div class="card-footer" style="text-align: right;">
              <button type="submit" class="btn btn-primary">Answer</button>
            </div>
          </form>
        </td>
      </tr>
    </thead>
  </table>
</div>
        </div>
    </div>

@endsection
