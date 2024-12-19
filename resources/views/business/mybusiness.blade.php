@extends('layouts.businessapp')

@section('content')

<section class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="border-b pb-4 mb-8 flex flex-col md:flex-row justify-between items-center">
            <h2 class="text-3xl font-bold text-gray-900">My Business</h2>
            <button class="mt-4 md:mt-0 flex items-center bg-main-green-600 text-white font-semibold py-2 px-4 rounded hover:bg-main-green-700">
                <a href="{{route('address.home')}}">Add New Business</a>
                <span class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-200" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V5a1 1 0 10-2 0v2H7a1 1 0 000 2h2v2a1 1 0 002 0v-2h2a1 1 0 000-2h-2z" clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
        </div>
        @if(session('user_id'))
        <?php
        $user_id = session('user_id');
        $business = App\Models\Business_contact::where('user_id', $user_id)->get();
        ?>
        @foreach($business as $busines)
        <div class="bg-gray-50 p-8 rounded-lg shadow-md mb-10">
            <div class="text-lg font-medium text-gray-800 mb-4">Business Profile Score</div>
            <div class="flex flex-col md:flex-row items-center">
                <a href="#" class="block w-32 h-32 overflow-hidden rounded-lg shadow-lg mb-4 md:mb-0 md:mr-6">
                    <img src="https://images.jdmagicbox.com/comp/def_content/computer-software-developers/shutterstock-178800794-computer-software-developers-4-u72gy.jpg" alt="RLK InfoTech" class="w-full h-full object-cover">
                </a>
                <div class="flex-1">
                    <a href="#">
                        <div class="text-2xl font-bold text-gray-900 mb-2">{{$busines->business_name}}</div>
                        <!-- <div class="text-base text-gray-700 mb-4">{{$busines->landmark}}</div> -->
                        <div class="text-base text-gray-700 mb-4">{{$busines->landmark}}</div>
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

                </div>
            </div>
        </div>
        @endforeach
        @else
        @foreach($business as $busines)
        <div class="bg-gray-50 p-8 rounded-lg shadow-md mb-10">
            <div class="text-lg font-medium text-gray-800 mb-4">Business Profile Score</div>
            <div class="flex flex-col md:flex-row items-center">
                <a href="#" class="block w-32 h-32 overflow-hidden rounded-lg shadow-lg mb-4 md:mb-0 md:mr-6">
                    <img src="https://images.jdmagicbox.com/comp/def_content/computer-software-developers/shutterstock-178800794-computer-software-developers-4-u72gy.jpg" alt="RLK InfoTech" class="w-full h-full object-cover">
                </a>
                <div class="flex-1">
                    <a href="#">
                        <div class="text-2xl font-bold text-gray-900 mb-2">{{$busines->business_name}}</div>
                        <?php
                        // echo $busines->category;
                        $Services = App\Models\Services::where('id', $busines->category)->get();
                        ?>
                        @foreach($Services as $categories)
                        <div class="text-base text-gray-700 mb-4"><b>{{ $categories->service_name }} </b></div>

                        @endforeach

                        <!-- <div class="text-base text-gray-700 mb-4">{{$busines->landmark}} <span><button class="btn" style="color:red; border:1px solid lightgray;padding:5px;">Pending</button></span></div> -->
                    </a>
                    <div class="flex flex-wrap space-x-4">
                        <?php
                        $kyc = App\Models\Kycs::where('user_id', $busines->user_id)
                            ->where('business_id', $busines->id)
                            ->first();

                        ?>
                        @switch(true)
                        @case(!empty($kyc->status) && !empty($kyc->aadhar_status) && !empty($kyc->pan_status) && !empty($kyc->vehicle_status) && !empty($kyc->driving_status))
                        @if($kyc->aadhar_status == '3' || $kyc->pan_status == '3' || $kyc->vehicle_status == '3' || $kyc->driving_status == '3')
                        <?php
                        $user_id = $busines->user_id;
                        $business_id = $busines->id;
                        $status = $kyc->status;
                        $kycstatus = App\Models\Kycstatus::where('id', $status)->get();
                        ?>
                        <?php
                        $kycstatus1 = App\Models\Kycstatus::where('id', 3)->first();

                        ?>
                        @foreach($kycstatus as $kycstatuss)
                        <form action="{{ route('kycdetails') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user_id }}">
                            <input type="hidden" name="business_id" value="{{ $business_id }}">
                            <button type="submit" class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700">
                                {{$kycstatus1->status}}
                            </button>
                        </form>
                        @endforeach
                        @elseif($kyc->aadhar_status == '4' && $kyc->pan_status == '4' && $kyc->vehicle_status == '4' && $kyc->driving_status == '4')
                        <?php
                        $kycstatus1 = App\Models\Kycstatus::where('id', 4)->first();

                        ?>
                        <button type="submit" class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700">
                            {{$kycstatus1->status}}
                        </button>
                        <?php
                        // echo $busines->category;
                        //  $Services = App\Models\Services::where('id', $busines->category)->get();
                        ?>
                        <form action="{{route('products.add')}}" method="POST">
                        @csrf
                            <input type="hidden" name="user_id" value="{{ $user_id }}">
                            <input type="hidden" name="business_id" value="{{ $business_id }}">
                            <input type="hidden" name="category" id="category" value="{{$busines->category}}">
                            <button type="submit" class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700">
                            Products/Services
                            </button>
                        @else
                        <?php
                        $user_id = $busines->user_id;
                        $business_id = $busines->id;
                        $status = $kyc->status;
                        $kycstatus = App\Models\Kycstatus::where('id', $status)->get();
                        ?>
                        @foreach($kycstatus as $kycstatuss)
                        <form action="{{ route('kycdetails') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ $user_id }}">
                                <input type="hidden" name="business_id" value="{{ $business_id }}">
                                <button type="submit" class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700">
                                    KYC Rejected
                                </button>
                        </form>
                        @endforeach
                        @endif
                        @break

                        @case(!empty($kyc->status))
                        @if(empty($kyc->aadhar_status) && empty($kyc->pan_status) && empty($kyc->vehicle_status) && empty($kyc->driving_status))
                        <?php
                        $user_id = $busines->user_id;
                        $business_id = $busines->id;
                        $status = $kyc->status;
                        $kycstatus = App\Models\Kycstatus::where('id', $status)->get();
                        ?>
                        @foreach($kycstatus as $kycstatuss)
                        <button type="submit" class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700">
                            {{$kycstatuss->status}}
                        </button>
                        @endforeach
                        @break

                        @elseif(empty($kyc->aadhar_status) || empty($kyc->pan_status) || empty($kyc->vehicle_status) || empty($kyc->driving_status))
                        <?php
                        $user_id = $busines->user_id;
                        $business_id = $busines->id;
                        $status = $kyc->status;
                        $kycstatus = App\Models\Kycstatus::where('id', $status)->get();
                        ?>
                        @foreach($kycstatus as $kycstatuss)
                        <button type="submit" class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700">
                            {{$kycstatuss->status}}
                        </button>
                        @endforeach
                        @endif
                        @break

                        @default
                        <!-- If none of the above conditions are met, allow KYC upload -->
                        <form action="{{ route('kycverify') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $busines->user_id }}">
                            <input type="hidden" name="business_name" value="{{ $busines->business_name }}">
                            <input type="hidden" name="business_id" value="{{ $busines->id }}">
                            @foreach($Services as $categories)
                            <input type="hidden" name="category" value="{{ $categories->id }}">
                            @endforeach
                            <button type="submit" class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700">
                                KYC Uploading
                            </button>
                        </form>
                        @endswitch






                        <a class="bg-main-green-600 text-white font-medium py-2 px-4 rounded hover:bg-main-green-700" href="{{ route('advertiseplans.home') }}">
                            Advertise Now
                        </a>
                        <form action="{{ route('businessProfile.home') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $busines->user_id }}">
                            <input type="hidden" name="business_name" value="{{ $busines->business_name }}">
                            <input type="hidden" name="business_id" value="{{ $busines->id }}">

                            @foreach($Services as $categories)
                            <input type="hidden" name="category" value="{{ $categories->id }}">
                            @endforeach

                            <button type="submit" class="border border-main-green text-main-green-600 font-medium py-2 px-4 rounded hover:bg-blue-100">
                                Edit Business Profile
                            </button>
                        </form>
                    </div>
                    <div>
                        @switch(true)
                        @case(!empty($kyc->status) && !empty($kyc->aadhar_status) && !empty($kyc->pan_status) && !empty($kyc->vehicle_status) && !empty($kyc->driving_status))
                        @if($kyc->aadhar_status == '3')
                        <div style="color:red;">{{$kyc->aadhar_reason}}</div>
                        @endif
                        @if($kyc->pan_status == '3' )
                        <div style="color:red;">{{$kyc->pan_reason}}</div>
                        @endif
                        @if($kyc->vehicle_status == '3')
                        <div style="color:red;">{{$kyc->vehicle_reason}}</div>
                        @endif
                        @if($kyc->driving_status == '3')
                        <div style="color:red;">{{$kyc->driving_reason}}</div>
                        @endif
                        @break

                        @default
                        @endswitch
                    </div>
                </div>
                <div class="mt-6 md:mt-0 ml-auto text-center">
                    <svg height="80" width="80" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="40" cy="40" r="38" stroke-width="4px" class="text-gray-200" fill="none"></circle>
                        <circle cx="40" cy="40" r="38" fill="none" stroke-width="4px" stroke="#EABE06" pathLength="100" class="percent sixty" style="stroke-dashoffset: 56.77;"></circle>
                        <text x="50%" y="50%" dy=".3em" text-anchor="middle" class="text-lg font-bold text-black">43%</text>
                        <text x="50%" y="70%" dy=".3em" text-anchor="middle" class="text-sm font-bold text-yellow-500">Fair</text>
                    </svg>

                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</section>


@endsection