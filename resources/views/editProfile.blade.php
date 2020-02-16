@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form method="POST" action="{{ route('user.update', $user->id)}}">
            @method("PATCH")
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
                            <th><button type="submit" class=" btn btn-success">Save</button>
                        </tr>
                    </tbody>
                </table>
            </form>

            <form method="POST" action="{{ route('updateSkills', $user->id)}}">
            @method("PATCH")
                <table id="table" class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($user->skills as $skills)

                        <tr>
                            <th> {{$skills -> id}}</th>
                            <th>{{$skills -> name}}</th>
                            <th><input type="text" clas="form-control" name="firstname" value="{{$skills->pivot -> level}}"></input></th>
                            <th><button type="submit" class=" btn btn-success">Save</button>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection