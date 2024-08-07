@extends('layouts.businessapp')

@section('content')
<section class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="border-b pb-4 mb-8 flex flex-col md:flex-row justify-between items-center">
            <h2 class="text-3xl font-bold text-gray-900">My Business</h2>
            <button class="mt-4 md:mt-0 flex items-center bg-main-green-600 text-white font-semibold py-2 px-4 rounded hover:bg-main-green-700">
               
                Add New Business
                <span class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5a1 1 0 10-2 0v2H7a1 1 0 000 2h2v2a1 1 0 002 0v-2h2a1 1 0 000-2h-2z" clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md mb-10">
            <div class="text-lg font-medium text-gray-800 mb-4">Business Profile Score</div>
            <div class="flex flex-col md:flex-row items-center">
                <a href="https://www.justdial.com/jd-business?source=77&amp;wap=77&amp;docid=040PXX40.XX40.240713003415.L7D9" class="block w-32 h-32 overflow-hidden rounded-lg shadow-lg mb-4 md:mb-0 md:mr-6">
                    <img src="https://images.jdmagicbox.com/comp/def_content/computer-software-developers/shutterstock-178800794-computer-software-developers-4-u72gy.jpg" alt="RLK InfoTech" class="w-full h-full object-cover">
                </a>
                <div class="flex-1">
                    <a href="https://www.justdial.com/jd-business?source=77&amp;wap=77&amp;docid=040PXX40.XX40.240713003415.L7D9">
                        <div class="text-2xl font-bold text-gray-900 mb-2">RLK InfoTech</div>
                        <div class="text-base text-gray-700 mb-4">Indira Nagar-Moosarambagh, Hyderabad</div>
                    </a>
                    <div class="flex flex-wrap space-x-4">
                        <a class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700" href="{{ route('advertiseplans.home') }}">Advertise Now</a>
                        <a class="border border-main-green text-main-green-600 font-medium py-2 px-4 rounded hover:bg-blue-100" href="{{ route('businessProfile.home') }}">Edit Business Profile</a>
                        
                    </div>
                </div>
                <div class="mt-6 md:mt-0 ml-auto text-center">
                    <svg height="80" width="80" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="40" cy="40" r="38" stroke-width="4px" class="text-gray-200" fill="none"></circle>
                        <circle cx="40" cy="40" r="38" fill="none" stroke-width="4px" stroke="#EABE06" pathLength="100" class="percent sixty" style="stroke-dashoffset: 56.77;"></circle>
                        <text x="50%" y="50%" dy=".3em" text-anchor="middle" class="text-lg font-bold text-black">43%</text>
                        <text x="50%" y="70%" dy=".3em" text-anchor="middle" class="text-sm font-bold text-yellow-500">Fair</text>
                    </svg>
                    <a href="https://www.justdial.com/jd-business?source=77&amp;wap=77&amp;docid=040PXX40.XX40.240713003415.L7D9&amp;ep=profile_score" class="mt-2 block border border-main-green text-main-green-600 font-medium py-2 px-4 rounded hover:bg-blue-100">Increase Profile Score</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection