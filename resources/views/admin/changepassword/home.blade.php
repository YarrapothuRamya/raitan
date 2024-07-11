@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto mt-20 px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-100 px-6 py-4 border-b rounded-t-lg text-lg font-semibold">
                    Change Password
                </div>

                
                    @if (session('status'))
                    <div class="px-6 py-4">
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                        </div>
                    @endif
                    @if (session('error'))
                    <div class="px-6 py-4">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            {{ session('error') }}
                        </div>
                        </div>
                    @endif
                

                <div class="px-6 py-4">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-red-500 mb-2">:message</div>')) !!}
                    @endif
                    @if(Session::get('error') && Session::get('error') != null)
                        <div class="text-red-500 mb-2">{{ Session::get('error') }}</div>
                        @php
                            Session::put('error', null)
                        @endphp
                    @endif
                    @if(Session::get('success') && Session::get('success') != null)
                        <div class="text-green-500 mb-2">{{ Session::get('success') }}</div>
                        @php
                            Session::put('success', null)
                        @endphp
                    @endif
                    <form class="form" action="{{ route('change.password') }}" method="post">
                        @csrf
                        <div class="flex flex-col w-full mb-4">
                            <label for="new_password" class="text-gray-700 mb-2">New Password*</label>
                            <input type="password" class="appearance-none border-2 border-gray-300 rounded-lg px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" id="new_password" name="new_password">
                        </div>
                        <div class="flex flex-col w-full mb-4">
                            <label for="new_password_confirmation" class="text-gray-700 mb-2">Confirm New Password*</label>
                            <input type="password" class="appearance-none border-2 border-gray-300 rounded-lg px-4 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg" id="new_password_confirmation" name="new_password_confirmation">
                        </div>
                        <button type="submit" class="w-full py-3 bg-green-600 rounded-lg text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
