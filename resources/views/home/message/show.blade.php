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
        <th>Your Subject</th>
        <td><span>{{$data->subject}}</span></td>
      </tr>
      <tr>
        <th>Your Message</th>
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
        <th>Admin's Answer</th>
        <td><span>{{$data->note}}</span></td>
      </tr>

    </thead>
  </table>
</div>
        </div>
    </div>

@endsection
