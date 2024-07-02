@extends('layouts.adminapp')

@section('content')
<div class="container mx-auto mt-20">
    <div class="flex justify-evenly ml-3">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-800 text-white text-lg font-bold p-4 rounded-t-lg">Master Home</div>

                <div class="p-4">
                    @if (session('status'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
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
                        <li><a href="{{ url('implementors') }}" class="text-blue-600 hover:underline">Implementors</a>
                        </li>
                        <li><a href="{{ url('agriculture_labour') }}" class="text-blue-600 hover:underline">Agriculture
                                Labour</a></li>
                        <li><a href="{{ url('repairsandservices') }}" class="text-blue-600 hover:underline">Repairs and
                                Services</a></li>
                        <li><a href="{{ url('sprayers') }}" class="text-blue-600 hover:underline">Sprayers</a></li>
                        <li><a href="{{ url('admin_register') }}" class="text-blue-600 hover:underline">Register
                                Admin/Staff/Customer Care</a></li>
                        <li><a href="{{ url('approve_permissions') }}" class="text-blue-600 hover:underline">Approve
                                Permissions</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full max-w-2xl mx-auto">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-100 p-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div class="text-lg font-medium">Roles</div>
                        <button type="button" class="btn btn-primary roleadd bg-blue-500 text-white px-4 py-2 rounded"
                            data-toggle="modal" data-target="#roleModal">Add Role</button>
                    </div>
                </div>

                <!-- <div class="p-4">
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        Sample success message Lorem ipsum dolor sit amet.
                    </div>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        Sample error message Lorem ipsum dolor sit amet.
                    </div>
                </div> -->

                <div class="p-4">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border px-4 py-2">#</th>
                                <th class="border px-4 py-2">Role Name</th>
                                <th class="border px-4 py-2">Role ID</th>
                                <th class="border px-4 py-2">Parent Name</th>
                                <th class="border px-4 py-2">Status</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">Admin</td>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">-</td>
                                <td class="border px-4 py-2 text-green-600">Active</td>
                                <td class="border px-4 py-2">
                                    <button type="button"
                                        class="btn btn-info hover:hover:bg-[#50b500] hover:shadow-lg roleedit bg-blue-500 text-white px-4 py-2 rounded"
                                        data-toggle="modal" data-target="#roleModal" data-id="1" data-name="Admin"
                                        data-status="1" data-parent-id="0">Edit</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-100">
                                <td class="border px-4 py-2">2</td>
                                <td class="border px-4 py-2">User</td>
                                <td class="border px-4 py-2">2</td>
                                <td class="border px-4 py-2">Admin</td>
                                <td class="border px-4 py-2 text-red-600">Inactive</td>
                                <td class="border px-4 py-2">
                                    <button type="button"
                                        class="btn btn-primary roleedit bg-blue-500 text-white px-4 py-2 rounded"
                                        data-toggle="modal" data-target="#roleModal" data-id="2" data-name="User"
                                        data-status="0" data-parent-id="1">Edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection