@extends('layouts.adminapp')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
    <form action="{{ route('master.service.store') }}" method="post" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        @csrf

        <div id="show_message1" class="mb-4"></div>

        <h2 class="text-2xl font-bold mb-6 text-center">Add Service</h2>
        <div class="card-body mb-4">
            @if (session('success'))
            <div id="success-message" class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if ($errors->any())
            <div id="error-messages" class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('status') }}</span>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif -->
        </div>
        <input id="id" type="hidden" name="id" value="">

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Name') }}*</label>
            <input required id="service_name" type="text" class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="service_name" value="{{old('service_name')}}">
            <!-- @error('service_name')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror -->
        </div>

        <div class="mb-4">
            <label for="addimage" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Image') }}</label>
            <input required id="image" type="file" onchange="preview()" class="shadow appearance-none border @error('addimage') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" value="">
            <img id="frame" src="" width="100px" class="mt-2" />
            @error('image')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Description') }}*</label>
            <input id="description1" type="text" class="shadow appearance-none border @error('adddescription') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" value="{{old('description')}}">
            <!-- @error('description')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror -->
        </div>

        <div class="mb-4">
            <label for="addstatus" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Status') }}*</label>
            <select required class="shadow appearance-none border @error('addstatus') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="status" id="status">
                <option value="">Select Status</option>
                <option value="1" {{ old('status', $service->status ?? '') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status', $service->status ?? '') == '0' ? 'selected' : '' }}>Inactive</option>

            </select>
            <!-- @if($errors->has('addstatus'))
            <p class="text-red-500 text-xs italic mt-2">{{ $errors->first('addstatus') }}</p>
            @endif -->
        </div>




        <div class="mt-4 flex justify-between">
            <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline closebutton" onclick="closeModal();" data-dismiss="modal">Close</button>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add</button>
        </div>
    </form>
</div>

<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
<script type="text/javascript">
    function closeModal() {
        // Redirect to the roles page
        window.location.href = "{{ url('/raitan_admin/service') }}"; // Adjust the route name as per your application
    }
</script>
@endsection