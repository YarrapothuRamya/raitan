@extends('layouts.adminapp')

@section('content')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">


<div class="mt-24  flex justify-center col-sm-6">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
                <h2 class="text-gray-800 font-semibold text-lg">{{ __('Add KYC Status') }}</h2>
            </div>

            <div class="p-6">
                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('master.kycstatus.store') }}">
                    @csrf

                    <div class="flex flex-col w-full my-5">
                        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Status Name') }}*</label>
                        <input id="status" type="text" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg  @error('name') border-red-500 @enderror" name="status" value="{{ old('status') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    

                    <div class="flex flex-col w-full my-5">
                        <button type="submit" class="w-full py-4 bg-green-600 rounded-lg text-green-100">
                            {{ __('submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>
@endsection
