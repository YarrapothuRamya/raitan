@extends('layouts.adminapp')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    @foreach($services as $servicess)
    <form action="{{ route('master.service.update', $servicess->id) }}" method="post" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        @csrf

        <div id="show_message1" class="mb-4"></div>

        <h2 class="text-2xl font-bold mb-6 text-center">Update Services</h2>
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
        <input id="id" type="hidden" name="id" value="{{ $servicess['id'] }}">

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}*</label>
            <input id="name" type="text" class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="service_name" value="{{ old('service_name', $servicess->service_name) }}">
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Image') }}</label>
            <input id="image" type="file" onchange="preview()" class="shadow appearance-none border @error('image') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" value="{{ asset('repairsandservices_images').'/'.$servicess['image'] }}">
            <!-- <img id="frame" src="" width="100px" class="mt-2" /> -->
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Description') }}*</label>
            <input id="description1" type="text" class="shadow appearance-none border @error('description') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" value="{{ old('description', $servicess['description']) }}">
        </div>

        <div class="mb-4">
            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Status') }}*</label>
            <select class="shadow appearance-none border @error('status') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="status" id="status">
                <option value="">Select Status</option>
                <option value="1" {{ old('status', (string) $servicess->status) === '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status', (string) $servicess->status) === '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>




        <div class="mt-4 flex justify-between">
            <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline closebutton" onclick="closeModal();" data-dismiss="modal">Close</button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
        </div>
    </form>
    @endforeach
</div>

<script>
    function preview() {}
</script>
<script type="text/javascript">
    function closeModal() {
        // Redirect to the roles page
        window.location.href = "{{ url('/raitan_admin/servicess') }}"; // Adjust the route name as per your application
    }
</script>
@endsection