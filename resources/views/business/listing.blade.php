@extends('layouts.businessapp')


@section('content')

    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
      <ul class="flex space-x-4 text-gray-500 mb-6">
        <li><a href="#" class="hover:text-gray-900">Home</a></li>
        <li><span>Free Business Listing</span></li>
      </ul>
      <div id="listyourbusiness" class="bg-white p-8 rounded-lg shadow-md">
        <div class="flex flex-col lg:flex-row">
          <div class="lg:w-1/2 lg:pr-8 mb-8 lg:mb-0">
            <h1 class="text-2xl font-bold text-gray-900 mb-4">List Your Business <span class="main-color">for FREE</span></h1>
            <span class="text-gray-700 font-medium mb-4 block">with India’s No. 1 Local Search Engine</span>
            <form class="flex items-center space-x-4 mb-6" action="{{ route('addcontact.home1') }}" method="POST">
              @csrf
                            @if ($errors->has('mobile'))
                  <div class="alert alert-danger">
                      {{ $errors->first('mobile') }}
                  </div>
              @endif
              <span class="text-gray-700 font-medium">+91</span>
              <input aria-label="Enter Mobile Number" aria-required="true" class="flex-1 p-2 border border-gray-300 rounded-md" inputmode="numeric" pattern="[0-9]*" name="mobile" autocomplete="off" maxlength="10" required="" placeholder="Enter Mobile No." value="{{session('mobile')}}">
              <button aria-label="Start Now" type="submit" class="px-4 py-2 bg-main-green-600 text-white font-semibold rounded-md hover:bg-main-green-700">Start Now <span class="ml-2">→</span></button>
            </form>
            
            <ul class="list-disc list-inside space-y-2">
              <li>Get Discovered and Create Your Online Business</li>
              <li>Respond to Customer Reviews and Questions</li>
              <li>Showcase Your Product and Service Offerings</li>
            </ul>
            <div class="mt-4 text-gray-600">
              By continuing, you agree to our
              <br>
              <a role="button" aria-label="Terms of Use" href="https://www.justdial.com/Terms-of-Use" class="main-color hover:underline">Terms of Use</a>,
              <a role="button" aria-label="Privacy" href="https://www.justdial.com/Privacy-Policy" class="main-color hover:underline">Privacy</a>,
              &amp;
              <a role="button" aria-label="Infringement Policy" href="https://www.justdial.com/Infringement-Policy" class="main-color hover:underline">Infringement Policy</a>
            </div>
          </div>
          <div class="lg:w-1/2 lg:pl-8 flex justify-center lg:justify-end relative">
            <img alt="Business List Free" title="Business List Free" class="w-full max-w-md" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/man_new_2x.png">
            <div class="absolute top-4 right-4 bg-white shadow-lg rounded-lg p-4 text-center">
              <span class="block text-xl font-semibold">17.1 Crore+</span>
              <span class="block text-sm text-gray-500">Buyers*</span>
              <span class="block text-xl font-semibold mt-2">3.8 Crore+</span>
              <span class="block text-sm text-gray-500">Businesses Listed</span>
              <span class="block text-xl font-semibold mt-2">5.4 Lakh+</span>
              <span class="block text-sm text-gray-500">Happy Customers</span>
            </div>
          </div>
        </div>
      </div>

      <!-- New Section: 3 Simple Steps -->
      <div id="businessliststepid" class="mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Get a FREE Business Listing in 3 Simple Steps</h2>
        <ul class="flex flex-col lg:flex-row lg:space-x-6 space-y-6 lg:space-y-0">
          <li class="flex flex-col items-center text-center">
            <img alt="step 1" class="mb-4" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/createaccount@2x.png">
            <div class="space-y-2">
              <span class="text-xl font-bold text-gray-900">Step 1</span>
              <b class="text-lg font-semibold text-gray-800">Create Account</b>
              <p class="text-gray-600">Enter your mobile number to get started</p>
            </div>
          </li>
          <li class="flex flex-col items-center text-center">
            <img alt="step 2" class="mb-4" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/enterbusinessdetails@2x.png">
            <div class="space-y-2">
              <span class="text-xl font-bold text-gray-900">Step 2</span>
              <b class="text-lg font-semibold text-gray-800">Enter Business Details</b>
              <p class="text-gray-600">Add name, address, business hours and photos</p>
            </div>
          </li>
          <li class="flex flex-col items-center text-center">
            <img alt="step 3" class="mb-4" src="https://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/selectcat@2x.png">
            <div class="space-y-2">
              <span class="text-xl font-bold text-gray-900">Step 3</span>
              <b class="text-lg font-semibold text-gray-800">Select Categories</b>
              <p class="text-gray-600">Add relevant categories to your free listing page</p>
            </div>
          </li>
        </ul>
      </div>

      <div id="gotfaq" class=" mt-12 bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Got a question?</h2>
        
        <div class="space-y-6">
            <div x-data="{ openTab: null }" class="border-b border-gray-200">
                <button 
                    x-on:click="openTab !== 1 ? openTab = 1 : openTab = null"
                    class="flex justify-between w-full px-4 py-2 text-left font-semibold text-gray-900 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200"
                >
                    What are the benefits of listing a business on Raitan?
                    <svg 
                        x-show="openTab === 1" 
                        class="w-4 h-4 ml-auto transform -rotate-180"
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M19 9l-7 7-7-7"
                        />
                    </svg>
                    <svg 
                        x-show="openTab !== 1" 
                        class="w-4 h-4 ml-auto"
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M9 5l7 7-7 7"
                        />
                    </svg>
                </button>
                <div 
                    x-show="openTab === 1" 
                    x-transition:enter="transition ease-out duration-200" 
                    x-transition:enter-start="opacity-0 transform scale-95" 
                    x-transition:enter-end="opacity-100 transform scale-100" 
                    x-transition:leave="transition ease-in duration-150" 
                    x-transition:leave-start="opacity-100 transform scale-100" 
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="px-4 pt-2 pb-4 text-gray-600"
                >
                    Justdial is India's No. 1 local search platform and provides a range of benefits for businesses listed on the platform such as:
                    <ul class="list-disc list-inside mt-2">
                        <li>Boost your online presence and get more customers - Justdial has a customer base of 17+ crore. Listing your business will help you reach out to these users when your business listing or your business category is searched on Justdial.</li>
                        <li>Create an online catalogue to showcase your ready-to-buy products or services for prospective clients seeking more detailed information.</li>
                        <li>Build Trust - Having an online presence on Justdial will help you build trust with customers and engage with them via replies to reviews and questions.</li>
                        <li>Publish Deals, Menu, Rate Card, Brochure, etc., to inform your potential customers about your business offerings.</li>
                    </ul>
                </div>
            </div>
            
            <!-- Repeat the above structure for other FAQ items -->
            
        </div>
        
        <div class="mt-6">
            <button class="bg-main-green-600 hover:bg-main-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">View More Questions</button>
        </div>
    </div>

    <div class="section mt-12 bg-white p-8 rounded-lg shadow-md">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-1/2">
                <h1 class="text-2xl font-bold text-gray-900 mb-2">List Your Business for FREE on Raitan Today</h1>
                <span class="text-gray-700">India's No. 1 Local Search Engine</span>
                
                <form class="flex items-center space-x-4 mb-6" action="{{ route('addcontact.home1') }}" method="POST">
              @csrf
                            @if ($errors->has('mobile'))
                  <div class="alert alert-danger">
                      {{ $errors->first('mobile') }}
                  </div>
              @endif
                    <div class="flex items-center">
                        <span class="text-gray-700 font-semibold mr-2">+91</span>
                        <input type="text" id="mobile" inputmode="numeric" pattern="[0-9]*" required="" aria-required="true"  name="mobile"  autocomplete="off" maxlength="10" placeholder="Enter Mobile No." 
                               class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-blue-500">
                               
                        <button type="submit" class="bg-main-green-600 hover:bg-main-green-700 text-white font-bold py-2 px-4 ml-2 rounded-md focus:outline-none focus:shadow-outline">
                            Create FREE Account
                            <span class="ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 inline-block">
                                    <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M11 5a1 1 0 011 1v5a1 1 0 11-2 0V6a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    
                </form>
                
                <div class="mt-4 text-gray-700">
                    By continuing, you agree to our 
                    <a href="https://www.justdial.com/Terms-of-Use" class="text-blue-500 hover:underline">Terms of Use</a>, 
                    <a href="https://www.justdial.com/Privacy-Policy" class="text-blue-500 hover:underline">Privacy</a> &amp; 
                    <a href="https://www.justdial.com/Infringement-Policy" class="text-blue-500 hover:underline">Infringement Policy</a>.
                </div>
            </div>
            
            <div class="hidden lg:block lg:w-1/2">
                <img src="http://akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/list.svg" alt="create free account" loading="lazy" width="370" height="197" class="mt-4 lg:mt-0">
            </div>
        </div>
    </div>
    
    
    </div>
    <div id="user-register" style="{{ session('mobile') ? 'display: block;' : 'display: none;' }}">
  <div class="fixed top-0 left-0 w-full
  h-full z-50 sm:py-0 py-1 flex justify-center items-center backdrop-blur-sm bg-black/25" style="opacity: 1;">
    <div class="sm:w-96 w-full bg-gray-50 rounded-xl text-black shadow-2xl drop-shadow-lg" style="opacity: 1;">
      <header class="modal-header-bg flex items-center justify-between p-4">
        <!-- Logo -->
        <img
          src="images/raitanlogo.png" 
          alt="Raitan Logo"
          aria-label="Raitan"
          title="Raitan"
          height="40" 
          width="60" 
          class="mr-2"  <!-- Adds margin to the right of the logo -->
        
        
        <!-- Title and Close Button -->
        <div class="flex items-center space-x-2">
          <h3 class="sm:text-black text-gray-50" style="color: #48BB78; font-family: Arial, sans-serif; font-size: 24px;">Login</h3>
          <button class="register-modal-close modal-close">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="w-4 h-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z"></path>
            </svg>
          </button>
        </div>
      </header>
            <div class="bg-gray-50 rounded-b-xl px-6 pt-3 pb-8 text-black">
        <p class="py-2 font-light mb-2 text-sm">Enter Your password</p>
        <form action="{{ route('addcontact.login') }}" method="post">
          @csrf
          <div class="show_message" id="show_message">

          </div>
          <div class="my-2">
       
            <div class="relative mb-2">
            <input type="hidden" name="mobile" id="mobile"
                class="common-input input-focus text-sm py-3 rounded-xl" placeholder="Enter Your Mobile Number*"
                 value="{{session('mobile')}}" style="padding-left: 46.8px;">
            </div>

            <div class="relative mb-4 mx-auto">
              <input type="password" name="password" id="password" 
                class="common-input input-focus text-sm py-3 rounded-xl w-[90%]" 
                placeholder="Enter Your Password*" value="" required>
            </div>
                        

          </div>
          <div class="min-h-[25px] text-xs text-center"></div>
          <button type="submit" id="register_button"
  class="action-btn px-4 py-2 bg-main-green-600 text-white font-semibold rounded-md hover:bg-main-green-700 register_button flex items-center">

  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
    <path d="M160 32c-16 0-32 16-32 32v384c0 16 16 32 32 32h192c16 0 32-16 32-32V64c0-16-16-32-32-32H160zm21.68 23h96v18h-96V55zM304 55h32v18h-32V55zM154 96h204v320H154V96zm70 342h63.984c16 0 16 16 16 16v6H208v-6s0-16 16-16z"></path>
  </svg>
  
  <span class="ml-2">Login</span>
  
</button>

        </form>
        
        
        
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const registersection = document.querySelector('#user-register');
    const registercloseButton = document.querySelector('.register-modal-close');
    registercloseButton.addEventListener('click', function () {

registersection.style.display = (registersection.style.display === 'none') ? 'block' : 'none';
location.reload();
});
  });
</script>
    @endsection
    