 <!-- Header -->
 <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
     <div
         class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-custom-green-main dark:bg-gray-800 border-none">
         <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden"
             src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
         <span class="hidden md:block">ADMIN</span>

     </div>
     <div class="flex justify-between items-center h-14 bg-custom-green-main dark:bg-gray-800 header-right">
         <div
             class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
             <button class="outline-none focus:outline-none">
                 <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                     <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                 </svg>
             </button>
             <input type="search" name="" id="" placeholder="Search"
                 class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
         </div>
         <ul class="flex items-center">
             <!-- <li>
                            <button aria-hidden="true" @click="toggleTheme"
                                class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
                                <svg x-show="isDark" width="24" height="24"
                                    class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                                <svg x-show="!isDark" width="24" height="24"
                                    class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </button>
                        </li> -->
             <li>
                 <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
             </li>
             <li>
                 <a href="{{route('logout')}}" class="flex items-center mr-4 hover:text-blue-100" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                     <span class="inline-flex mr-1">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                             </path>
                         </svg>
                     </span>
                     Logout
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
             </li>
         </ul>
     </div>
 </div>
 <!-- ./Header -->

 <!-- Sidebar -->
 <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-custom-green-light dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
     <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
         <ul class="flex flex-col py-4 space-y-1">
             <li class="px-5 hidden md:block">
                 <div class="flex flex-row items-center h-8">
                     <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                 </div>
             </li>
             <li>
                 <a href="{{ url('/raitan_admin/master-home') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-custom-green-main dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <i class="fas fa-tachometer-alt"></i>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                 </a>
             </li>

             <li>
                 <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-custom-green-main text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6" aria-controls="user-management-dropdown" data-collapse-toggle="user-management-dropdown">
                     <span class="inline-flex justify-center items-center ml-4">
                         <i class="fas fa-book"></i>
                     </span>
                     <span class="flex-1 ml-3 text-left whitespace-nowrap text-sm" sidebar-toggle-item>Master Pages</span>
                     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                 </a>
                 <ul id="user-management-dropdown" class="hidden py-2 space-y-2">
                     <li>
                         <a href="{{ url('/raitan_admin/roles-home') }}" class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800 pl-11 text-sm">Roles</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/admin_register') }}" class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800 pl-11 text-sm">Registration</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/approve_permissions') }}" class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800 pl-11 text-sm">Approve Permissions</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-custom-green-main dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                     <span class="inline-flex justify-center items-center ml-4">
                         <i class="fas fa-home"></i>
                     </span>
                     <span class="flex-1 ml-3 text-left whitespace-nowrap text-sm" sidebar-toggle-item>Home Page</span>
                     <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                 </a>
                 <ul id="dropdown-example" class="hidden py-2 space-y-2">
                 
                 <li>
                         <a href="{{ route('master.service') }}"
                             class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800  pl-11 text-sm">Services</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/machines') }}"
                             class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800  pl-11 text-sm">Machines</a>
                     </li>

                     <li>
                         <a href="{{ url('/raitan_admin/repairsandservices') }}"
                             class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800  pl-11 text-sm">Repair and Services</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/agriculture_labour') }}"
                             class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800  pl-11 text-sm">Agriculture Labour</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/sprayers') }}"
                             class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800  pl-11 text-sm">Sprayers</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/implementors') }}"
                             class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800  pl-11 text-sm">Implementors</a>
                     </li>
                     
                 </ul>
             </li>
             <li>
                 <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-custom-green-main text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6" aria-controls="manage-services-dropdown" data-collapse-toggle="manage-services-dropdown">
                     <span class="inline-flex justify-center items-center ml-4">
                         <i class="fas fa-cog"></i>
                     </span>
                     <span class="flex-1 ml-3 text-left whitespace-nowrap text-sm" sidebar-toggle-item>Service Details</span>
                     <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                 </a>
                 <ul id="manage-services-dropdown" class="hidden py-2 space-y-2">
                 <li>
                         <a href="{{ url('/raitan_admin/implements') }}"
                             class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800  pl-11 text-sm">Implements</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-custom-green-main text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 pr-6" aria-controls="listing-pages-dropdown" data-collapse-toggle="listing-pages-dropdown">
                     <span class="inline-flex justify-center items-center ml-4">
                         <i class="fas fa-list"></i>
                     </span>
                     <span class="flex-1 ml-3 text-left whitespace-nowrap text-sm" sidebar-toggle-item>Listing Pages</span>
                     <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                 </a>
                 <ul id="listing-pages-dropdown" class="hidden py-2 space-y-2">
                     <li>
                         <a href="{{ route('service-seeker') }}" class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800 pl-11 text-sm">Service Seekers</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/service-providers') }}" class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800 pl-11 text-sm">Service Provider</a>
                     </li>
                     <li>
                         <a href="{{ url('/raitan_admin/Business-contact') }}" class="flex items-center w-full p-2 text-base font-normal text-white-600 hover:text-white-800 pl-11 text-sm">Business Contact</a>
                     </li>
                 </ul>
             </li>
         </ul>
         <!-- <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p> -->
     </div>
 </div>
 <!-- ./Sidebar -->

 <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>