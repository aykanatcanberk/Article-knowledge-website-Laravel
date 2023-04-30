@extends('layouts.adminwindow')

@section('title','User Detail:'.$data->title)
@section('content')
    <div class="table-responsive-sm py-4">
        <div class="midde_cont">
            <div class="heading1 margin_0">
                <h2>Detail User Data</h2>
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
                    <th>Email</th>
                    <td>{{$data->email}}</td>

                </tr>

                <tr>
                    <th>Roles</th>
                    <td>
                        @foreach($data->roles as $role)
                            {{$role->name}}
                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                               class="" style="color:red;"
                               onclick="return confirm('Are you sure to delete?')">[x]</a>

                        @endforeach
                    </td>
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
                    <th>Add Role to User</th>
                    <td>
                        <form action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                            @csrf
                            <select name="role_id">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </div>
                        </form>
                    </td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
