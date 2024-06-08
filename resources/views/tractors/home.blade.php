@extends('layouts.app')

@section('content')
<nav class="bg-grey-light w-full rounded-md" style="margin-top: 5rem; margin-left: 5rem;">
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
    
    <li class="text-neutral-400">Implementors</li>
  </ol>
</nav>


<section aria-describedby="Cars list Page" class="mb-20">

  <div class="section-container">
    <div class="lg:flex lg:space-x-6">
     

      <div class="relative w-full">

        <div class="sticky  mt-2">
          <div class="bg-white shadow-t-md border border-pear/60 p-2 rounded-xl text-sm grid grid-cols-2 gap-6">
            <div class="text-sm">
              <p>Horse Power</p>
              <div class="relative select-none">
                <div
                  class=" flex overflow-x-auto overflow-y-hidden hide-scrollbar will-change-transform transition-all duration-300 cursor-grabbing relative flex rounded-full mt-4 mb-2 border sm:snap-none snap-x">
                  <button id="filter-30hp" class="text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">30HP</button>
          <button id="filter-30-50hp" class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">30 - 50HP</button>
          <button id="filter-50-75hp" class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">50 - 75HP</button>
                </div>
              </div>
            </div>
            <!-- <div>
              <p>Fuel choice</p>
              <div class="grid grid-cols-2 border rounded-full mt-4 mb-2"><button
                  class="bg-black text-sm py-2 text-pistachio rounded-full smooth-animate">Without
                  Fuel</button><button
                  class="hover:bg-gray-200 text-sm py-2 text-pistachio rounded-full smooth-animate">With Fuel</button>
              </div>
            </div> -->
          </div>
        </div>
        <div class="w-full flex flex-col col-span-2 space-y-4 lg:mt-0 mt-8 h-screen overflow-y-auto pb-5">
          <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="30">
            <div class="tractor-block border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between clickable">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full">
                        <img src="images/tractors/tractor1.jpg" alt="..." class="w-40 h-28" width="160" height="112">
                      </div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">

                      <div class="flex mt-2 mb-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                          </path>
                          <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></circle>
                        </svg>
                        <div class="text-sm"><span class="block"> Bachupally, K V Rangareddy District</span><span
                            class="block text-xs">Hyderabad - 500090</span></div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <!-- <div>
                    <div class="font-medium flex space-x-1 items-center mb-1">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                        width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg>
                      <span>1,290</span>
                    </div>
                    <span class="text-xs block text-gray-600">for 135 kms without fuel</span>
                  </div> -->
                  <div class="flex justify-center">

                    <button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Call
                      now</button>
                  </div>
                </div>
              </div>

            </div>
          </a>
          <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="50">
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractors302.jpg" alt="..." class="w-40 h-28"
                          width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Soli Yanmar</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">

                      <div class="flex mt-2 mb-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                          </path>
                          <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></circle>
                        </svg>
                        <div class="text-sm"><span class="block"> Bachupally, K V Rangareddy District</span><span
                            class="block text-xs">Hyderabad - 500090</span></div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <!-- <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,520</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div> -->
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Call
                      now</button></div>
                </div>
              </div>
            </div>
          </a>

          <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="50">
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractors301.jpg" alt="..." class="w-40 h-28"
                          width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra Oja 2121</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">

                      <div class="flex mt-2 mb-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                          </path>
                          <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></circle>
                        </svg>
                        <div class="text-sm"><span class="block"> Bachupally, K V Rangareddy District</span><span
                            class="block text-xs">Hyderabad - 500090</span></div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <!-- <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,570</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div> -->
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Call
                      now</button></div>
                </div>
              </div>
            </div>
          </a>
          <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="50">
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..." class="w-40 h-28"
                          width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">

                      <div class="flex mt-2 mb-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                          </path>
                          <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></circle>
                        </svg>
                        <div class="text-sm"><span class="block"> Bachupally, K V Rangareddy District</span><span
                            class="block text-xs">Hyderabad - 500090</span></div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <!-- <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,690</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div> -->
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Call
                      now</button></div>
                </div>
              </div>
            </div>
          </a>
          <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="30">
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractors303.jpg" alt="..." class="w-40 h-28"
                          width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Sonalika</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">

                      <div class="flex mt-2 mb-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                          </path>
                          <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></circle>
                        </svg>
                        <div class="text-sm"><span class="block"> Bachupally, K V Rangareddy District</span><span
                            class="block text-xs">Hyderabad - 500090</span></div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <!-- <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,740</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div> -->
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Call
                      now</button></div>
                </div>
              </div>
            </div>
          </a>
          <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="50">
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..." class="w-40 h-28"
                          width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">

                      <div class="flex mt-2 mb-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                          </path>
                          <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></circle>
                        </svg>
                        <div class="text-sm"><span class="block"> Bachupally, K V Rangareddy District</span><span
                            class="block text-xs">Hyderabad - 500090</span></div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <!-- <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>2,200</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div> -->
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Call
                      now</button></div>
                </div>
              </div>
            </div>
          </a>
          <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="50">
            <div class="disabled border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..." class="w-40 h-28"
                          width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra YUVRAJ</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500 mb-1">

                      <div class="flex mt-2 mb-1"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                          viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                          </path>
                          <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></circle>
                        </svg>
                        <div class="text-sm"><span class="block"> Bachupally, K V Rangareddy District</span><span
                            class="block text-xs">Hyderabad - 500090</span></div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <!-- <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>2,810</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div> -->
                  <div class="flex justify-center"><button disabled="" id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Call
                      now</button></div>
                </div>
              </div>
              <p class="text-sm text-center text-red-600 font-medium">You missed it</p>
            </div>
          </a>
        </div>
      </div>
      <div>
            <p class="text-sm tracking-[0.1px] mb-3 mt-1 md:mt-0"></p>
            <div
              class="w-full p-4 bg-neutral-10 dark:bg-neutral-900 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-t-md border">
              <!-- Lists -->
              <div
                class="w-full md:w-[360px] flex flex-col py-2 rounded-xl overflow-hidden bg-neutral-10 dark:bg-neutral-900 max-h-60 overflow-y-auto">
                
                @foreach($services as $service)
                <!-- lists & image -->
                <a href="<?php echo env('APP_URL'). '/' .$service->route; ?>">
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="{{ asset('service_images').'/'.$service->image }}" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">{{ $service->service_name }}</p>
                    <span class="text-sm tracking-[0.25px]">{{ $service->description }}</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div></a>
                @endforeach


                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/tractors/jcb1.png" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Earth Movers</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/farmer1.png" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Workers</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/harvestor1.png" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Harvestor</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/dronesprayer.png" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Drones</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/machine/paddytransplanter.jpeg" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Paddy Transplantor</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/mechanic.png" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Mechanics</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/man_power/farming_women.jpg" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Farming Labour</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
                <!-- lists & image -->
                <div
                  class="min-h-[3.5rem] flex flex-row items-center gap-4 py-2 pl-4 pr-6 cursor-pointer border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
                  <div
                    class="w-14 h-14 flex items-center justify-center title-md font-bold bg-primary-600 text-white dark:bg-primary-200 dark:text-neutral-900">
                    <img src="images/man_power/chilli_picker.jpg" alt="media 2" class="w-14 h-14">
                  </div>
                  <div class="flex flex-col flex-grow">
                    <p class="tracking-[.03125em]">Cotton?Chilli Picker</p>
                    <span class="text-sm tracking-[0.25px]">Supporting line text</span>
                  </div>
                  <span class="text-[11px] leading-4 tracking-[.045em] font-medium"></span>
                </div>
              </div>

              <!-- Lists -->

            </div>
          </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = {
      '30': document.getElementById('filter-30hp'),
      '30-50': document.getElementById('filter-30-50hp'),
      '50-75': document.getElementById('filter-50-75hp')
    };
    const tractorCards = document.querySelectorAll('.tractor-card');

    filterButtons['30'].addEventListener('click', () => filterTractors('30'));
    filterButtons['30-50'].addEventListener('click', () => filterTractors('30-50'));
    filterButtons['50-75'].addEventListener('click', () => filterTractors('50-75'));

    function filterTractors(hpRange) {
      filterButtons[hpRange].classList.add('bg-black');
      tractorCards.forEach(card => {
        const hp = parseInt(card.getAttribute('data-hp'), 10);
        let showCard = false;

        if (hpRange === '30' && hp === 30) {
          showCard = true;
        } else if (hpRange === '30-50' && hp > 30 && hp <= 50) {
          showCard = true;
        } else if (hpRange === '50-75' && hp > 50 && hp <= 75) {
          showCard = true;
        }

        if (showCard) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });

      // Update button styles
      Object.keys(filterButtons).forEach(key => {
        if (key === hpRange) {
          filterButtons[key].classList.add('bg-black');
          filterButtons[key].classList.remove('hover:bg-gray-200');
        } else {
          filterButtons[key].classList.remove('bg-black');
          filterButtons[key].classList.add('hover:bg-gray-200');
        }
      });
    }

    // Initially show only 30HP tractors
    filterTractors('30');
  });
</script>








@endsection