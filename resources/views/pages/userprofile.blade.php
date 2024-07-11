@extends('layouts.app')

@section('content')
<div class="md:section-container md:py-6 mt-20">
        <div class="flex md:gap-6">
        @include('layouts.myProfileMenu')
            <div class="w-full border rounded-xl shadow-md h-fit">
                <div style="opacity: 1;">
                    <div class="section-container">
                        <div class="md:block hidden">
                            <h2 class="py-2 font-medium text-xl">My Profile</h2>
                            <hr>
                            <p class="my-2 text-sm">Account Information</p>
                        </div>
                        <div class="md:py-4 py-10 w-full border-gray-400/50">
                            <div class="lg:flex lg:items-start">
                                <div class="flex items-center justify-center mb-10">
                                    <div class="relative rounded-full shadow-xl">
                                        <div class="rounded-full w-32 h-32 object-cover">
                                            <div class="w-full h-full"><img src="images/farmer1.png" alt="..."
                                                    class="rounded-full w-32 h-32 object-cover" width="128"
                                                    height="128"></div>
                                        </div>
                                        <div
                                            class="cursor-pointer absolute -right-0 bottom-2 bg-black shadow-xl text-pistachio p-1 rounded-full">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="20" width="20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="7.499" cy="9.5" r="1.5"></circle>
                                                <path d="m10.499 14-1.5-2-3 4h12l-4.5-6z"></path>
                                                <path
                                                    d="M19.999 4h-16c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-16 14V6h16l.002 12H3.999z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 lg:px-20 sm:px-5 gap-4 mb-4 w-full">
                                    <div><label for="name" class="text-sm mb-1 inline-block">Name</label><input
                                            type="text" name="name"
                                            class="common-input input-focus text-sm py-3 rounded-xl px-2"
                                            placeholder="Enter your name" value="Raja Vardhinedi"></div>
                                    <div><label for="email" class="text-sm mb-1 inline-block">Email</label><input
                                            type="email" name="email"
                                            class="common-input input-focus text-sm py-3 rounded-xl px-2"
                                            placeholder="Enter your email address" value=""></div><input
                                        accept="image/*" type="file" hidden="">
                                    <div><label for="phone" class="text-sm mb-1 inline-block">Phone Number</label>
                                        <div class="relative"><input disabled="" maxlength="10" type="tel" name="phone"
                                                class="common-input input-focus text-sm py-3 rounded-xl px-2"
                                                placeholder="Enter your phone number" value="">
                                            <div class="absolute text-sm top-0 right-0 bottom-0 p-2 flex items-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 1024 1024" role="button"
                                                    class="hover:scale-110 smooth-animate fill-pistachio stroke-pistachio"
                                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Click to change phone number</title>
                                                    <path d="M761.1 288.3L687.8 215 325.1 577.6l-15.6 89 88.9-15.7z">
                                                    </path>
                                                    <path
                                                        d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div><label for="phone" class="text-sm mb-1 inline-block">Date of birth</label>
                                        <div class="relative cursor-pointer w-full"><input
                                                class="common-input input-focus text-sm py-3 rounded-xl px-2"
                                                readonly="" placeholder="Select your date of birth" value=""><button
                                                type="button"
                                                class="top-0 right-0 absolute  h-full flex items-center p-2"><svg
                                                    stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 16 16"
                                                    class="undefined hover:scale-110 smooth-animate fill-pistachio stroke-pistachio"
                                                    height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5H2.545c-.3 0-.545.224-.545.5zm6.5 5a.5.5 0 0 0-1 0V10H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V11H10a.5.5 0 0 0 0-1H8.5V8.5z">
                                                    </path>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- <div class="sm:px-6 px-2 py-4 lg:px-2">
                                <h2>Driving license</h2>
                                <div class="mt-4 grid lg:grid-cols-2 gap-6 mb-3">
                                    <div>
                                        <p class="text-sm">Front side</p>
                                        <div
                                            class="p-4 lg:h-56 h-48 w-full flex items-center justify-center border rounded-lg mt-3 cursor-pointer">
                                            <span class="text-sm text-center text-gray-500">Click here to upload the
                                                front side of your driving license.</span></div>
                                    </div>
                                    <div>
                                        <p class="text-sm">Back side</p>
                                        <div
                                            class="p-4 lg:h-56 h-48 w-full flex items-center justify-center border rounded-lg mt-3 cursor-pointer">
                                            <span class="text-sm text-center text-gray-500">Click here to upload the
                                                back side of your driving license.</span></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="min-h-[25px] text-sm text-center"></div><button
                                class="action-btn space-x-2 text-sm py-2 px-6 mx-auto flex justify-center items-center mt-3 rounded-xl"><span>Save
                                    Changes</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection