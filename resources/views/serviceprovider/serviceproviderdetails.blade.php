@extends('layouts.app')

@section('content')



<nav class="bg-grey-light w-full rounded-md" style="margin-top: 5rem; padding-left: 5rem; position: absolute">
    <ol class="list-reset flex">
        <li>
            <a href="#"
                class="text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400">Home</a>
        </li>
        <li>
            <span class="mx-2 text-neutral-400">></span>
        </li>
        <li>
            <a href="#"
                class="text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400">Implementors</a>
        </li>
        <li>
            <span class="mx-2 text-neutral-400">></span>
        </li>
        <li class="text-neutral-400">Product Details</li>
    </ol>
</nav>

<section class=" home_appextra " aria-describedby="Cars list Page" style="padding-top: 140px;">
    <div class="section-container" style="opacity: 1;">
        <section aria-describedby="Book car Page" class="mb-20 section-container">

            <div class="max-w-5xl mx-auto border rounded-lg shadow-sm ">
                <div class="sm:px-6 px-4 py-4 lg:px-2">
                    <div class="flex">
                        <div class="w-40 h-28">
                            <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..."
                                    class="w-40 h-28" width="160" height="112"></div>
                        </div>
                        <div class="p-11">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>

                        </div>
                        <div class="w-40 h-28">
                            <div class="w-full h-full"><img src="/images/implementors/cultivator.jpg" alt="..."
                                    class="w-40 h-28" width="160" height="112"></div>
                        </div>
                        <div class="ml-10">
                            <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor With Cultivator</h2>
                            <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span
                                    class="text-sm">Manual, Desiel</span></div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                            <div class="flex mt-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio" height="24" width="24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                                        d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                                    </path>
                                    <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32"></circle>
                                </svg>
                                <div class="text-sm"><span class="block">Bachupally, K V Rangareddy District
                                    </span><span class="block">Hyderabad - 500090</span></div>
                            </div>
                        </div>



                    </div>
                    <div class="px-6 ">
                        <div class="text-xs mt-4 text-gray-500">
                            <div class=" flex items-center ">
                                <p>Includes 80 kms without fuel</p><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 16 16" role="button" class="text-pistachio ml-2"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z">
                                    </path>
                                </svg>
                            </div>
                            <p class="mt-2">Extra Kms @ 9/km</p>

                        </div>

                        <!-- <div class="flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl  p-3 mx-auto shadow-lg border border-gray-200 bg-white">


                            <div class="flex justify-between items-center">

                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <p class="text-gray-600 font-bold text-sm ml-1">
                                        4.96
                                        <span class="text-gray-500 font-normal">(76 reviews)</span>
                                    </p>
                                </div>

                                <div
                                    class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                                    Superhost
                                </div>
                            </div>
                            <h3 class="font-black text-gray-800 md:text-3xl text-xl">The Majestic and Wonderful Bahamas
                            </h3>
                            <p class="md:text-lg text-gray-500 text-base">The best kept secret of The Bahamas is the
                                country’s sheer size and diversity. With 16 major islands, The Bahamas is an unmatched
                                destination</p>
                            <p class="text-xl font-black text-gray-800">
                                $110
                                <span class="font-normal text-gray-600 text-base">/night</span>
                            </p>

                        </div> -->




                        <div class="px-6 mb-5 shadow-lg border border-gray-200">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full flex justify-center">
                                    <div class="relative">
                                        <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true"
                                            class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                    </div>
                                </div>
                                <div class="w-full text-center ">
                                    <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                        <div class="p-3 text-center">
                                            <span
                                                class="text-xl font-bold block uppercase tracking-wide text-slate-700">3,360</span>
                                            <span class="text-sm text-slate-400">Deals</span>
                                        </div>
                                        <div class="p-3 text-center">
                                            <span
                                                class="text-xl font-bold block uppercase tracking-wide text-slate-700">2,454</span>
                                            <span class="text-sm text-slate-400">Services</span>
                                        </div>

                                        <div class="p-3 text-center">
                                            <span
                                                class="text-xl font-bold block uppercase tracking-wide text-slate-700">9AM
                                                - 6PM</span>
                                            <span class="text-sm text-slate-400">Timmings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Krishna</h3>
                                <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                    <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Bachupally,
                                    Hyderabad
                                </div>
                            </div>
                            <div class="mt-6 py-6 border-t border-slate-200 text-center">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full px-4">
                                        <p class="font-light leading-relaxed text-slate-600 mb-4">Urna id volutpat lacus
                                            laoreet non curabitur gravida arcu. Lorem ipsum dolor sit amet consectetur
                                            adipiscing elit duis tristique. Ante in niis aenean et tortor at risus
                                            viverra.</p>
                                        <a href="javascript:;"
                                            class="font-normal text-slate-700 hover:text-slate-400">Follow Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="max-w-7xl mx-auto bg-white rounded-lg overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-300 border border-gray-300">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider border border-gray-300">
                                            Tillage Width (mm / inch)</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider border border-gray-300">
                                            1500 / 59"</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider border border-gray-300">
                                            1750 / 69"</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider border border-gray-300">
                                            2000 / 79"</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider border border-gray-300">
                                            2250 / 89"</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            Gearbox</td>
                                        <td colspan="4"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            Semi Automatic Multi (2 Speed)</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            Side Transmission</td>
                                        <td colspan="4"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            Gear Drive</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            Type of Blades</td>
                                        <td colspan="4"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            L & C Type</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            No. of Flanges</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            6</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            7</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            8</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            9</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            No. of Blades</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            36</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            42</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            48</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            54</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            Gear Box Overload Protection</td>
                                        <td colspan="4"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            Shear Bolt / Slip Clutch</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            Weight (Kg./Lbs. Approx.)</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            465 / 1025</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            495 / 1091</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            525 / 1157</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            555 / 1224</td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-gray-300">
                                            Tractor Power (HP)</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            40-45</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            45-50</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            50-60</td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            60-70</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="modal" class="modal">
                            <div class="modal-content">
                                <span class="close-btn" onclick="closeModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                        <path
                                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                        </path>
                                    </svg>
                                </span>
                                <img id="modalImage" src="" alt="">
                                <p id="modalDescription" class="text-center text-black"></p>
                            </div>
                        </div>

                        <div class="px-2 mt-5">
                            <div class="flex -mx-2">
                                <div class="w-1/6 px-2">
                                    <div class="bg-gray-400">
                                        <a href="#"
                                            onclick="openModal('https://picsum.photos/640/480', 'Random Image One Description'); return false;"
                                            class="cursor-pointer">
                                            <img alt="Placeholder" class="object-fit w-full"
                                                src="https://picsum.photos/640/480">
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/6 px-2">
                                    <div class="bg-gray-400">
                                        <a href="#"
                                            onclick="openModal('https://picsum.photos/640/480', ''); return false;"
                                            class="cursor-pointer">
                                            <img alt="Placeholder" class="object-fit w-full"
                                                src="https://picsum.photos/640/480">
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/6 px-2">
                                    <div class="bg-gray-400">
                                        <a href="#"
                                            onclick="openModal('https://picsum.photos/640/480', ''); return false;"
                                            class="cursor-pointer">
                                            <img alt="Placeholder" class="object-fit w-full"
                                                src="https://picsum.photos/640/480">
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/6 px-2">
                                    <div class="bg-gray-400">
                                        <a href="#"
                                            onclick="openModal('https://picsum.photos/640/480', ''); return false;"
                                            class="cursor-pointer">
                                            <img alt="Placeholder" class="object-fit w-full"
                                                src="https://picsum.photos/640/480">
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/6 px-2">
                                    <div class="bg-gray-400">
                                        <a href="#"
                                            onclick="openModal('https://picsum.photos/640/480', 'This one has description'); return false;"
                                            class="cursor-pointer">
                                            <img alt="Placeholder" class="object-fit w-full"
                                                src="https://picsum.photos/640/480">
                                        </a>
                                    </div>
                                </div>
                                <div class="w-1/6 px-2">
                                    <div class="bg-gray-400">
                                        <a href="#"
                                            onclick="openModal('https://picsum.photos/640/480', ''); return false;"
                                            class="cursor-pointer">
                                            <img alt="Placeholder" class="object-fit w-full"
                                                src="https://picsum.photos/640/480">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border rounded-lg mt-6 sm:px-4 px-2 py-2 sm:shadow-none shadow-md">
                            <h4 class="font-medium mb-4">Things good to know</h4>
                            <div class="relative select-none">
                                <div
                                    class=" flex overflow-x-auto overflow-y-hidden hide-scrollbar will-change-transform transition-all duration-300 cursor-grabbing relative gap-3 sm:snap-none snap-x">
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            24*7
                                            Assistance</p>

                                    </div>
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            Well Maintained &amp; Serviced </p>

                                    </div>
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            Wide
                                            Range </p>

                                    </div>
                                    <div
                                        class="grid grid-cols-3 bg-gradient-to-r from-pistachio to-pear px-4 rounded-2xl min-w-[220px] max-w-[220px] max-h-28 min-h-[112px] place-items-center">
                                        <p
                                            class="text-center col-span-2 font-semibold text-sm text-gray-50 whitespace-pre-wrap mr-auto">
                                            Pick &amp; Drop
                                            Anywhere</p>

                                    </div>
                                </div>
                            </div>
                            <div class="px-2 mt-4 text-sm text-gray-500 flex flex-col gap-1"><a rel="noreferrer"
                                    class="growing-link w-fit" target="_blank" href="/terms-and-conditions/">Terms
                                    &amp; Conditions</a><a rel="noreferrer" class="growing-link w-fit" target="_blank"
                                    href="/fuel-policy/">Fuel Policy</a><a rel="noreferrer" class="growing-link w-fit"
                                    target="_blank" href="/cancellation-terms/">Cancellation Policy</a></div>
                        </div>
                        <div
                            class="relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-xl mt-16">
                        </div>



                    </div>
                </div>
                <div
                    class="shadow-t-lg sm:rounded-xl rounded-t-3xl pb-4 pt-2 sm:px-6 lg:px-2 px-2 sm:mt-4 sm:sticky fixed bottom-0 left-0 right-0 bg-white">

                    <div class="flex sm:flex-row flex-col sm:px-6 px-2 sm:justify-between sm:items-center">
                        <div class="sm:block flex space-x-2 justify-between items-center">

                        </div>
                        <div class="sm:mt-0">
                            <!-- <div>
                                <div role="button" class="items-center flex text-sm text-red-600">

                                    <p class="ml-1">Apply coupon</p>
                                </div>
                            </div> -->
                            <button id="checkout-proceed-to-pay"
                                class="proceed-to-pay action-btn sm:inline-block block sm:w-auto w-full sm:py-2 py-3 px-4 rounded-xl text-sm whitespace-nowrap"><span>Call
                                    Now</span></button>
                        </div>
                    </div><button id="booking-success" style="display: none;"></button>
                </div>
            </div>
        </section>
    </div>
</section>
<script>
    function openModal(src, desc) {
        document.getElementById('modal').style.display = 'flex';
        document.getElementById('modalImage').src = src;
        document.getElementById('modalDescription').textContent = desc;
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    window.addEventListener('click', function (event) {
        if (event.target === document.getElementById('modal')) {
            closeModal();
        }
    });
</script>



@endsection