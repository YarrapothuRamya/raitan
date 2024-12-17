@extends('layouts.businessapp')

@section('content')


<style>
    table td,
    th {
        text-align: center;
        border: 1px solid black;
    }

    table th {
        background-color: #508D4E;
    }
</style>
<div id="contract-detail-page" class="p-4 md:p-8">
    <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-gray-200 shadow-lg rounded-lg mb-4">
        <span class="flex items-center">
            <i class="bkarrow-icn text-gray-600 text-2xl"></i>
        </span>
        <span class="text-lg font-semibold text-gray-800">KYC Details</span>
        <span class="text-sm text-gray-500 flex items-center space-x-2">
            <!-- Right section (if needed) -->
        </span>
    </header>

    <!-- Button Section -->
    <!-- <div class="fixed bottom-0 left-0 right-0 bg-white p-4 shadow-lg">
        <div class="flex justify-center">
            <button class="font-semibold text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg transition duration-300">
                Save
            </button>
        </div>
    </div> -->

    <!-- Main Content -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">


        <div class="container__inner__right p-8 bg-white rounded shadow-md">



            <table class="" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Status</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Name</td>

                        <td>{{$customer->name}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Business</td>
                        <td>{{$business->business_name}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    $service = App\Models\Services::where('id', $kycs->category)->first();
                    $aadharstatus = App\Models\Kycstatus::where('id', $kycs->aadhar_status)->first();
                    $pan_status = App\Models\Kycstatus::where('id', $kycs->pan_status)->first();
                    $vehicle_status = App\Models\Kycstatus::where('id', $kycs->vehicle_status)->first();
                    $driving_status = App\Models\Kycstatus::where('id', $kycs->driving_status)->first();
                    ?>
                    <tr>
                        <td>Category</td>
                        <td>{{$service->service_name}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Aadhar Card</td>
                        <td><a href="{{url('kyc/'.$kycs->aadhar_card)}}" target="_blank"><i class="fa-solid fa-file-pdf"></i> View</a></td>
                        <td><button>{{$aadharstatus->status}}</button></td>
                        <td>{{$kycs->aadhar_reason}}</td>
                    </tr>
                    <tr>
                        <td>Pan Card</td>
                        <td><a href="{{url('kyc/'.$kycs->pan_card)}}" target="_blank"><i class="fa-solid fa-file-pdf"></i> View</a></td>
                        <td><button>{{$pan_status->status}}</button></td>
                        <td>{{$kycs->pan_reason}}</td>
                    </tr>
                    <tr>
                        <td>Vehicle Rc</td>
                        <td><a href="{{url('kyc/'.$kycs->vehicle_rc)}}" target="_blank"><i class="fa-solid fa-file-pdf"></i> View</a></td>
                        <td><button>{{$vehicle_status->status}}</button></td>
                        <td>{{$kycs->vehicle_reason}}</td>
                    </tr>
                    <tr>
                        <td>Driving Licence</td>
                        <td><a href="{{url('kyc/'.$kycs->driving_licence)}}" target="_blank"><i class="fa-solid fa-file-pdf"></i> View</a></td>
                        <td><button>{{$driving_status->status}}</button></td>
                        <td>{{$kycs->driving_reason}}</td>
                    </tr>

                </tbody>
            </table>
            <form action="{{route('kycedit')}}" method="POST">
                @csrf
                <input type="hidden" name="name" value="{{$customer->id}}" id="">
                <input type="hidden" name="business_name" value="{{$business->id}}" id="">
                <div class="bottom-0 left-0 right-0 bg-white p-4 ">
                    <div class="flex justify-center">
                        <button type="submit" class="submit font-semibold text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg transition duration-300">
                            Edit
                        </button>
                    </div>
                </div>
            </form>

        </div>

        <div id="errorMessages"></div>
        </form>


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

</div>

<!-- Popup Modal (If needed) -->
<!-- <div id="commonPopupModal" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 max-w-md mx-auto">
            <div class="flex items-center justify-between border-b pb-4 mb-4">
                <h3 class="text-lg font-semibold">IMPORTANT - Email ID Missing</h3>
                <button class="text-gray-600 hover:text-gray-800">✕</button>
            </div>
            <p class="text-gray-700">Email ID is required to receive instant alerts, customized leads, and the latest information on new feature releases.</p>
            <div class="flex justify-end space-x-4 mt-6">
                <button class="text-blue-600 border border-blue-600 px-4 py-2 rounded-md">Skip for Now</button>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md">Add Email Now</button>
            </div>
        </div>
    </div> -->
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




@endsection