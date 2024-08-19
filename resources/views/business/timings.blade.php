@extends('layouts.businessapp')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="container__inner bg-white rounded-lg shadow-md p-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="left__img relative">
                <img src="images/Banners/bussiness_banner3.png" alt="left image" loading="lazy" decoding="async"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="container__inner__right p-8 bg-white rounded shadow-md">

                <div class="form-wrapper">
                    <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">Add business timings</p>

                    <p class="addtiming_content__TRJ_N color111">Let your customers know when you are open for business
                    </p>
                    <div class="addtiming_usines_heght__fv00E mb-3">
                        <div class="form">
                            <div class="addtiming_week___1YRi">
                                <div>
                                    <label class="color111 font14">Select Days of the Week</label>
                                    <div class="addtiming_week__block mt-10 mb-10">
                                        <div class="addtiming_week__select">
                                            <label class="addtiming_week__select__label"><input autocomplete="off"
                                                    id="test" type="checkbox"><span class="font12">Mon</span></label>
                                            <label class="addtiming_week__select__label"><input autocomplete="off"
                                                    id="test" type="checkbox"><span class="font12">Tue</span></label>
                                            <label class="addtiming_week__select__label"><input autocomplete="off"
                                                    id="test" type="checkbox"><span class="font12">Wed</span></label>
                                            <label class="addtiming_week__select__label"><input autocomplete="off"
                                                    id="test" type="checkbox"><span class="font12">Thu</span></label>
                                            <label class="addtiming_week__select__label"><input autocomplete="off"
                                                    id="test" type="checkbox"><span class="font12">Fri</span></label>
                                            <label class="addtiming_week__select__label"><input autocomplete="off"
                                                    id="test" type="checkbox"><span class="font12">Sat</span></label>
                                            <label class="addtiming_week__select__label"><input autocomplete="off"
                                                    id="test" type="checkbox"><span class="font12">Sun</span></label>
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
                                <div class="sm:flex sm:space-x-8">
  <!-- Open At Input -->
  <div class="relative">
    <input id="openAtInput" autocomplete="off"
      class="input border border-gray-300 rounded px-3 py-2 w-40 cursor-pointer" type="tel"
      placeholder="Select" required="">
    <label
      class="input__label input__label__top absolute left-3 -top-2 bg-white px-1">Open
      at</label>
    <ul class="dropdown color111 customscroll absolute bg-white border border-gray-300 rounded-md mt-1 w-full max-h-60 overflow-auto hidden"
      id="openAtDropdown">
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Open 24hrs</li>
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Closed</li>
      <!-- Add the rest of the time slots here -->
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">07:00 AM</li>
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">07:15 AM</li>
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">07:30 AM</li>
      <!-- ... -->
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">06:45 AM</li>
    </ul>
  </div>

  <!-- Close At Input -->
  <div class="relative">
    <input id="closeAtInput" autocomplete="off"
      class="input border border-gray-300 rounded px-3 py-2 w-40 cursor-pointer" type="tel"
      placeholder="Select" required="">
    <label
      class="input__label input__label__top absolute left-3 -top-2 bg-white px-1">Close
      at</label>
    <ul class="dropdown color111 customscroll absolute bg-white border border-gray-300 rounded-md mt-1 w-full max-h-60 overflow-auto hidden"
      id="closeAtDropdown">
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">08:00 AM</li>
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">08:15 AM</li>
      <!-- Add the rest of the time slots here -->
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">09:00 PM</li>
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">09:15 PM</li>
      <!-- ... -->
      <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">06:45 AM</li>
    </ul>
  </div>
</div>


                            </div>
                            <button class="transparentButton font13 mt-5 text-main-green-600">+ Add Another Time
                                Slot</button>
                        </div>
                    </div>
                    <a class="primarybutton fw500 ripple mt-5 bg-main-green-600 text-white px-4 py-2 rounded hover:bg-main-green-700 focus:outline-none w-full lg:w-auto"
                        href="{{ route('category.home') }}">Save and Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  // Handle Open At Dropdown
  const openAtInput = document.getElementById('openAtInput');
  const openAtDropdown = document.getElementById('openAtDropdown');
  const openAtItems = openAtDropdown.getElementsByTagName('li');

  openAtInput.addEventListener('click', function() {
    openAtDropdown.classList.toggle('hidden');
  });

  for (let i = 0; i < openAtItems.length; i++) {
    openAtItems[i].addEventListener('click', function() {
      openAtInput.value = this.textContent;
      openAtDropdown.classList.add('hidden');
    });
  }

  // Handle Close At Dropdown
  const closeAtInput = document.getElementById('closeAtInput');
  const closeAtDropdown = document.getElementById('closeAtDropdown');
  const closeAtItems = closeAtDropdown.getElementsByTagName('li');

  closeAtInput.addEventListener('click', function() {
    closeAtDropdown.classList.toggle('hidden');
  });

  for (let i = 0; i < closeAtItems.length; i++) {
    closeAtItems[i].addEventListener('click', function() {
      closeAtInput.value = this.textContent;
      closeAtDropdown.classList.add('hidden');
    });
  }

  // Hide dropdowns if clicked outside
  document.addEventListener('click', function(e) {
    if (!openAtInput.contains(e.target) && !openAtDropdown.contains(e.target)) {
      openAtDropdown.classList.add('hidden');
    }
    if (!closeAtInput.contains(e.target) && !closeAtDropdown.contains(e.target)) {
      closeAtDropdown.classList.add('hidden');
    }
  });
</script>
@endsection