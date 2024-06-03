@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')


<section class=" home_appextra "  style="justify-content: center;">
        <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="text-center">
              <p class="text-base font-semibold text-red-600">404</p>
              <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Page not found</h1>
              <p class="mt-6 text-base leading-7 text-gray-600">Sorry, we couldn’t find the page you’re looking for.</p>
              <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-md action-btn px-3.5 py-2.5 text-sm font-semibold  shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">Go back home</a>
                <a href="#" class="text-sm font-semibold text-gray-900">Contact support <span aria-hidden="true">&rarr;</span></a>
              </div>
            </div>
            <div class="lg:text-[250px] varien absolute top-8 left-24 text-[#50b500]/5  z-0    ">
            Raitan
        </div>
          </main>

    </section>



@endsection