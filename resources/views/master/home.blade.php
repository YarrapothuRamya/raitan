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
                  <br>
                  <a href="{{ url('agriculture_labour') }}" style="text-decoration: none; color: blue;">Agriculture Labour</a>
                  <br>
                  <a href="{{ url('repairsandservices') }}" style="text-decoration: none; color: blue;">Repairs and Services</a>
                  <br>
                  <a href="{{ url('sprayers') }}" style="text-decoration: none; color: blue;">Sprayers</a>
                  <br>
                  <a href="{{ url('admin_register') }}" style="text-decoration: none; color: blue;">Register Admin/Staff/Customer Care</a>
                  <br>
                  <a href="{{ url('approve_permissions') }}" style="text-decoration: none; color: blue;">Approve Permissions</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection