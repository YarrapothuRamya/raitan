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
    @switch(true)
    @case($category == '2')
    <div class="mt-4 bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">


        <div class="container__inner__right p-8 bg-white rounded shadow-md">




            
            <form novalidate="novalidate" action="{{route('kycback')}}" id="kycForm" method="POST">
                @csrf
                <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">KYC Details</p>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$user_id}}" name="user_id" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>

                </div>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$business_name}}" name="business_name" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>

                </div>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$business_id}}" name="business_id" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                </div>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$category}}" name="category" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                </div>
                <div class="relative mb-6">
                    <label class=" bg-white">Aadhar Card (front, back) <span class="" style="color:red;">*</span></label>

                    <input type="file" id="aadhar" name="aadhar" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                    <div id="aadhar" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>

                </div>

                <div class="relative mb-6">
                    <label class="bg-white">Pan Card <span class="" style="color:red;">*</span></label>

                    <input type="file" id="pan" name="pan" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <div id="pan" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>

                </div>

                <div class="relative mb-6">
                    <label class=" bg-white">Vehicle RC <span class="" style="color:red;">*</span></label>

                    <input type="file" id="vehicle_rc" name="vehicle_rc" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <div id="vehicle_rc" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>

                </div>
                <div class="relative mb-6">
                    <label class=" bg-white">Vehicle Number <span class="" style="color:red;">*</span></label>

                    <input type="text" id="vehicle_number" name="vehicle_number" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <div id="vehicle_number" class="error__message mt-2 hidden text-red-500">Please enter a mobile number d</div>

                </div>
                <div class="relative mb-6 mt-5">
                    <label class="">Driver Name <span class="" style="color:red;">*</span></label>

                    <input type="text" id="driver_name" name="driver_name" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <div id="driver_name" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>

                </div>

                <div class="relative mb-6 mt-5">
                    <label class=" bg-white">Driving Licence (front, back)<span class="" style="color:red;">*</span></label>

                    <input type="file" id="licence" name="licence" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <div id="licence" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>

                </div>
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
       
        <div id="errorMessages"></div>
    </div>
    @break
            @default
            @endswitch
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

<script>
    $(document).ready(function() {
        $('#kycForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Clear previous error messages
            $('.error-message').remove();

            var isValid = true; // Flag to track validation

            // Get form fields

            var aadhar = $('#aadhar').val();
            console.log(aadhar);
            var pan = $('#pan').val();
            var vehicleRc = $('#vehicle_rc').val();
            var licence = $('#licence').val();
            var driver_name = $('#driver_name').val();
            // var vehicleNumber = $('#vehicle_number').val();

            var aadharFile = $('#aadhar')[0].files[0];
            var panFile = $('#pan')[0].files[0];
            var vehicleRcFile = $('#vehicle_rc')[0].files[0];
            var licenceFile = $('#licence')[0].files[0];
            var vehicleNumber = $('#vehicle_number').val();

            // File validation criteria
            var validFileTypes = ['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'];
            var maxSize = 10240 * 1024; // 10MB in bytes


            // 1. Check if all required fields are filled
            // if (!aadharFile || !panFile || !vehicleRcFile || !licenceFile || !vehicleNumber) {
            //     isValid = false;
            //     $('#errorall').prepend('<div class="error-message" style="color: red;">All fields are required!</div>');
            // }
            if (driver_name == '') {
                $('#driver_name').after('<div class="error-message" style="color: red;">driver_name file is Required</div>');

            }
            if (aadhar == '') {
                $('#aadhar').after('<div class="error-message" style="color: red;">Aadhar file is Required</div>');

            }
            // 2. Validate file types and sizes for Aadhar
            if (aadharFile) {
                if (!validFileTypes.includes(aadharFile.type) || aadharFile.size > maxSize) {
                    isValid = false;
                    $('#aadhar').after('<div class="error-message" style="color: red;">Aadhar file must be JPEG, PNG, JPG, or PDF and under 10MB.</div>');
                }
            }
            if (pan == '') {
                $('#pan').after('<div class="error-message" style="color: red;">PAN file is Required.</div>');

            }
            // 3. Validate file types and sizes for PAN
            if (panFile) {
                console.log(panFile); // Check if the PAN file is being selected properly
                if (!validFileTypes.includes(panFile.type) || panFile.size > maxSize) {
                    isValid = false;
                    // Instead of using after(), use append() to add the error message more reliably
                    $('#pan').after('<div class="error-message" style="color: red;">PAN file must be JPEG, PNG, JPG, or PDF and under 10MB.</div>');
                }
            }
            if (vehicleRc == '') {
                $('#vehicle_rc').after('<div class="error-message" style="color: red;">Vehicle RC file is Required.</div>');

            }
            // 4. Validate file types and sizes for Vehicle RC
            if (vehicleRcFile) {
                if (!validFileTypes.includes(vehicleRcFile.type) || vehicleRcFile.size > maxSize) {
                    isValid = false;
                    $('#vehicle_rc').after('<div class="error-message" style="color: red;">Vehicle RC file must be JPEG, PNG, JPG, or PDF and under 10MB.</div>');
                }
            }
            if (licence == '') {
                $('#licence').after('<div class="error-message" style="color: red;">Licence file is Required.</div>');
            }
            // 5. Validate file types and sizes for Licence
            if (licenceFile) {
                if (!validFileTypes.includes(licenceFile.type) || licenceFile.size > maxSize) {
                    isValid = false;
                    $('#licence').after('<div class="error-message" style="color: red;">Licence file must be JPEG, PNG, JPG, or PDF and under 10MB.</div>');
                }
            }

            // 6. Validate vehicle number (it should be a string and not empty)
            if (!vehicleNumber) {
                isValid = false;
                $('#vehicle_number').after('<div class="error-message" style="color: red;">Vehicle number is required.</div>');
            }

            // 7. If validation is successful, submit the form using AJAX
            if (isValid) {
                var formData = new FormData(this); // Collect form data

                $.ajax({
                    url: $(this).attr('action'), // The form's action URL
                    type: 'POST',
                    data: formData,
                    processData: false, // Don't process the data
                    contentType: false, // Set content type to false
                    success: function(response) {
                        if (response.success) {
                            $('#kycForm')[0].reset(); // Reset the form
                            $('#kycForm').prepend('<div class="success-message" style="color: green;">KYC details saved successfully!</div>');
                            window.location.href = 'mybusiness';
                        } else {
                            // $('#kycForm').prepend('<div class="error-message" style="color: red;">Error: ' + response.message + '</div>');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX error
                        var errorMessage = 'An error occurred. Please try again.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message; // Server error message
                        }
                        $('#kycForm').prepend('<div class="error-message" style="color: red;">' + errorMessage + '</div>');
                        console.log('Error:', error);
                        console.log('Status:', status);
                        console.log('Response:', xhr.responseJSON);
                    }
                });
            }
        });
    });
</script>


@endsection