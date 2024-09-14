@extends('layouts.businessapp')

@section('content')

<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="container__inner bg-white rounded-lg shadow-md p-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="left__img relative">
                <img src="images/Banners/bussiness_banner4.png" alt="left image" loading="lazy" decoding="async"
                    class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="container__inner__right p-8 bg-white rounded-lg shadow-md">
            
                <form action="{{route('category.add')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{session('address_id')}}"/>
                    <div class="form-wrapper">
                        <p class="styles_title__dVmvo text-xl font-semibold text-gray-900 mb-2">Add business category
                        </p>
                        <p class="styles_content__IZBCN text-sm text-gray-600 mb-4">
                            Choose the right business categories so your customers can easily find you
                        </p>

                        <div class="form styles_selected__form__Wbgft">
                            <div class="inputwrap mb-6 relative">
                                <span class="iconwrap styles_searchicon__xRQmH absolute top-3 left-3"></span>
                                <input type="text" placeholder="Type Business Category"
                                    class="input styles_textsearch__hxEo7 border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full pl-10"
                                    value="" id="searchInput" name="searchInput">
                                <ul class="dropdown color111 customscroll absolute bg-white border border-gray-300 rounded-md mt-1 w-full max-h-60 overflow-auto hidden"
                                    id="dropdownList">
                                    <!-- Dropdown Items -->
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Treatment</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-Mahindra</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-John Deere
                                    </li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-Swaraj</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-Sonalika</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Repair & Services</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-Powertrac</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-Kubota</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-Mahindra (Authorised)</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Aqualock Dealers</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Compressors On Rent
                                    </li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-Massey Ferguson</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Dealers-John Deere  (Authorised)</li>
                                    <li class="ripple px-4 py-2 cursor-pointer hover:bg-gray-200">Tyre Dealers-BKT</li>
                                </ul>
                                <p class="color111 mt-4 font-semibold text-gray-900">Selected Categories</p>
                            </div>
                        </div>

                        <!-- Selected Categories List -->
                        <div class="mt-4 space-y-2">
                            <label
                                class="block bg-gray-100 text-gray-900 font-semibold rounded-md p-2 flex items-center justify-between">
                                <span>Salons</span>
                                <span class="ml-4 cursor-pointer">
                                    <img alt="Remove" loading="lazy" width="15" height="15" decoding="async"
                                        data-nimg="1"
                                        src="//akam.cdn.jdmagicbox.com/images/icontent/listingbusiness/closeblue.svg" />
                                </span>
                            </label>
                            <!-- Repeat the above label for other selected categories -->
                        </div>
                    </div>
                    <button type="submit" class="primarybutton fw500 ripple mt-5 bg-main-green-600 text-white  px-4 py-2 rounded hover:bg-main-green-700 focus:outline-none w-full lg:w-auto" href="{{ route('category.home') }}">Save and Continue</button>
                </form>

            </div>
        </div>
      
    </div>
</div>

<script>
    const searchInput = document.getElementById('searchInput');
    const dropdownList = document.getElementById('dropdownList');
    const dropdownItems = dropdownList.getElementsByTagName('li');

    searchInput.addEventListener('input', function () {
        const filter = searchInput.value.toLowerCase();
        let hasVisibleItems = false;

        for (let i = 0; i < dropdownItems.length; i++) {
            const item = dropdownItems[i];
            const text = item.textContent || item.innerText;

            if (text.toLowerCase().indexOf(filter) > -1) {
                item.style.display = '';
                hasVisibleItems = true;
            } else {
                item.style.display = 'none';
            }
        }

        dropdownList.classList.toggle('hidden', !hasVisibleItems);
    });

    document.addEventListener('click', function (e) {
        if (!searchInput.contains(e.target) && !dropdownList.contains(e.target)) {
            dropdownList.classList.add('hidden');
        }
    });

    for (let i = 0; i < dropdownItems.length; i++) {
        dropdownItems[i].addEventListener('click', function () {
            searchInput.value = this.textContent;
            dropdownList.classList.add('hidden');
        });
    }
</script>
@endsection