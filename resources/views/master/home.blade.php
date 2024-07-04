@extends('layouts.adminapp')

@section('content')

<!-- <div class="p-4">
    <p>Welcome to master dashboard</p>
    <br>
    <ul class="list-none space-y-2">
        <li><a href="{{ url('/raitan_admin/roles-home') }}" class="text-blue-600 hover:underline">Roles</a></li>
        <li><a href="{{ url('/raitan_admin/machines') }}" class="text-blue-600 hover:underline">Machines</a></li>
        <li><a href="{{ url('/raitan_admin/implementors') }}" class="text-blue-600 hover:underline">Implementors</a>
        </li>
        <li><a href="{{ url('/raitan_admin/agriculture_labour') }}" class="text-blue-600 hover:underline">Agriculture
                Labour</a></li>
        <li><a href="{{ url('/raitan_admin/repairsandservices') }}" class="text-blue-600 hover:underline">Repairs and
                Services</a></li>
        <li><a href="{{ url('/raitan_admin/sprayers') }}" class="text-blue-600 hover:underline">Sprayers</a></li>
        <li><a href="{{ url('/raitan_admin/admin_register') }}" class="text-blue-600 hover:underline">Register
                Admin/Staff/Customer Care</a></li>
        <li><a href="{{ url('/raitan_admin/approve_permissions') }}" class="text-blue-600 hover:underline">Approve
                Permissions</a></li>
    </ul>
</div> -->



<div class="h-full ml-14 mt-14 mb-10 md:ml-64">

    <!-- Statistics Cards -->





    <div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Roles</h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <button
                        class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button">Add Role</button>
                </div>
            </div>
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Role Name</th>
                            <th class="px-4 py-3">Role ID</th>
                            <th class="px-4 py-3">Parent Name</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <tr
                            class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">Administrator</td>
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3">-</td>
                            <td class="px-4 py-3">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Active</span>
                            </td>
                            <td class="px-4 py-3">
                                <button class="px-2 py-1 bg-blue-500 text-white rounded-md">Edit</button>
                                <button class="px-2 py-1 bg-red-500 text-white rounded-md ml-2">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <!-- Pagination and other controls -->
        </div>
    </div>





</div>
@endsection