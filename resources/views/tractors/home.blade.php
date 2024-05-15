@extends('layouts.app')

@section('content')
  <section class=" home_appextra " aria-describedby="Cars list Page" style="padding-top: 90px;">
    <!-- <div class="">
      <div class=" fixed left-0 right-0 bg-gray-50 z-10 shadow-md">
        <div class="section-container d-flex justify-content-between ">
          <a href="/">
            <button
              class="flex items-center text-sm border rounded-lg py-1 px-2 space-x-2 border-gray-400 smooth-animate hover:bg-pistachio hover:scale-105 hover:text-gray-50"><svg
                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="16"
                width="16" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z">
                </path>
              </svg><span>Back to home</span>
            </button>
          </a>
          <div class="text-sm flex space-x-2 items-center">
            <span>Sort by :</span>
            <button class=" text-gray-50 border border-pistachio rounded-lg px-3 py-1.5 smooth-animate">Price : Low to
              high</button><button
              class="hover:bg-gray-300 border border-pistachio rounded-lg px-3 py-1.5 smooth-animate">Price : High to
              low</button>
          </div>
          <div class="flex items-center text-sm space-x-2" role="button"><svg stroke="currentColor" fill="none"
              stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
              width="1em" xmlns="http://www.w3.org/2000/svg">
              <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
            </svg><span>Filter</span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
              height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
              </path>
            </svg></div>
        </div>
      </div>
    </div> -->
  </section>

  <section aria-describedby="Cars list Page" class="mb-20">
    
    <div class="section-container">
      <div class="lg:flex lg:space-x-6">
        <div class="lg:min-w-[384px] lg:mt-0 mt-6">
          <div class="lg:fixed lg:w-96 bg-white rounded-lg z-10">
            <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-3">
              <div>
                <div class="flex justify-between items-center">
                  <h4 class="font-medium"></h4>
                </div>
                <div class="flex mt-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" class="mt-1 mr-1 text-pistachio min-w-[24px]" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                    </path>
                    <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="32"></circle>
                  </svg>
                  <div class="text-sm"><span class="block"> Hyderabad, Hyderabad</span><span
                      class="block text-xs">Mon, 6 May '24, 03:30 AM</span></div>
                </div>
              </div>
              <hr class="my-3 bg-pistachio">
              <div>
                <div class="flex justify-between items-center">
                  <h4 class="font-medium"></h4>
                </div>
                <div class="flex mt-2"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 512 512" class="mt-1 mr-1 text-red-500 min-w-[24px]" height="24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                      d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z">
                    </path>
                    <circle cx="256" cy="192" r="48" fill="none" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="32"></circle>
                  </svg>
                  <div class="text-sm"><span class="block">Hyderabad, Hyderabad</span><span
                      class="block text-xs">Tue, 7 May '24, 06:30 AM</span></div>
                </div>
              </div>
            </div>
            <div class=" mt-6 rounded-lg py-4 text-center bg-pear/20 shadow-md">
              <h5></h5>
              <p class="text-pistachio mt-2 font-medium"></p>
            </div>
          </div>
        </div>
        <div class="relative w-full">
          <div class="w-full flex flex-col col-span-2 space-y-4 lg:mt-0 mt-8 h-screen overflow-y-auto pb-5">
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractor1.jpg"
                          alt="..." class="w-40 h-28" width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span class="text-sm">
                        Manual, Desiel</span></div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,290</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div>
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Book
                      now</button></div>
                </div>
              </div>
            </div>
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img
                          src="images/tractors/tractors302.jpg" alt="..."
                          class="w-40 h-28" width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Soli Yanmar</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span class="text-sm">
                        Manual, Desiel</span></div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,520</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div>
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Book
                      now</button></div>
                </div>
              </div>
            </div>
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractors301.jpg" alt="..."
                          class="w-40 h-28" width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra Oja 2121</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span class="text-sm">
                        Automatic, Desiel</span></div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,570</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div>
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Book
                      now</button></div>
                </div>
              </div>
            </div>
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..."
                        class="w-40 h-28" width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span class="text-sm">
                        Manual, Desiel</span></div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,690</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div>
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Book
                      now</button></div>
                </div>
              </div>
            </div>
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractors303.jpg" alt="..."
                        class="w-40 h-28" width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Sonalika</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span class="text-sm">
                        Manual, Desiel</span></div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>1,740</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div>
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Book
                      now</button></div>
                </div>
              </div>
            </div>
            <div class=" border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..."
                        class="w-40 h-28" width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra OJA 3140 Tractor</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span class="text-sm">
                        Automatic, Desiel</span></div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>2,200</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div>
                  <div class="flex justify-center"><button id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Book
                      now</button></div>
                </div>
              </div>
            </div>
            <div class="disabled border border-pear/30 shadow-md shadow-pear/30 rounded-lg lg:p-4 p-2">
              <div class="flex justify-between">
                <div class="flex space-x-3">
                  <div>
                    <div class="w-40 h-28">
                      <div class="w-full h-full"><img src="images/tractors/tractor1.jpg" alt="..."
                        class="w-40 h-28" width="160" height="112"></div>
                    </div>
                  </div>
                  <div>
                    <h2 class="text-lg font-medium">Mahindra YUVRAJ</h2>
                    <div class="flex mt-1 text-sm items-center flex-wrap text-gray-500"><span class="text-sm">
                        Manual Desiel</span></div>
                  </div>
                </div>
                <div class="ml-4 flex flex-col items-stretch justify-between">
                  <div>
                    <div class="font-medium flex space-x-1 items-center mb-1"><svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z">
                        </path>
                      </svg><span>2,810</span></div><span class="text-xs block text-gray-600">for 135 kms without
                      fuel</span>
                  </div>
                  <div class="flex justify-center"><button disabled="" id="book-now-btn"
                      class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md">Book
                      now</button></div>
                </div>
              </div>
              <p class="text-sm text-center text-red-600 font-medium">You missed it</p>
            </div>
          </div>
          <div class="sticky bottom-4 mt-2">
            <div class="bg-white shadow-t-md border border-pear/60 p-2 rounded-xl text-sm grid grid-cols-2 gap-6">
              <div class="text-sm">
                <p>Horse Power</p>
                <div class="relative select-none">
                  <div
                    class=" flex overflow-x-auto overflow-y-hidden hide-scrollbar will-change-transform transition-all duration-300 cursor-grabbing relative flex rounded-full mt-4 mb-2 border sm:snap-none snap-x">
                    <button
                      class="bg-black text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">30HP
                      </button><button
                      class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">30 - 50HP
                      </button><button
                      class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">50 - 75HP
                      </button></div>
                </div>
              </div>
              <div>
                <p>Fuel choice</p>
                <div class="grid grid-cols-2 border rounded-full mt-4 mb-2"><button
                    class="bg-black text-sm py-2 text-pistachio rounded-full smooth-animate">Without
                    Fuel</button><button
                    class="hover:bg-gray-200 text-sm py-2 text-pistachio rounded-full smooth-animate">With Fuel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  


  


  
@endsection