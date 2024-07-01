<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-gradient-to-br from-green-100 to-white">

    <!-- Navbar -->
    

    
    <!-- Main Content -->
    <!-- <div class="container mt-20">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('raitan_signin') }}">
                            @csrf
                            @if(count($errors) > 0)
                                @foreach($errors->all() as $message)
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        <span>{{ $message }}</span>
                                    </div>
                                @endforeach
                            @endif
                            <div class="row mb-3">
                                <label for="mobile"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mobile') }}*</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="tel"
                                        class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                        value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{-- $message --}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}*</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{-- $message --}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}*</label>

                                <div class="col-md-6">
                                    <select class="form-control select2 @error('role') is-invalid @enderror" name="role"
                                        id="role">
                                        <option value="">Select Role</option>
                                        <option value="1">Master</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Staff</option>
                                        <option value="4">Customer Care</option>
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{-- $message --}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit"
                                        class="action-btn w-full py-2 rounded-xl mt-2 flex items-center justify-center space-x-2">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                       
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body text-center">
                       
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container px-6 mx-auto">
        <div class="flex flex-col text-center md:text-left md:flex-row h-screen justify-evenly md:items-center">
            <div class="flex flex-col w-full">
                <div>
                    <svg class="w-20 h-20 mx-auto md:float-left fill-stroke text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                </div>
                <h1 class="text-5xl text-gray-800 font-bold">Client Area</h1>
                <p class="w-5/12 mx-auto md:mx-0 text-gray-500">Control and monitor your website data from the
                    dashboard.</p>
            </div>
            <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0">
                <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl">
                    <h2 class="text-2xl font-bold text-gray-800 text-left mb-5">Sign In</h2>
                    <form action="" class="w-full">
                        <div id="input" class="flex flex-col w-full my-5">
                            <label for="mobile" class="text-gray-500 mb-2">mobile*</label>
                            <input type="text" id="username" placeholder="Please enter your mobile number"
                                class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" />
                        </div>
                        <div id="input" class="flex flex-col w-full my-5">
                            <label for="password" class="text-gray-500 mb-2">Password*</label>
                            <input type="password" id="password" placeholder="Please enter your password"
                                class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" />
                        </div>
                        <div id="input" class="flex flex-col w-full my-5">
                            <label for="role" class="text-gray-500 mb-2">Role*</label>
                            <select id="role"
                                class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 text-gray-600 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg">
                                <option value="">Select Role</option>\
                                <option value="1">Master</option>
                                <option value="2">Admin</option>
                                <option value="3">Staff</option>
                                <option value="4">Customer Care</option>
                            </select>
                        </div>
                        <div id="button" class="flex flex-col w-full my-5">
                            <button type="button" class="w-full py-4 bg-green-600 rounded-lg text-green-100">
                                <div class="flex flex-row items-center justify-center">
                                    <div class="mr-2">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="font-bold">Sign In</div>
                                </div>
                            </button>
                            <div class="flex justify-evenly mt-5">
                                <a href="#" class="w-full text-center font-medium text-gray-500">Recover password!</a>
                                <a href="#" class="w-full text-center font-medium text-gray-500">Sign up!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>