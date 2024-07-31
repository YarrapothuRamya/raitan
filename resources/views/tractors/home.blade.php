@extends('layouts.app')

@section('content')
<nav class="bg-grey-light w-full rounded-md" style="margin-top: 5rem; padding-left: 5rem;">
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
    
    <li class="text-neutral-400">Implements</li>
  </ol>
</nav>

<!-- section starts -->
<section aria-describedby="Cars list Page" class="mb-20">

  <div class="section-container">
    <div class="lg:flex lg:space-x-6">
    <div class="lg:min-w-[384px] lg:mt-0 mt-6">
          <div class="lg:w-96 bg-white rounded-lg z-10">
            <div>
              <!-- <p class="text-sm tracking-[0.1px] mb-3 mt-3 md:mt-0">Other Services</p> -->
              <div
              class="w-full p-4 bg-neutral-10 dark:bg-neutral-900 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-t-md border">
              <!-- Lists --max-h-60-->
              <div
                class="w-full md:w-[360px] flex flex-col py-2 rounded-xl overflow-hidden bg-neutral-10 dark:bg-neutral-900  overflow-y-auto">
                
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


              </div>

            </div>
            </div>
          </div>
        </div>

        <div class="relative w-full">
  <div class="sticky mt-2">
    <div class="bg-white shadow-t-md border border-pear/60 p-2 rounded-xl text-sm grid grid-cols-2 gap-6">
      <div class="text-sm">
        <p>Horse Power</p>
        <div class="relative select-none">
          <div class="flex overflow-x-auto overflow-y-hidden hide-scrollbar will-change-transform transition-all duration-300 cursor-grabbing relative flex rounded-full mt-4 mb-2 border sm:snap-none snap-x">
            <button id="filter-30hp" class="text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">< 30HP</button>
            <button id="filter-30-50hp" class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">30 - 50HP</button>
            <button id="filter-50-75hp" class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">50 - 75HP</button>
            <button id="filter-75hp" class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">> 75HP</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full grid grid-cols-5 sm:grid-cols-5 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 lg:mt-0 mt-8 overflow-y-auto pb-5">
  <!-- lists & Images -->
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/zero-till.png" alt="Zero Till" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Zero Till</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/terracer-blade.png" alt="Terracer Blade" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Terracer Blade</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/super-seeder.png" alt="Super Seeder" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Super Seeder</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/sub-soiler.png" alt="Sub Soiler" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Sub Soiler</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/roto-seed-drill.png" alt="Roto Seed Drill" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Roto Seed Drill</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/rotary-tiller.png" alt="Rotary Tiller" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Rotary Tiller</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/robust-multi-crop-row-planter.png" alt="Robust Multi Crop Row Planter" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Robust Multi Crop Row Planter</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/ripper.png" alt="Ripper" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Ripper</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="20">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src="images/implements/reversible-mb-plough.png" alt="Reversible mb Plough" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">Reversible mb Plough</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
    
  @foreach($horse_power_implements as $horse_power_implement)  
  @if($horse_power_implement->machine_id =='1')
     <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="29">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src='{{ asset("implement_images")."/".$horse_power_implement->image }}' alt="Reversible mb Plough" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">{{ $horse_power_implement->name }}</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  @elseif($horse_power_implement->machine_id =='2')
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="30-49">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src='{{ asset("implement_images")."/".$horse_power_implement->image }}' alt="Reversible mb Plough" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">{{ $horse_power_implement->name }}</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  @elseif($horse_power_implement->machine_id =='3')
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="50-74">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src='{{ asset("implement_images")."/".$horse_power_implement->image }}' alt="Reversible mb Plough" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">{{ $horse_power_implement->name }}</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  @elseif($horse_power_implement->machine_id =='4')
  <a href="{{ route('productdetails.home') }}" class="tractor-card" data-hp="75">
    <div class="border border-pear/30 shadow-md shadow-pear/30 rounded-lg p-4 flex flex-col items-center w-full h-full">
      <div class="w-40 h-40 mb-4">
        <img src='{{ asset("implement_images")."/".$horse_power_implement->image }}' alt="Reversible mb Plough" class="w-full h-full object-cover">
      </div>
      <h2 class="text-lg font-medium mb-3 text-center h-10">{{ $horse_power_implement->name }}</h2>
      <div class="mt-auto w-full">
        <button id="book-now-btn" class="action-btn py-1.5 font-light text-sm w-full px-4 inline-block rounded-lg text-center shadow-md">Details</button>
      </div>
    </div>
  </a>
  @endif
  @endforeach 
 
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
      '50-75': document.getElementById('filter-50-75hp'),
      '75': document.getElementById('filter-75hp')
    };
    const tractorCards = document.querySelectorAll('.tractor-card');

    filterButtons['30'].addEventListener('click', () => filterTractors('30'));
    filterButtons['30-50'].addEventListener('click', () => filterTractors('30-50'));
    filterButtons['50-75'].addEventListener('click', () => filterTractors('50-75'));
    filterButtons['75'].addEventListener('click', () => filterTractors('75'));

    function filterTractors(hpRange) {
      filterButtons[hpRange].classList.add('bg-black');
      tractorCards.forEach(card => {
        const hp = parseInt(card.getAttribute('data-hp'), 10);
        let showCard = false;

        if (hpRange === '30' && hp < 30) {
          showCard = true;
        } else if (hpRange === '30-50' && hp >= 30 && hp < 50) {
          showCard = true;
        } else if (hpRange === '50-75' && hp >= 50 && hp < 75) {
          showCard = true;
        } else if (hpRange === '75' && hp >= 75) {
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