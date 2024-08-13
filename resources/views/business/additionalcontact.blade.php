@extends('layouts.businessapp')

@section('content')

<div id="contract-detail-page" class="p-4 md:p-8">
    <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-gray-200 shadow-lg rounded-lg mb-4">
        <span class="flex items-center">
            <i class="bkarrow-icn text-gray-600 text-2xl"></i>
        </span>
        <span class="text-lg font-semibold text-gray-800">Contact Details</span>
        <span class="text-sm text-gray-500 flex items-center space-x-2">
            <!-- Right section (if needed) -->
        </span>
    </header>

    <!-- Button Section -->
    <div class="fixed bottom-0 left-0 right-0 bg-white p-4 shadow-lg">
        <div class="flex justify-center">
            <button class="font-semibold text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg transition duration-300">
                Save
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
    
        
        <div class="container__inner__right p-8 bg-white rounded shadow-md">
          <form novalidate="novalidate">
            
            <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">Add Contact Details</p>

            <div class="relative mb-6">
              <input type="text" name="title" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
              <label class="label-float bg-white">Title</label>
              <div class="error__message mt-2 hidden text-red-500">Please Select Title</div>
            </div>

            <div class="relative mb-6">
              <input type="text" name="contactPerson" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
              <label class="label-float bg-white">Contact Person</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a contact person</div>
            </div>

            <div class="relative mb-6">
              <input type="text" name="mobileNumber" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required disabled value="9553775093">
              <label class="label-float bg-white">Mobile Number</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
            </div>

            <button class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none w-full lg:w-auto">+ Add Another Mobile Number</button>

            <div class="relative mb-6 mt-5">
              <input type="text" name="whatsappNumber" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
              <label class="label-float bg-white">WhatsApp Number</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a WhatsApp number</div>
            </div>

            <div class="addcontact_button_outer__oJRac mt-2 flex flex-col lg:flex-row lg:items-center space-y-2 lg:space-y-0 lg:space-x-4">
                
                <label class="font13 text-main-green addcontact_samefield__XucOM flex items-center">
                  <input type="checkbox" id="wupCheckbox" title="Same As Mobile Number">
                  <span class="addcontact_uncheck__mAy08 ml-2"></span>
                  <span class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none">Same As Mobile Number</span>
                </label>
              </div>

            

            <div class="relative mb-6 mt-5">
              <input type="text" name="email" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
              <label class="label-float bg-white">Email</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter an email</div>
            </div>

            <button class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none mb-2 w-full lg:w-auto">+ Add Another Email</button>
           
          </form>
        </div>
      
    </div>

    <!-- Popup Modal (If needed) -->
    <div id="commonPopupModal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md mx-auto">
            <div class="flex items-center justify-between border-b pb-4 mb-4">
                <h3 class="text-lg font-semibold">IMPORTANT - Email ID Missing</h3>
                <button class="text-gray-600 hover:text-gray-800">✕</button>
            </div>
            <p class="text-gray-700">Email ID is required to receive instant alerts, customized leads, and the latest information on new feature releases.</p>
            <div class="flex justify-end space-x-4 mt-6">
                <button class="text-blue-600 border border-blue-600 px-4 py-2 rounded-md">Skip for Now</button>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md">Add Email Now</button>
            </div>
        </div>
    </div>
</div>
@endsection