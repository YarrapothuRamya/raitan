@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Master Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                          {{ session('error') }}
                        </div>
                    @endif

                    
                </div>

                <div class="card-body">
                  Welcome to master dashboard

                  <br><br>
                  <a href="{{ url('roles-home') }}" style="text-decoration: none; color: blue;">Roles</a>
                  <br>
                  <a href="{{ url('machines') }}" style="text-decoration: none; color: blue;">Machines</a>
                  <br>
                  <a href="{{ url('implementors') }}" style="text-decoration: none; color: blue;">Implementors</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection