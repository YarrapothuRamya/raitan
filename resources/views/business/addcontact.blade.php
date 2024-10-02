
@extends('layouts.businessapp')
@section('content')
<!-- Example in the <head> section -->

<div class="container__inner max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-white rounded-lg shadow-md">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="container__inner__left relative">
          <div class="left__img">
            <img alt="Business Listing Image" title="Business Listing Image" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover" src="images/Banners/bussiness_banner1.png">
          </div>
        </div>
       

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


        <div class="container__inner__right p-8 bg-white rounded shadow-md">
          <form  method="post" action="{{route('addcontact.add')}}" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate">
            @csrf
            <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">Add Contact Details</p>
            <!-- <div class="relative mb-6 flex items-center space-x-6">
              <div class="flex items-center space-x-2">
                <input type="radio" name="title" value="machines" class="input  border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green" required>
                <label class="bg-white">Machines</label>
              </div>
              
              <div class="flex items-center space-x-2">
                <input type="radio" name="title" value="agriculture_labour" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green" required>
                <label class="bg-white">Agriculture labour</label>
              </div>

              <div class="flex items-center space-x-2">
                <input type="radio" name="title" value="" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green" required>
                <label class="bg-white">Mechanic</label>
              </div>
            </div> -->
            <!-- <div class="error__message mt-2 hidden text-red-500">Please Select a Title</div> -->

            <div class="relative mb-6">
              <input type="text" name="contactPerson" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " value="" required>
              <label class="label-float bg-white">Full Name</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter Name</div>
            </div>

            <div class="relative mb-6">
              <input type="text" name="mobileNumber" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required readonly value="{{$mobileno}}">
              <label class="label-float bg-white">Mobile Number</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
            </div>

            <!-- <button class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none w-full lg:w-auto">+ Add Another Mobile Number</button> -->

            <!-- <div class="relative mb-6 mt-5">
              <input type="text" name="whatsappNumber" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" value="" placeholder=" " required>
              <label class="label-float bg-white">WhatsApp Number</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a WhatsApp number</div>
            </div> -->

            <!-- <div class="addcontact_button_outer__oJRac mt-2 flex flex-col lg:flex-row lg:items-center space-y-2 lg:space-y-0 lg:space-x-4">
                
                <label class="font13 text-main-green addcontact_samefield__XucOM flex items-center">
                  <input type="checkbox" id="wupCheckbox" title="Same As Mobile Number">
                  <span class="addcontact_uncheck__mAy08 ml-2"></span>
                  <span class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none">Same As Mobile Number</span>
                </label>
              </div> -->

            

            <div class="relative mb-6 mt-5">
              <input type="email" name="email" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" value="" placeholder=" " required>
              <label class="label-float bg-white">Email</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter an email</div>
            </div>
            <!-- <div class="relative mb-6 mt-5">
              <input type="text" name="username" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" autocomplete="off" value="" placeholder=" " required>
              <label class="label-float bg-white">Username</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter an Username</div>
            </div> -->
            <div class="relative mb-6 mt-5">
              <input type="password" name="password" autocomplete="new-password" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" value="" placeholder=" " required>
              <label class="label-float bg-white">Password</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter an Password</div>
            </div>
            <!-- <button class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none mb-2 w-full lg:w-auto">+ Add Another Email</button> -->
            <div class="relative mb-6 mt-5">
              <button type="submit" class="primarybutton fw500 ripple mt-5 bg-main-green-600 text-white px-4 py-2 rounded hover:bg-main-green-700 focus:outline-none w-full lg:w-auto">Save and Continue</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input[required]');
    
    form.addEventListener('submit', function(event) {
        let isValid = true;

        inputs.forEach(input => {
            const errorMessage = input.parentElement.querySelector('.error__message');

            if (!input.value.trim()) {
                errorMessage.classList.remove('hidden');
                isValid = false;
            } else {
                errorMessage.classList.add('hidden');
            }

            if (input.type === 'radio' && !form.querySelector(`input[name="${input.name}"]:checked`)) {
                errorMessage.classList.remove('hidden');
                isValid = false;
            } else if (input.type === 'radio') {
                errorMessage.classList.add('hidden');
            }
        });

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if there are errors
        }
    });
});

</script>
    @endsection