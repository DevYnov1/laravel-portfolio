@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="POST" action="{{ route('user.update', $user->id)}}">
                <table id="table" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{$user -> id}}</th>
                            <th><input type="text" clas="form-control" name="name" value="{{$user -> name}}"></input></th>
                            <th><input type="text" clas="form-control" name="firstname" value="{{$user -> firstname}}"></input></th>
                            <th><input type="text" clas="form-control" name="lastname" value="{{$user -> lastname}}"></input></th>
                            <th><input type="text" clas="form-control" name="email" value="{{$user -> email}}"></input></th>
                            <th><input type="text" clas="form-control" name="type" value="{{$user -> type}}"></input></th>
                            <th><a href=" {{ route('editProfile', '$user->id') }}"  class=" btn btn-success">Edit</a>
                            <button type="button" class="delete-modal btn btn-danger" data-info="{{$user -> id}},{{$user -> name}},{{$user -> firstname}},{{$user -> lastname}},{{$user -> email}},{{$user -> type}}">X</button></th>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection