@extends('layouts.adminapp')

@section('content')
<style>
    .justify-right {
        align-items: flex-start !important;
    }
</style>
<div class="min-h-screen flex items-center justify-right bg-gray-100 p-4">




    <form action="{{ route('master.kycstatusupdate.update', $kycss->id) }}" method="post" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        @csrf

        <div id="show_message1" class="mb-4"></div>

        <h2 class="text-2xl font-bold mb-6 text-center">Update KYC</h2>



        <div class="card-body mb-4">
            @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
            @endif
            @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="mb-4 colsm3">
                <a href="{{ url('kyc/' .$kycss->aadhar_card ) }}" target="_blank"><i class="fa-solid fa-file-pdf"></i>View</a>
            </div>
            <div class="mb-4 colsm3">
                <a href="{{ url('kyc/' .$kycss->pan_card) }}" target="_blank"><i class="fa-solid fa-file-pdf"></i>View</a>
            </div>
            <div class="mb-4 colsm3">
                <a href="{{ url('kyc/' .$kycss->vehicle_rc) }}" target="_blank"><i class="fa-solid fa-file-pdf"></i>View</a>
            </div>
            <div class="mb-4 colsm3">
                <a href="{{ url('kyc/' .$kycss->driving_licence) }}" target="_blank"><i class="fa-solid fa-file-pdf"></i>View</a>
            </div>
            <div class="row col3">
                <div class="mb-4 colmd3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Aadhar Status') }}*</label>
                    <select required name="aadhar_status" id="aadhar_status" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Select Aadhar Status</option>
                        <?php
                        // echo $kycss->id; 
                        ?>
                        @foreach($kycstatus as $kycstatuss)
                        <option value="{{ $kycstatuss->id }}"
                            {{ old('aadhar_status', $kycstatuss->id) == $kycss->aadhar_status ? 'selected' : '' }}>
                            {{ $kycstatuss->status }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4 colmd3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Pan Status') }}*</label>
                    <select required name="pan_status" id="pan_status" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Select Pan Status</option>
                        @foreach($kycstatus as $kycstatuss)
                        <option value="{{ $kycstatuss->id }}"
                            {{ old('aadhar_status', $kycstatuss->id) == $kycss->pan_status ? 'selected' : '' }}>
                            {{ $kycstatuss->status }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4 colmd3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('vehicle RC Status') }}*</label>
                    <select required name="vehicle_status" id="vehicle_status" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Select Vehicle RC Status</option>
                        @foreach($kycstatus as $kycstatuss)
                        <option value="{{ $kycstatuss->id }}"
                            {{ old('aadhar_status', $kycstatuss->id) == $kycss->vehicle_status ? 'selected' : '' }}>
                            {{ $kycstatuss->status }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4 colmd3">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Driving Licence Status') }}*</label>
                    <select required name="driving_status" id="driving_status" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Select Driving Licence</option>
                        @foreach($kycstatus as $kycstatuss)
                        <option value="{{ $kycstatuss->id }}"
                            {{ old('aadhar_status', $kycstatuss->id) == $kycss->driving_status ? 'selected' : '' }}>
                            {{ $kycstatuss->status }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-4 flex justify-between1">
                <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline closebutton" onclick="closeModal();" data-dismiss="modal">Close</button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
            </div>
        </div>

    </form>
</div>

<script>
    function preview() {}
</script>
<!-- <script type="text/javascript">
    function closeModal() {
        // Redirect to the roles page
        window.location.href = "{{ url('/raitan_admin/kycss') }}"; // Adjust the route name as per your application
    }
</script> -->
@endsection