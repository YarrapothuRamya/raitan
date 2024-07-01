@extends('layouts.adminapp')

@section('content')
<div class="container mx-auto mt-20">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-800 text-white text-lg font-bold p-4 rounded-t-lg">Master Home</div>

                <div class="p-4">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>

                <div class="p-4">
                    <p>Welcome to master dashboard</p>
                    <br>
                    <ul class="list-none space-y-2">
                      <li><a href="{{ url('roles-home') }}" class="text-blue-600 hover:underline">Roles</a></li>
                      <li><a href="{{ url('machines') }}" class="text-blue-600 hover:underline">Machines</a></li>
                      <li><a href="{{ url('implementors') }}" class="text-blue-600 hover:underline">Implementors</a></li>
                      <li><a href="{{ url('agriculture_labour') }}" class="text-blue-600 hover:underline">Agriculture Labour</a></li>
                      <li><a href="{{ url('repairsandservices') }}" class="text-blue-600 hover:underline">Repairs and Services</a></li>
                      <li><a href="{{ url('sprayers') }}" class="text-blue-600 hover:underline">Sprayers</a></li>
                      <li><a href="{{ url('admin_register') }}" class="text-blue-600 hover:underline">Register Admin/Staff/Customer Care</a></li>
                      <li><a href="{{ url('approve_permissions') }}" class="text-blue-600 hover:underline">Approve Permissions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection