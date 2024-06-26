@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')

<!-- <nav class="bg-grey-light w-full rounded-md" style="margin-top: 5rem; margin-left: 5rem; position: absolute;">
  <ol class="list-reset flex">
    <li>
      <a
        href="#"
        class="text-primary transition duration-150 ease-in-out hover:text-primary-accent-300 focus:text-primary-accent-300 active:text-primary-accent-300 motion-reduce:transition-none dark:text-primary-400"
        >Home</a
      >
    </li>
    <li>
      <span class="mx-2 text-neutral-400">></span>
    </li>
    
    <li class="text-neutral-400">Services</li>
  </ol>
</nav> -->

<section class=" bg-green-500ray-50 pb-24 relative  "  style="padding-top: 140px;justify-content: center;">
        <div class="mx-auto   ">
            <div class="relative container mx-auto h-full       lg:px-8">
                <div class="px-4 py-4      lg:px-8 lg:pt-20">
                    <div class="grid gap-10 lg:grid-cols-2 mx-24">
                        <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
    
                            <div class="max-w-xl mb-6">
                                <h2 class="max-w-lg mb-6 text-6xl font-bold       leading-normal">
                                    Key Sectors <br> We Serve
                                </h2>
    
                            </div>
                            <div>
                                <a href="http://192.168.4.146/spinksindia/industry" aria-label=""
                                    class="inline-flex items-center justify-start w-full font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
                                    Learn more
                                    <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                                        <path
                                            d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-full   -mx-4 lg:pl-10">
                            <div class="flex flex-col items-end px-3">
                                <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
                                    src="images/implementors/implementor-banner.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                                    alt="">
                                <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
                                    src="images/man_power/farm_worker.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                                    alt="">
                            </div>
                            <div class="px-3">
                                <img class="object-cover w-40 h-40 rounded shadow-lg sm:hbg-green-500ray-50-64 xl:h-80 sm:w-full xl:w-80"
                                    src="images/Banners/banner5.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-2 mx-24">
                    <div class="group flex  flex-grow  ">
                        <a href="#"
   class="flex flex-grow justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500] transition-all duration-1000 ease-in-out relative">
    <!-- Left vertical line effect -->
    <div class="absolute -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20 z-10 transition-all duration-700 ease-in-out">
    </div>
    <!-- Right vertical line effect -->
    <div class="absolute -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20 z-10 transition-all duration-700 ease-in-out">
    </div>
    <!-- Text Content -->
    <div class="relative">
        <h3 class="p-0 m-0">Automotive Industry</h3>
    </div>
</a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Architectural &amp; Furniture</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500] transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Backpacks and Umbrella</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]   transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Closure and Bottle caps</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Cosmetics industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">FMCG, labels, Packaging</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Footwear industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500] transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Rubber industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]   transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Sports industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Glass industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Home appliances/ Electrical industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Jewellery industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500] transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Heat transfers</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]   transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Medical industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Mobile industry</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Tagless printing</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500]  transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Toys and Baby products</h3>
                            </div>
    
                        </a>
                    </div>
                    <div class="group flex  flex-grow  ">
                        <a href="#"
                            class="flex flex-grow  justify-between rounded-lg overflow-hidden bg-white p-5 py-2 shadow-lg text-black group-hover:text-[#50b500] transition-all duration-1000 ease-in-out relative ">
                            <div
                                class=" absolute  -top-0 left-0 w-5 h-0.5 group-hover:h-full group-hover:left-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
                            <div
                                class=" absolute  -top-0 right-0 w-5 h-0.5 group-hover:h-full group-hover:right-0 group-hover:w-1/2 bg-[#50b500]/20     z-10 transition-all duration-700 ease-in-out ">
                            </div>
    
                            <div class="relative">
                                <h3 class="p-0 m-0  ">Utensils industry</h3>
                            </div>
    
                        </a>
                    </div>
    
    
                </div>
            </div>
    
        </div>
        <div class="lg:text-[250px] varien absolute top-8 left-24 text-[#50b500]/5  z-0    ">
            Raitan
        </div>
    </section>


@endsection