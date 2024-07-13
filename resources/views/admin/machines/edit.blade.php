@extends('layouts.adminapp')

@section('content')

<div class="min-h-screen flex items-center justify-center">
    <form action="{{ route('machine.update') }}" method="post" enctype="multipart/form-data" class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        @csrf
        <h2 class="text-2xl font-bold mb-4 text-center">Add Machine</h2>
        <div class="show_message" id="show_message"></div>

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

        <input id="id" type="hidden" name="id" value="{{ $machines['id'] }}">

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}*</label>
            <input id="name" type="text" class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ $machines['name'] }}">
            @error('name')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Image') }}*</label>
            <input id="image" type="file" class="shadow appearance-none border @error('image') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" value="{{ asset('machine_images').'/'.$machines['image'] }}">
            @if($errors->has('parent_id'))
                <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('parent_id') }}</p>
            @endif
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Horse Power') }}*</label>
            <input id="horse_power" type="text" class="shadow appearance-none border @error('horse_power') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="horse_power" value="{{ $machines['horse_power'] }}">
            @if($errors->has('addhorsepower'))
                <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('addhorsepower') }}</p>
            @endif
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Status') }}*</label>
            <select class="shadow appearance-none border @error('status') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="status" id="status">
                <option value="" {{ $machines->status === null ? 'selected' : '' }}>Select Status</option>
                <option value="1" {{ $machines->status === 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $machines->status === 0 ? 'selected' : '' }}>Inactive</option>
            </select>
            @if($errors->has('status'))
                <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('status') }}</p>
            @endif
        </div>

        <div class="flex items-center justify-between">
            <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline closeaddbutton" onclick="closeModal();">Close</button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit</button>
        </div>
    </form>
</div>

<script type="text/javascript">
   
    function closeModal() {
        // Redirect to the roles page
        window.location.href = "{{ url('/raitan_admin/machines') }}"; // Adjust the route name as per your application
    }
    </script>
@endsection