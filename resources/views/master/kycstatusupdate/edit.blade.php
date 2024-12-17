@extends('layouts.adminapp')

@section('content')
<style>
    .justify-right {
        align-items: flex-start !important;
    }
    #aadhar_reason{
        display: none ;
    }
    #driving_reason{
        display: none ;
    }
    #vehicle_reason{
        display: none ;
    }
    #pan_reason{
        display: none ;
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




            </div><br>
            <div class="row col3"   >
                <div class="mb-4 colmd3" >
                    <div id="aadhar_reason">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Aadhar Reason') }}*</label>
                    <textarea name="aadhar_reason" id="aadhar_reason1" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$kycss->aadhar_reason}}</textarea>
                    </div>
                </div>
                <div class="mb-4 colmd3">
                    <div id="pan_reason">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Pan Reason') }}*</label>
                    <textarea name="pan_reason" id="pan_reason1" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$kycss->pan_reason}}</textarea>
                    </div>
                </div>
                <div class="mb-4 colmd3">
                    <div id="vehicle_reason">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Vehicle Reason') }}*</label>
                    <textarea name="vehicle_reason"id="vehicle_reason1"  class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$kycss->vehicle_reason}}</textarea>
                    </div>
                </div>
                <div class="mb-4 colmd3">
                    <div  id="driving_reason">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Driving Lience Reason') }}*</label>
                    <textarea name="driving_reason" id="driving_reason1" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$kycss->driving_reason}}</textarea>
                    </div>
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
<script>
     $('#pan_status').on('change', function(){
        var pan_status = $('#pan_status').val();
        if(pan_status == '3')
        {
            $('#pan_reason').show();
            $('#pan_reason1').prop('required', true);
        }
        else{
            $('#pan_reason').hide();  
            $('#pan_reason1').prop('required', false); 
        }
     });
     $('#vehicle_status').on('change', function(){
        var vehicle_status = $('#vehicle_status').val();
        if(vehicle_status == '3')
        {
            $('#vehicle_reason').show();
            $('#vehicle_reason1').prop('required', true);
        }
        else{
            $('#vehicle_reason').hide();  
            $('#vehicle_reason1').prop('required', false); 
        }
     })
     $('#driving_status').on('change', function(){
     var driving_status = $('#driving_status').val();
     if(driving_status == '3'){
            $('#driving_reason').show();
            $('#driving_reason1').prop('required', true);
        }
        else{
            $('#driving_reason').hide();  
            $('#driving_reason1').prop('required', false); 
        }
        
     });
    $('#aadhar_status').on('change', function(){
        var aadhar_status = $('#aadhar_status').val();
        // console.log(pan_status);
        if(aadhar_status == '3')
        {
            $('#aadhar_reason').show();
            $('#aadhar_reason1').prop('required', true);
        }
        else{
            $('#aadhar_reason').hide(); 
            $('#aadhar_reason1').prop('required', false); 
        }
    })
</script>
<!-- <script type="text/javascript">
    function closeModal() {
        // Redirect to the roles page
        window.location.href = "{{ url('/raitan_admin/kycss') }}"; // Adjust the route name as per your application
    }
</script> -->
@endsection