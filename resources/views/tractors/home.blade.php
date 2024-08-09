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
    @include('layouts.allservice')

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
            <button id="filter-75hp" class="hover:bg-gray-200 text-sm py-2 px-4 whitespace-nowrap text-pistachio rounded-full w-full smooth-animate">> 75HP </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-full grid grid-cols-5 sm:grid-cols-5 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 lg:mt-0 mt-8 overflow-y-auto pb-5">
  @foreach($machines as $machine) 
  @foreach($horse_power_implements as $horse_power_implement)  
  @if($machine->id == $horse_power_implement->machine_id )
     <a href="{{ route('implementsdetails.home',['imp_id' => $horse_power_implement['id'],'machineid' => $horse_power_implement['machine_id']]) }}" class="tractor-card" data-hp="{{$machine->name}}">
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