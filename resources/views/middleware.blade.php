@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenue sur la page <strong>{{ strtoupper(Auth::user()->type) }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Liste des utilisateurs : <a href="{{ route('userList')}}">{{ url('/') }}/panelUtilisateurs</a><br>
                    Compétences Utilisateurs : <a href="{{ route('userSkills')}}">{{ url('/') }}/panelCompetencesUtilisateurs</a>

                    
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
