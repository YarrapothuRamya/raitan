@extends('layouts.businessapp')

@section('content')

<div id="contract-detail-page" class="p-4 md:p-8">
    <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-gray-200 shadow-lg rounded-lg mb-4">
        <span class="flex items-center">
            <i class="bkarrow-icn text-gray-600 text-2xl"></i>
        </span>
        <span class="text-lg font-semibold text-gray-800">Edit Business Timings</span>
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
                        
                    </div>
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