@extends('layouts.businessapp')

@section('content')
<style>
    .label-float {
        pointer-events: none;
        position: absolute;
        left: 1rem;
        top: 0px;
        padding: 0 0.25rem;
        transition: 0.2s;
        transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
        opacity: 0.5;
        background: #fff;
        font-size: 14px;
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





            <form novalidate="novalidate" id="kycForm" method="POST" enctype="multipart/form-data">
                @csrf
                <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">KYC Details</p>
                <!-- Success Message -->
                @if (session('success'))
                <div id="success-message" class="alert alert-success mt-4 text-green-600 p-4 border border-green-400 rounded">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Error Message -->
                @if (session('error'))
                <div id="error-message" class="alert alert-danger mt-4 text-red-600 p-4 border border-red-400 rounded">
                    {{ session('error') }}
                </div>
                @endif
                <?php
                $category = App\Models\Services::where('id', $kycs->category)->first();
                ?>
                <div class="relative mb-6">
                    <input type="text" readonly value="{{$customer->name}}" name="user_id" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>

                </div>
                <div class="relative mb-6">
                    <input type="text" readonly value="{{$business->business_name}}" name="business_id" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                </div>
                <div class="relative mb-6">
                    <input type="text" readonly value="{{$category->service_name  }}" name="category" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                </div>
                @switch(true)
                @case($kycs->aadhar_status == '3')
                <button><a href="{{url('kyc/' .$kycs->aadhar_card)}}"><i class="fa-solid fa-file-pdf"></i> View</a> </button>
                <div class="relative mb-6">
                    <label class="bg-white">Aadhar Card (front, back) <span class="" style="color:red;">*</span></label>
                    <input required type="file" id="aadhar" name="aadhar" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar ">
                    <div id="aadhar" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
                    <div id="aadhar_error" class="error__message mt-2 text-red-500 hidden"></div>
   
                </div>
                @break
                @endswitch
                @switch(true)
                @case($kycs->pan_status == '3')
                <button><a href="{{url('kyc/' .$kycs->pan_card)}}"><i class="fa-solid fa-file-pdf"></i> View</a> </button>
                <div class="relative mb-6">
                    <label class="bg-white">Pan Card <span class="" style="color:red;">*</span></label>
                    <input required type="file" id="pan" name="pan" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" ">
                    <div id="pan" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
                    <div id="pan_error" class="error__message mt-2 text-red-500 hidden"></div>
   
                </div>
                @break
                @endswitch
                @switch(true)
                @case($kycs->vehicle_status == '3')
                <button><a href="{{url('kyc/' .$kycs->vehicle_status)}}"><i class="fa-solid fa-file-pdf"></i> View</a> </button>
                <div class="relative mb-6">
                    <label class=" bg-white">Vehicle RC <span class="" style="color:red;">*</span></label>

                    <input required type="file" id="vehicle_rc" name="vehicle_rc" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" ">
                    <div id="vehicle_rc" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
                    <div id="vehicle_rc_error" class="error__message mt-2 text-red-500 hidden"></div>
   
                </div>
                <button><a href="{{url('kyc/' .$kycs->driving_licence)}}"><i class="fa-solid fa-file-pdf"></i> View</a> </button>
                <div class="relative mb-6">
                    <label class=" bg-white">Vehicle Number <span class="" style="color:red;">*</span></label>

                    <input required type="text" value="{{$kycs->vehicle_number}}" id="vehicle_number" name="vehicle_number" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" ">
                    <div id="vehicle_number" class="error__message mt-2 hidden text-red-500">Please enter a mobile number d</div>
                    <div id="vehicle_number_error" class="error__message mt-2 text-red-500 hidden"></div>
   
                </div>
                @break
                @endswitch
                @switch(true)
                @case($kycs->driving_status == '3')
                <div class="relative mb-6 mt-5">
                    <label class="">Driver Name <span class="" style="color:red;">*</span></label>

                    <input type="text" value="{{$kycs->driver_name}}" id="driver_name" name="driver_name" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <div id="driver_name" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
                    <div id="driver_name_error" class="error__message mt-2 text-red-500 hidden"></div>
   
                </div>

                <div class="relative mb-6 mt-5">
                    <label class=" bg-white">Driving Licence (front, back)<span class="" style="color:red;">*</span></label>

                    <input type="file" id="licence" name="licence" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <div id="licence_error" class="error__message mt-2 text-red-500 hidden"></div>
   
                    <div id="licence" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>
                    
                </div>
                @break
                @default
                @endswitch



                <div id="success-message" style="display: none;" class="alert alert-success">KYC details saved successfully!</div>
                <div id="error-message" style="display: none;" class="alert alert-danger">Error saving KYC details. Please try again.</div>
                <div id="errorall"></div>
                <p class="text-primary">Note: Please ensure the upload files is in any of this format (jpeg,png,jpg,pdf) before uploading.</p>

                <div class="bottom-0 left-0 right-0 bg-white p-4 ">
                    <div class="flex justify-center">
                        <button type="submit" class="submit font-semibold text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg transition duration-300">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div id="error-message" style="color:red;"></div>



        <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $('#kycForm').submit(function(event) {
    event.preventDefault();
     $('#error-message').hide();
        $('#success-message').hide();
        $('.error__message').hide();
    var formData = new FormData(this); // Create FormData from the form
    
    $.ajax({
        url: '{{ route('kycupdate') }}',
        type: 'POST',
        data: formData,
        processData: false,   // Don't process the data
        contentType: false,   // Don't set content type
        success: function(response) {
            window.location.href = "mybusiness"; 
                // if(response.success) {
                //     // Show success message
                //     $('#success-message').show().text(response.success);
                // }
            },
            error: function(xhr) {
                // Show error message
                $('#error-message').show().text('Error saving KYC details. Please try again.');

                // Handle validation errors
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    if (errors.aadhar) {
                        $('#aadhar_error').text(errors.aadhar[0]).show();
                    }
                    if (errors.pan) {
                        $('#pan_error').text(errors.pan[0]).show();
                    }
                    if (errors.vehicle_rc) {
                        $('#vehicle_rc_error').text(errors.vehicle_rc[0]).show();
                    }
                    if (errors.vehicle_number) {
                        $('#vehicle_number_error').text(errors.vehicle_number[0]).show();
                    }
                    if (errors.driver_name) {
                        $('#driver_name_error').text(errors.driver_name[0]).show();
                    }
                    if (errors.licence) {
                        $('#licence_error').text(errors.licence[0]).show();
                    }
                }
            }
    });
});


</script>


@endsection