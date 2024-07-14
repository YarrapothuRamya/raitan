@extends('layouts.adminapp')

@section('content')


<div class="min-h-screen grid place-items-center">
        <form action="{{route('role.update')}}" method="post" class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
            @csrf
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

            <!-- <input type="hidden" name="_token" value="cS5PWrDOr2YhofJqxAkOfFA5pldbNUJzidOANnK9" autocomplete="off"> -->
            <h2 class="text-2xl font-bold mb-4 text-center">Edit Roles</h2>
            <div class="show_message" id="show_message"></div>
            <input id="id" type="hidden" class="form-control" name="id" value="{{ $roles_data->id }}">

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name*</label>
                <div>
                    <input id="name" type="text" class="form-control w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200" name="name"  value="{{ $roles_data->name }}">
                </div>
            </div>

            <div class="mb-4">
                <label for="add_parent_id" class="block text-gray-700 font-bold mb-2">{{ __('Edit Parent') }}*</label>
                <div>
                <select class="form-control w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                        <option value="0">Select Parent Name</option>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}"{{ $role->id == $roles_data->parent_id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                        
                    </select>
                    @if($errors->has('parent_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('parent_id') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="mb-4">
                <label for="addstatus" class="block text-gray-700 font-bold mb-2">Status*</label>
                <div>
                <select class="form-control w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-200" name="status" id="status">
                <option value="" {{ $roles_data->status === null ? 'selected' : '' }}>Select Status</option>
                            <option value="1" {{ $roles_data->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $roles_data->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    
                </div>
            </div>

           

            <div class="flex justify-end space-x-2">
                <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded closeaddbutton" onclick="closeModal();" >Close</button>
                <button type="submit" onclick="updateRole();" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" >Update</button>
            </div>
        </form>
    </div>
<script type="text/javascript">
   
    function closeModal() {
        // Redirect to the roles page
        window.location.href = "{{ url('/raitan_admin/roles-home') }}"; // Adjust the route name as per your application
    }
    </script>
@endsection