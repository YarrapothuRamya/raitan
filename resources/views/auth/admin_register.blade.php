@extends('layouts.adminapp')

@section('content')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">


<div class="mt-4  flex justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-gray-200 px-6 py-4 rounded-t-lg">
                <h2 class="text-gray-800 font-semibold text-lg">{{ __('Register') }}</h2>
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

                <form method="POST" action="{{ route('admin_register') }}">
                    @csrf

                    <div class="flex flex-col w-full my-5">
                        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}*</label>
                        <input id="name" type="text" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg  @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col w-full my-5">
                        <label for="mobile" class="block text-sm font-medium text-gray-700">{{ __('Mobile') }}*</label>
                        <input id="mobile" type="tel" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg  @error('mobile') border-red-500 @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
                        @error('mobile')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col w-full my-5">
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                        <input id="email" type="email" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg  @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                        @error('email')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col w-full my-5">
                        <label for="role_id" class="block text-sm font-medium text-gray-700">{{ __('Role') }}*</label>
                        <select class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg  @error('role_id') border-red-500 @enderror" name="role_id" id="role_id" required>
                            <option value="">Select Role</option>
                            @foreach($roles as $key => $value)
                                <option value="{{ $value->role_id }}" {{ old('role_id') == $value ? 'selected' : '' }}>{{ $value->name }}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col w-full my-5 hidden">
                        <label for="status" class="block text-sm font-medium text-gray-700">{{ __('Status') }}*</label>
                        <input id="status" value="1" type="number" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg  @error('status') border-red-500 @enderror" name="status" required autocomplete="status">
                    </div>

                    <div class="flex flex-col w-full my-5">
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}*</label>
                        <input id="password" type="password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg  @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex flex-col w-full my-5">
                        <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}*</label>
                        <input id="password-confirm" type="password" class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg " name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-col w-full my-5">
                        <button type="submit" class="w-full py-4 bg-green-600 rounded-lg text-green-100">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- <div class="container mt-20">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                          {{ session('error') }}
                        </div>
                    @endif

                    
                </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('admin_register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}*</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}*</label>

                            <div class="col-md-6">
                                <select class="form-control select2 {{ $errors->has('role_id') ? 'is-invalid' : '' }}" name="role_id" id="role_id" required>
                                    <option value="">Select Role</option>
                                    @foreach($roles as $key => $value)
                                        <option value="{{ $value->role_id }}" {{ old('role_id') == $value ? 'selected' : '' }}>{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('role_id'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('role_id') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3 d-none">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}*</label>

                            <div class="col-md-6">
                                <input id="status" value="1" type="number" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}*</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="action-btn w-full py-2 rounded-xl mt-2 flex items-center justify-center space-x-2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body text-center">
                    <span>Already registered? Please <a
                                        href="{{ route('raitan_signin') }}"
                                        class="rounded-md text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a></span>
                
            </div>
        </div>
    </div>
</div> -->
</div>
@endsection
