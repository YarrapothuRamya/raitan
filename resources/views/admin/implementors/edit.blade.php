@extends('layouts.adminapp')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <form action="{{ route('implementor.update') }}" method="post" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div id="show_message" class="mb-4"></div>

        <h2 class="text-2xl font-bold mb-6 text-center">Edit Implementor</h2>
        <div class="card-body mb-4">
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('status') }}</span>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif
        </div>

        <input id="id" type="hidden" name="id" value="{{ $implementors['id'] }}">

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}*</label>
            <input id="addname" type="text" class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ $implementors['name'] }}">
            @error('name')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Machine Type') }}*</label>
            <select class="shadow appearance-none border @error('status') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="machine_id" id="add_machine_id">
                <option value="0">Select Parent Name</option>
                @foreach($machines as $machine)
                    <option value="{{ $machine->id }}" {{ $machine->id == $implementors->machine_id ? 'selected' : '' }}>{{ $machine->name }}</option>
                @endforeach
            </select>
            @if($errors->has('parent_id'))
                <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('parent_id') }}</p>
            @endif
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Image') }}*</label>
            <input id="addimage" type="file" class="shadow appearance-none border @error('addimage') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" value="{{ asset('implementor_images').'/'.$implementors['image'] }}">
            @if($errors->has('parent_id'))
                <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('parent_id') }}</p>
            @endif
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Status') }}*</label>
            <select class="shadow appearance-none border @error('status') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="status" id="addstatus">
                <option value="" {{ $implementors->status === null ? 'selected' : '' }}>Select Status</option>
                <option value="1" {{ $implementors->status === 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $implementors->status === 0 ? 'selected' : '' }}>Inactive</option>
            </select>
            @if($errors->has('status'))
                <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('role_id') }}</p>
            @endif
        </div>

        

        <div class="mt-4">
            <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline closeaddbutton" onclick="closeModal();" data-dismiss="modal">Close</button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">update</button>
        </div>
    </form>
</div>


<script type="text/javascript">
   
    function closeModal() {
        // Redirect to the roles page
        window.location.href = "{{ url('/raitan_admin/implementors') }}"; // Adjust the route name as per your application
    }
    </script>
@endsection