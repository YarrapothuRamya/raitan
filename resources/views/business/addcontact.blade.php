
@extends('layouts.businessapp')
@section('content')
<div class="container__inner max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-white rounded-lg shadow-md">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="container__inner__left relative">
          <div class="left__img">
            <img alt="Business Listing Image" title="Business Listing Image" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover" src="/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=3840&amp;q=75" srcset="/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=640&amp;q=75 640w, /Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=750&amp;q=75 750w, /Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=828&amp;q=75 828w, /Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=1080&amp;q=75 1080w, /Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=1200&amp;q=75 1200w, /Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=1920&amp;q=75 1920w, /Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=2048&amp;q=75 2048w, /Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fadd_contact_2x.png&amp;w=3840&amp;q=75 3840w">
          </div>
        </div>
       
        <div class="container__inner__right p-8 bg-white rounded shadow-md">
          <form  method="post" action="{{route('address.home')}}" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">Add Contact Details</p>
            <input type="hidden" name="id" value="{{ $existingData->id ?? ''}}" />
            <div class="relative mb-6">
              <!-- <input type="text" name="title" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required> -->
              <select name="title" id="title" required class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full">
                <option value="">Select</option>
              @foreach($services as $service)
                  <option value="{{ $service->id }}" @selected($service->id == ($existingData->title ?? ''))>{{ $service->service_name }}</option>
              @endforeach
              </select>
              
              <label class="label-float bg-white">Title</label>
              <div class="error__message mt-2 hidden text-red-500">Please Select Title</div>
            </div>

            <div class="relative mb-6">
              <input type="text" name="contactPerson" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " value="{{$existingData->name ?? ''}}" required>
              <label class="label-float bg-white">Contact Person</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a contact person</div>
            </div>

            <div class="relative mb-6">
              <input type="text" name="mobileNumber" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required readonly value="{{$mobileno}}">
              <label class="label-float bg-white">Mobile Number</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
            </div>

            <button class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none w-full lg:w-auto">+ Add Another Mobile Number</button>

            <div class="relative mb-6 mt-5">
              <input type="text" name="whatsappNumber" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" value="{{$existingData->whatsapp_no ?? ''}}" placeholder=" " required>
              <label class="label-float bg-white">WhatsApp Number</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter a WhatsApp number</div>
            </div>

            <div class="addcontact_button_outer__oJRac mt-2 flex flex-col lg:flex-row lg:items-center space-y-2 lg:space-y-0 lg:space-x-4">
                <button class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none w-full lg:w-auto">+ Add WhatsApp Number</button>
                <label class="font13 text-main-green addcontact_samefield__XucOM flex items-center">
                  <input type="checkbox" id="wupCheckbox" title="Same As Mobile Number">
                  <span class="addcontact_uncheck__mAy08 ml-2"></span>
                  <span class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none">Same As Mobile Number</span>
                </label>
              </div>

            <button class="mt-2 text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none w-full lg:w-auto">+ Add Landline Number</button>

            <div class="relative mb-6 mt-5">
              <input type="text" name="email" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" value="{{ $existingData->email ?? ''}}" placeholder=" " required>
              <label class="label-float bg-white">Email</label>
              <div class="error__message mt-2 hidden text-red-500">Please enter an email</div>
            </div>

            <button class="text-main-green-600 px-4 py-2 rounded hover:text-main-green-700 focus:outline-none mb-2 w-full lg:w-auto">+ Add Another Email</button>
            <div class="relative mb-6 mt-5">
              <button type="submit" class="primarybutton fw500 ripple mt-5 bg-main-green-600 text-white px-4 py-2 rounded hover:bg-main-green-700 focus:outline-none w-full lg:w-auto">Save and Continue</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    @endsection