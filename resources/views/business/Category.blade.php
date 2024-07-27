@extends('layouts.businessapp')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="container__inner bg-white rounded-lg shadow-md p-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="left__img relative">
                    <img src="/Free-Listing/_next/image?url=https%3A%2F%2Fakam.cdn.jdmagicbox.com%2Fimages%2Ficontent%2Flistingbusiness%2Fbusiness_listed_2x_new.png&amp;w=3840&amp;q=75" alt="left image" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover rounded-lg shadow-md">
                </div>
                <div class="container__inner__right p-8 bg-white rounded-lg shadow-md">
                    <form>
                        
                        <div class="form-wrapper">
                            <p class="styles_title__dVmvo text-xl font-semibold text-gray-900 mb-2">Add business category</p>
                            <p class="styles_content__IZBCN text-sm text-gray-600 mb-4">Choose the right business categories so your customers can easily find you</p>
                            <div class="form styles_selected__form__Wbgft">
                                <div class="inputwrap mb-6 relative">
                                    <span class="iconwrap styles_searchicon__xRQmH absolute top-3 left-3"></span>
                                    <input type="text" placeholder="Type Business Category" class="input styles_textsearch__hxEo7 border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full pl-10" value="">
                                    <ul class="dropdown color111 customscroll dn" id="ab"></ul>
                                    <p class="styles_subtitle___3tbk color111"></p>
                                </div>
                            </div>
                            <div class="styles_suggestedcategories__wrap__4bEgK"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection