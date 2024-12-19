@extends('layouts.businessapp')

@section('content')
<style>
    /* .label-float {
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
    } */
</style>
<div id="contract-detail-page" class="p-4 md:p-8">
    <!-- Header -->
    <header class="flex items-center justify-between p-4 bg-gray-200 shadow-lg rounded-lg mb-4">
        <span class="flex items-center">
            <i class="bkarrow-icn text-gray-600 text-2xl"></i>
        </span>
        <span class="text-lg font-semibold text-gray-800">Add Product/Service</span>
        <span class="text-sm text-gray-500 flex items-center space-x-2">
            <!-- Right section (if needed) -->
        </span>
    </header>

    <div class="mt-4 bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">


        <div class="container__inner__right p-8 bg-white rounded shadow-md">
            <form novalidate="novalidate" action="{{route('kycback')}}" id="kycForm" method="POST">
                @csrf
                <p class="addcontact_title___IxGV text-xl font-semibold text-gray-900">Add Product/Service</p>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$user_id}}" name="user_id" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>

                </div>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$business_id}}" name="business_name" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>

                </div>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$business_id}}" name="business_id" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                </div>
                <div class="relative mb-6">
                    <input type="hidden" value="{{$category}}" name="category" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                </div>
                <div class="relative mb-6">
                    <label class=" bg-white">Machine <span class="" style="color:red;">*</span></label>

                    <select type="text" id="machine" name="machine" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" required>
                        <option value="">Select Machine</option>
                        @foreach($machine as $machines)
                        <option value="{{$machines->id}}">{{$machines->name}}</option>
                        @endforeach
                    </select>
                    <div id="machine" class="error__message mt-2 hidden text-red-500">Please enter a mobile number</div>

                </div>

                
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

</div>
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