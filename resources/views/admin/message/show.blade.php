@extends('layouts.adminwindow')
@section('title','Show Message:'.$data->subject)
@section('content')
    <div class="table-responsive-sm py-4">
        <div class="midde_cont">
            <div class="heading1 margin_0">
                <h2>Detail Message Data</h2>
            </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>

                <tr>
                    <th>Name & Surname</th>
                    <td>{{$data->name}}</td>
                </tr>

                <tr>
                    <th>Phone Number</th>
                    <td>{{$data->phone}}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{$data->email}}</td>

                </tr>

                <tr>
                    <th>Subject</th>
                    <td>{{$data->subject }}</td>
                </tr>

                <tr>
                    <th>Message</th>
                    <td>{{$data->message}}</td>
                </tr>

                <tr>
                    <th>IP number</th>
                    <td>{{$data->ip}}</td>

                </tr>

                <tr>
                    <th>Status</th>
                    <td>{{$data->status}}</td>

                </tr>

                <tr>
                    <th>Created Date</th>
                    <td>{{$data->created_at}}</td>
                </tr>

                <tr>
                    <th>Updated Date</th>
                    <td>{{$data->updated_at}}</td>
                </tr>

                <tr>
                    <th>Admin Note</th>
                    <td>
                        <form action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <textarea cols="50" id="note" name="note" style="float: left;">
                                    {{$data->note}}
                            </textarea>

                            <div class="card-footer" style="text-align: right;">
                            <button type="submit" class="btn btn-primary">Updated Note</button>
                            </div>
                        </form>
                    </td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
