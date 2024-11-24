@extends('layouts.adminapp')

@section('content')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">


    <div class="mt-4  flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
                    <h2 class="text-gray-800 font-semibold text-lg">{{ __('Change Password') }}</h2>
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

                    <form method="POST" action="{{ route('master.password.update') }}">
                        @csrf

                        <div class="flex flex-col w-full my-5">
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}*</label>
                            <input id="name" type="text" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg @error('name') border-red-500 @enderror" name="name" value="{{ old('name', Auth::guard('web')->user()->name) }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Mobile Field -->
                        <div class="flex flex-col w-full my-5">
                            <label for="mobile" class="block text-sm font-medium text-gray-700">{{ __('Mobile') }}*</label>
                            <input id="mobile" type="tel" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg @error('mobile') border-red-500 @enderror" name="mobile" value="{{ old('mobile', Auth::guard('web')->user()->mobile) }}" readonly required autocomplete="mobile">
                            @error('mobile')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Current Password Field -->
                        <div class="flex flex-col w-full my-5">
                            <label for="current_password" class="block text-sm font-medium text-gray-700">{{ __('Current Password') }}*</label>
                            <input id="current_password" type="password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg @error('current_password') border-red-500 @enderror" name="current_password" required autocomplete="current-password">
                            @error('current_password')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- New Password Field -->
                        <div class="flex flex-col w-full my-5">
                            <label for="new_password" class="block text-sm font-medium text-gray-700">{{ __('New Password') }}*</label>
                            <input id="new_password" type="password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg @error('new_password') border-red-500 @enderror" name="new_password" required autocomplete="new-password">
                            @error('new_password')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Retype New Password Field -->
                        <div class="flex flex-col w-full my-5">
                            <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Retype New Password') }}*</label>
                            <input id="new_password_confirmation" type="password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg @error('new_password_confirmation') border-red-500 @enderror" name="new_password_confirmation" required autocomplete="new-password">
                            @error('new_password_confirmation')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="flex justify-end mt-5">
                            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg">
                                {{ __('Update Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection