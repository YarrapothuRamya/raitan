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
        <section aria-describedby="Book implement Page" class="mb-20 section-container">

            <div class="max-w-5xl mx-auto border rounded-lg shadow-sm ">
                <div class="sm:px-6 px-4 py-4 lg:px-2">
                    <div class="flex">
                       
                    <div class="w-72 h-72">
                            <div class="w-full h-full"><img src='{{ asset("machine_images")."/".$machines->image }}' alt="..."
                                    class="w-72 h-72" ></div>
                        </div>
                        <div class="p-11">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>

                        </div>
                        <div class="w-52 h-52">
                        
                            <div class="w-full h-full"><img src='{{ asset("implement_images")."/".$horse_power_implements->image }}' alt="..."
                                    class="w-52 h-52" ></div>
                        </div>
                        <div class="ml-10 w-64">
                            <h2 class="text-lg font-medium">{{ $horse_power_implements->name }} {{ $machines->name}}</h2>
                            <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span
                                     class="text-sm">{{ $horse_power_implements->name }} {!!$horse_power_implements->description!!}</span></div>
                            
                            
                        </div>



                    </div>
                    <div class="px-6 ">
                        <!-- <div class="text-xs mt-4 text-gray-500">
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

                        </div> -->

                        <div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                            
                                      
                                            <img src='{{ asset("implement_images")."/".$horse_power_implements->description_image }}'  style="width:100%; height:auto"
                                    class="w-52 h-52" >
                                    
                                        <!-- <td colspan="4"
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border border-gray-300">
                                            Semi Automatic Multi (2 Speed)</td> -->
                                    </tr>
                                    <!-- <tr>
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
                                            60-70</td> -->
                                    
                        </div>

<div>Disclaimer:
<br><br>
    Some time the product details may differ from the given information so it is customer responsibility to cross-check the details before confirming the services.
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

                            <a id="service-provider" href="{{ route('serviceprovider.home') }}"
                                class="proceed-to-pay action-btn sm:inline-block block sm:w-auto w-full sm:py-2 py-3 px-4 rounded-xl text-sm whitespace-nowrap">
                                <span>Service Providers</span>
                            </a>
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