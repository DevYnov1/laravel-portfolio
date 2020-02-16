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
                @foreach(App\User::all() as $users)
                    <tr>
                        <th>{{$users -> id}}</th>
                        <th>{{$users -> name}}</th>
                        <th>{{$users -> firstname}}</th>
                        <th>{{$users -> lastname}}</th>
                        <th>{{$users -> email}}</th>
                        <th>{{$users -> type}}</th>
                        <th><button type="button" class="edit-modal btn btn-success" data-info="{{$users -> id}},{{$users -> name}},{{$users -> firstname}},{{$users -> lastname}},{{$users -> email}},{{$users -> type}}">Edit</button>
                        <button type="button" class="delete-modal btn btn-danger" data-info="{{$users -> id}},{{$users -> name}},{{$users -> firstname}},{{$users -> lastname}},{{$users -> email}},{{$users -> type}}">X</button></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
