@extends('layouts.businessapp')



@section('content')


<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="container__inner bg-white rounded-lg shadow-md p-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="left__img relative">
                    <img src="images/Banners/bussiness_banner2.png" alt="left image" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="container__inner__right p-8 bg-white rounded shadow-md">
                    <p class="text-xl font-semibold text-gray-900">Enter your business details</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="mt-4" action="{{ route('address.add')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="relative mb-6">
                                <input type="hidden" name="user_id" class="form-control" value="{{Auth::guard('customer')->user()->id}}"/>
                           <input type="text" name="business_name" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                           
                            <label class="label-float bg-white">Business Name</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="mobile" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  placeholder=" " autocomplete="off" maxlength="11" inputmode="numeric" pattern="[0-9]*" required>
                            <label class="label-float bg-white">Business Contact No</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="relative mb-6">
                            <input type="email" name="email" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" ">
                            <label class="label-float bg-white">Business Email</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="pincode"onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"  class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="6" inputmode="numeric" pattern="[0-9]*" required>
                            <label class="label-float bg-white">Pincode</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="block_no" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="250" required>
                            <label class="label-float bg-white">Block Number / Building Name</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="street" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="250" required>
                            <label class="label-float bg-white">Street / Colony Name</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="area" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" required>
                            <label class="label-float bg-white">Area</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="relative mb-6">
                            <input type="text" name="landmark" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" maxlength="250" required>
                            <label class="label-float bg-white">Landmark</label>
                            <div class="error__message mt-2 text-red-500"></div>
                        </div>
                        <div class="flex mb-6">
                            <div class="relative flex-1 mr-4">
                                <input type="text" name="city" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" required>
                                <label class="label-float bg-white">City</label>
                                <div class="error__message mt-2 text-red-500"></div>
                            </div>
                            <div class="relative flex-1 ml-4">
                                <input type="text" name="state" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " autocomplete="off" required>
                                <label class="label-float bg-white">State</label>
                                <div class="error__message mt-2 text-red-500"></div>
                            </div>
                        </div>
                        <button type="submit" class=" fw500 ripple mt-4 bg-main-green-600 text-white px-4 py-2 rounded hover:bg-main-green-700 focus:outline-none" href="{{ route('timings.home', 'business_id') }}">Save and Continue</button>
                    </form>
                </div>
            </div>
        </div>
        
       
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $(document).ready(function() {
        // Initialize jQuery Validation
        $("form").validate({
            rules: {
                business_name: {
                    required: true,
                    minlength: 2
                },
                mobile: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 11
                },
                email: {
                    required: true,
                    email: true
                },
                pincode: {
                    required: true,
                    digits: true,
                    minlength: 6,
                    maxlength: 6
                },
                block_no: {
                    required: true
                },
                street: {
                    required: true
                },
                area: {
                    required: true
                },
                landmark: {
                    required: true
                },
                city: {
                    required: true
                },
                state: {
                    required: true
                }
            },
            messages: {
                business_name: {
                    required: "Please enter your business name",
                    minlength: "Business name must be at least 2 characters long"
                },
                mobile: {
                    required: "Please enter your business contact number",
                    digits: "Please enter only numbers",
                    minlength: "Mobile number should be at least 10 digits",
                    maxlength: "Mobile number should not exceed 11 digits"
                },
                email: {
                    required: "Please enter your business email",
                    email: "Please enter a valid email address"
                },
                pincode: {
                    required: "Please enter your pincode",
                    digits: "Please enter only numbers",
                    minlength: "Pincode must be 6 digits",
                    maxlength: "Pincode must be 6 digits"
                },
                block_no: "Please enter your block number or building name",
                street: "Please enter your street or colony name",
                area: "Please enter your area",
                landmark: "Please enter a landmark",
                city: "Please enter your city",
                state: "Please enter your state"
            },
            errorElement: 'div',
            errorPlacement: function(error, element) {
                // Find the nearest .error__message div to append the error message
                element.closest('.relative').find('.error__message').html(error);
            },
            highlight: function(element) {
                $(element).addClass('border-red-500');
            },
            unhighlight: function(element) {
                $(element).removeClass('border-red-500');
                $(element).closest('.relative').find('.error__message').html(''); // Clear error message when valid
            }
        });
    });
</script>


    @endsection