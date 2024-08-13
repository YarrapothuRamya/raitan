@extends('layouts.businessapp')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="container__inner bg-white rounded-lg shadow-md p-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="left__img relative">
                    <img src="images/Banners/bussiness_banner3.png" alt="left image" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="container__inner__right p-8 bg-white rounded shadow-md">
                    
                    <div class="form-wrapper">
                        <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">Add business timings</p>
                        
                        <p class="addtiming_content__TRJ_N color111">Let your customers know when you are open for business</p>
                        <div class="addtiming_usines_heght__fv00E">
                            <div class="form">
                                <div class="addtiming_week___1YRi">
                                    <div>
                                        <label class="color111 font14">Select Days of the Week</label>
                                        <div class="addtiming_week__block mt-10 mb-10">
                                            <div class="addtiming_week__select">
                                                <label class="addtiming_week__select__label"><input autocomplete="off" id="test" type="checkbox"><span class="font12">Mon</span></label>
                                                <label class="addtiming_week__select__label"><input autocomplete="off" id="test" type="checkbox"><span class="font12">Tue</span></label>
                                                <label class="addtiming_week__select__label"><input autocomplete="off" id="test" type="checkbox"><span class="font12">Wed</span></label>
                                                <label class="addtiming_week__select__label"><input autocomplete="off" id="test" type="checkbox"><span class="font12">Thu</span></label>
                                                <label class="addtiming_week__select__label"><input autocomplete="off" id="test" type="checkbox"><span class="font12">Fri</span></label>
                                                <label class="addtiming_week__select__label"><input autocomplete="off" id="test" type="checkbox"><span class="font12">Sat</span></label>
                                                <label class="addtiming_week__select__label"><input autocomplete="off" id="test" type="checkbox"><span class="font12">Sun</span></label>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="addtiming_selectalldays radio font0 color007 flex">
                                                <input type="checkbox" class="m-0">
                                                <span class="uncheck addtiming_uncheck"></span>
                                                <span class="ml-10 font13 fw500 text-main-green-600">Select All Days</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class=" sm:flex sm:space-x-8">
                                        <div class="relative">
                                            <input id="openAtInput" autocomplete="off" class="input border border-gray-300 rounded px-3 py-2 w-40" type="tel" placeholder="Select" required="" value="">
                                            <label class="input__label input__label__top absolute left-3 -top-2 bg-white px-1">Open at</label>
                                            <span id="openAtIcon" class="iconwrap selectarrow addtiming_selectarrow___Rcd7 absolute right-3 top-1"></span>
                                            <ul id="openAtDropdown" class="dropdown color111 customscroll absolute left-0 mt-1 bg-white shadow-md rounded border border-gray-300 w-40 z-10 hidden">
                                                <li>Open 24hrs</li>
                                                <li>Closed</li>
                                                <li>07:00 AM</li>
                                                <!-- Add more list items as needed -->
                                            </ul>
                                        </div>
                                        <div class="relative">
                                            <input id="closeAtInput" autocomplete="off" class="input border border-gray-300 rounded px-3 py-2 w-40" type="tel" placeholder="Select" required="" value="">
                                            <label class="input__label input__label__top absolute left-3 -top-2 bg-white px-1">Close at</label>
                                            <span id="closeAtIcon" class="iconwrap selectarrow addtiming_selectarrow___Rcd7 absolute right-3 top-1"></span>
                                            <ul id="closeAtDropdown" class="dropdown color111 customscroll absolute left-0 mt-1 bg-white shadow-md rounded border border-gray-300 w-40 z-10 hidden">
                                                <li>08:00 AM</li>
                                                <li>08:15 AM</li>
                                                <!-- Add more list items as needed -->
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <button class="transparentButton font13 mt-5 text-main-green-600">+ Add Another Time Slot</button>
                            </div>
                        </div>
                        <a class="primarybutton fw500 ripple mt-5 bg-main-green-600 text-white px-4 py-2 rounded hover:bg-main-green-700 focus:outline-none w-full lg:w-auto" href="{{ route('category.home') }}">Save and Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection