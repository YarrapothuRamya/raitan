@extends('layouts.businessapp')

@section('content')

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

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <div id="success-message" style="display: none;" class="alert alert-success">KYC details saved successfully!</div>
            <div id="error-message" style="display: none;" class="alert alert-danger">Error saving KYC details. Please try again.</div>


            <form novalidate="novalidate" action="{{route('kycback')}}" id ="kycForm">
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
                    <input type="file" name="aadhar" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder="Aadhar " required>
                    <label class="label-float bg-white">Aadhar Card (front, back) <span class="" style="color:red;">*</span></label>
                </div>

                <div class="relative mb-6">
                    <input type="file" name="pan" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <label class="label-float bg-white">Pan Card <span class="" style="color:red;">*</span></label>
                </div>

                <div class="relative mb-6">
                    <input type="file" name="machinerc" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <label class="label-float bg-white">Machine RC <span class="" style="color:red;">*</span></label>
                </div>
                <div class="relative mb-6 mt-5">
                    <input type="text" name="oparetorname" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <label class="label-float bg-white">Operator Name <span class="" style="color:red;">*</span></label>
                </div>

                <div class="relative mb-6 mt-5">
                    <input type="file" name="licence" class="input border-gray-300 border-2 px-4 py-2 rounded-md focus:outline-none focus:border-main-green w-full" placeholder=" " required>
                    <label class="label-float bg-white">Driving Licence (front, back)<span class="" style="color:red;">*</span></label>
                </div>
                <p class ="text-primary">Note: Please ensure the upload files is in any of this format  (jpeg,png,jpg,pdf) before uploading.</p>
                
                <div class="bottom-0 left-0 right-0 bg-white p-4 ">
                    <div class="flex justify-center">
                        <button type="submit" class="submit font-semibold text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg transition duration-300">
                            Save
                        </button>
                    </div>
                </div>
        </div>

<div id="errorMessages"></div> 
        </form>
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

<script>
    $(document).ready(function(){
        $('#kycForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission
            
            var formData = new FormData(this); // Collect form data

            $.ajax({
                url: $(this).attr('action'), // The form's action URL
                type: 'POST',
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Set content type to false
                success: function(response) {
                    // Handle success
                    if (response.success) {
            alert('KYC details saved successfully!');
            // console.log(response); // For debugging purposes
            // Optionally, reset the form after submission
            $('#kycForm')[0].reset();
        } else {
            alert('Error: ' + response.message);
        }
                },
                error: function(xhr, status, error) {
        // Handle error
        let errorMessage = 'An error occurred. Please try again.';
        
        if (xhr.responseJSON && xhr.responseJSON.message) {
            errorMessage = xhr.responseJSON.message; // Get error from server response
        }

        alert(errorMessage);
        console.log('Error:', error);
        console.log('Status:', status);
        console.log('Response:', xhr.responseJSON);
    }
            });
        });
    });
</script>
@endsection