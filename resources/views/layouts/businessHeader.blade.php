<header class="bg-white shadow-md fixed top-0 w-full z-50 transition duration-500 ease-in-out transform">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0"><a role="link" class=" " href="/">
          <img class="h-16 w-16" src="{{ asset('images/raitanlogo.png')}}" alt="Raitan Logo">
          </a>
            
          </div>
          <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
            <a href="#" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium">List Your Business</a>
            
          </div>
        </div>
        <div class="flex items-center">
          <a href="tel:8888888888" class="text-gray-900 inline-flex items-center">
            <img class="h-4 w-4 mr-2" src="../images/icons/call.svg" alt="Call icon">
            <a id="navbarDropdown" class="headnav_item_text font14 fw500 colorFFF dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Hello&nbsp;&nbsp;</a>
            @if(Auth::guard('customer')->check())
                <span>{{ Auth::guard('customer')->user()->name }}</span>
            @else
                <span>User!</span>
            @endif
          </a>
        </div>
      </div>
    </div>
  </header>