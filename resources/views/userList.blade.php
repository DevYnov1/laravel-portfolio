@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                @foreach(App\User::all() as $user)
                    <tr>
                        <th>{{$user -> id}}</th>
                        <th>{{$user -> name}}</th>
                        <th>{{$user -> firstname}}</th>
                        <th>{{$user -> lastname}}</th>
                        <th>{{$user -> email}}</th>
                        <th>{{$user -> type}}</th>
                        <th><a href=" {{ route('editProfile', $user -> id) }}"  class="btn btn-success">Edit</a>
                        <a href="{{ route('delete', $user->id) }}" class="delete-modal btn btn-danger">X</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection