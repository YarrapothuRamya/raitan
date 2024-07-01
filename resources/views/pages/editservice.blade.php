@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')

<section class="home_appextra" style="justify-content: center;">
    <main class="grid min-h-full place-items-center bg-white px-6  lg:px-8">
        
            <div class="max-w-2xl w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-2">
                <div class="grid gap-8 grid-cols-1">
                    <div class="flex flex-col">
                        <div class="flex flex-col sm:flex-row items-center">
                            <h2 class="font-semibold text-lg mr-auto">Edit Service</h2>
                            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                        </div>
                        <div class="mt-2">
                            <div class="form">
                                <div class="md:space-y-2 mb-1">
                                    <label class="text-xs font-semibold text-gray-600 py-2">Upload Service Image<abbr class="hidden" title="required">*</abbr></label>
                                    <div class="flex items-center py-6">
                                        <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                                            <img class="w-12 h-12 mr-4 object-cover" src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80" alt="Avatar Upload">
                                        </div>
                                        <label class="cursor-pointer">
                                            <span class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:hover:bg-[#50b500] hover:shadow-lg">Browse</span>
                                            <input type="file" class="hidden" :multiple="multiple" :accept="accept">
                                        </label>
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-8 w-96 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-gray-600 py-2">Service Name <abbr title="required">*</abbr></label>
                                        <input placeholder="Service Name" class="appearance-none block w-full  text-grey-darker common-input input-focus rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    </div>
                                    
                                </div>
                                
                                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                    
                                    <div class="w-full flex flex-col mb-3">
                                        <label class="font-semibold text-gray-600 py-2">Select a Route<abbr title="required">*</abbr></label>
                                        <select class="common-input input-focus block w-full  text-grey-darker  rounded-lg h-10 px-4 md:w-full" required="required" name="integration[city_id]" id="integration_city_id">
                                            <option value="">tractor-route</option>
                                            <option value="">machine-route</option>
                                           
                                        </select>
                                        <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this field.</p>
                                    </div>
                                    <div class="w-full flex flex-col mb-3">
                                        <label class="font-semibold text-gray-600 py-2">Select Status<abbr title="required">*</abbr></label>
                                        <select class="common-input input-focus block w-full  text-grey-darker   rounded-lg h-10 px-4 md:w-full" required="required" name="integration[city_id]" id="integration_city_id">
                                            <option value="">Active</option>
                                            <option value="">Deactive</option>
                                            
                                        </select>
                                        <p class="text-sm text-red-500 hidden mt-3" id="error">Please fill out this field.</p>
                                    </div>
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-gray-600 py-2">Description</label>
                                    <textarea required="" name="message" id="" class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block common-input input-focus w-full  text-grey-darker  rounded-lg py-4 px-4" placeholder="Enter your Service info" spellcheck="false"></textarea>
                                    <p class="text-xs text-gray-400 text-left my-3">You inserted 0 characters</p>
                                </div>
                                <p class="text-xs text-red-500 text-right my-3">Required fields are marked with an asterisk <abbr title="Required field">*</abbr></p>
                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">Cancel</button>
                                    <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:hover:bg-[#50b500]">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:text-[250px] varien absolute top-8 left-24 text-[#50b500]/5 z-0">Raitan</div>
        
    </main>
</section>

@endsection
