@extends('layouts.adminapp')
@section('content')

<div class="h-full ml-14 mt-14 mb-10 md:ml-64">
    <div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-md">
            <div class="flex flex-wrap items-center px-4 py-2 bg-gray-50 dark:bg-gray-800">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Business List</h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <!-- <a href="#" class="action-btn py-1.5 font-light text-sm px-4 inline-block mt-2 rounded-lg text-center shadow-md bg-blue-500 text-white  transition duration-200 repairsandservicesadd" type="button" data-toggle="modal" data-target="#repairsandservicesModal">Add Business</a> -->
                </div>
            </div>
            <div class="w-full overflow-x-auto">
                <div class="px-4 py-3">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                    @if($errors->any())
                    {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
                    @endif
                    @if(Session::get('error') && Session::get('error') != null)
                    <div style="color:red">{{ Session::get('error') }}</div>
                    @php
                    Session::put('error', null)
                    @endphp
                    @endif
                    @if(Session::get('success') && Session::get('success') != null)
                    <div style="color:green">{{ Session::get('success') }}</div>
                    @php
                    Session::put('success', null)
                    @endphp
                    @endif
                </div>
                <div class="px-1 py-1 mb-2 float-right">
                    <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search..." class="px-4 py-2   bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md">
                </div>
                <table class="w-full divide-y divide-gray-200" id="repair_service">
                    <thead>
                        <tr class="text-sm font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-custom-green-light dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">S No</th>
                            <th class="px-4 py-3">KYC Status</th>
                            <th class="px-4 py-3">Action</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Business Name</th>
                            <th class="px-4 py-3">Mobile</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Pincode</th>
                            <!-- <th class="px-4 py-3">Location</th> -->
                            <th class="px-4 py-3">City</th>
                            <!-- <th class="px-4 py-3">state</th> -->
                            <th class="px-4 py-3">Service Provider</th>
                            <!-- <th class="px-4 py-3">User Number</th>
                        <th class="px-4 py-3">User Email</th> -->
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php $i = 0; ?>
                        @foreach($businesscontact as $businesscontacts)
                        <?php
                        $user = App\Models\Customer::where('id', $businesscontacts->user_id)->get();
                        $Services = App\Models\Services::where('id', $businesscontacts->category)->get();
                        $kyc = App\Models\Kycs::where('business_id', $businesscontacts->id)
                            ->where('user_id', $businesscontacts->user_id)
                            ->where('category', $businesscontacts->category)->get();
                        ?>
                        <tr class="text-sm bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 transition duration-200">
                            <td class="px-4 py-3"><?php echo ++$i; ?></td>

                            <td class="px-4 py-3">
                                @if($kyc && $kyc->isNotEmpty())
                                @foreach($kyc as $kycs)
                                <?php
                                // echo $kycs->status;
                                // echo $kycs->aadhar_status;
                                // echo $kycs->pan_status;
                                // echo $kycs->vehicle_status;
                                // echo $kycs->driving_status;
                                ?>
                                @switch(true)
                                @case(!empty($kycs->status) )
                                @if(!empty($kycs->aadhar_status) && !empty($kycs->pan_status) && !empty($kycs->vehicle_status) && !empty($kycs->driving_status))
                                @if($kycs->aadhar_status == '3' || $kycs->pan_status == '3' || $kycs->vehicle_status == '3' || $kycs->driving_status == '3')
                                <?php
                                $kycstatus = App\Models\Kycstatus::where('id', '3')->first();
                                ?>
                                {{$kycstatus->status}}

                                @elseif($kycs->aadhar_status == '4' || $kycs->pan_status == '4' || $kycs->vehicle_status == '4' || $kycs->driving_status == '4')
                                <?php
                                $kycstatus = App\Models\Kycstatus::where('id', '4')->first();
                                ?>
                                {{$kycstatus->status}}
                                @else
                                <?php
                                $kycstatus = App\Models\Kycstatus::where('id', '3')->first();
                                ?>
                                {{$kycstatus->status}}
                                @endif
                                @endif
                                @break
                                @case(!empty($kycs->status))
                                @if(!empty($kycs->aadhar_status) && !empty($kycs->pan_status) && !empty($kycs->vehicle_status) && !empty($kycs->driving_status))
                                <?php
                                $kycstatus = App\Models\Kycstatus::where('id', 3)->first();
                                ?>
                                {{$kycstatus->status}}
                                @endif
                                @default
                                <?php
                                $kycstatus = App\Models\Kycstatus::where('id', $kycs->status)->first();
                                ?>
                                {{$kycstatus->status}}
                                @endswitch
                                @endforeach
                                @else
                                Not Uploaded
                                @endif
                            </td>

                            <td class="px-4 py-3">
                                @if($kyc && $kyc->isNotEmpty())
                                @foreach($kyc as $kycs)
                                <?php
                                 $kycs->driving_status;
                                ?>
                                @switch(true)
                               
                                @case(!empty($kycs->status))
                                @if(!empty($kycs->aadhar_status) && !empty($kycs->pan_status) && !empty($kycs->vehicle_status) && !empty($kycs->driving_status))
                                    @if($kycs->aadhar_status == '3' || $kycs->pan_status == '3' || $kycs->vehicle_status == '3' || $kycs->driving_status == '3')
                                    <a href="{{ route('master.kycstatusupdate.edit', $kycs->id) }}">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                    @elseif($kycs->aadhar_status == '4' || $kycs->pan_status == '4' || $kycs->vehicle_status == '4' || $kycs->driving_status == '4')
                                    <i class="fas fa-edit"></i>
                                    
                                    @endif
                                    @endif
                                @break
                                <a href="{{ route('master.kycstatusupdate.edit', $kycs->id) }}">
                                        <i class="fas fa-edit"></i>
                                        </a>
                                @endswitch
                                @endforeach
                                @else
                                <i class="fas fa-edit"></i>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                @foreach($Services as $categories)
                                {{ $categories->service_name  }}
                                @endforeach
                            </td>
                            <td class="px-4 py-3">{{ $businesscontacts->business_name }}</td>
                            <td class="px-4 py-3">{{ $businesscontacts->mobile }}</td>
                            <td class="px-4 py-3">{{ $businesscontacts->email }}</td>
                            <td class="px-4 py-3">{{ $businesscontacts->pincode }}</td>
                            <!-- <td class="px-4 py-3">{{$businesscontacts->landmark}}, {{$businesscontacts->block_no}}, {{$businesscontacts->street}}, {{$businesscontacts->area}}</td> -->
                            <td class="px-4 py-3">{{ $businesscontacts->city }}</td>
                            <!-- <td class="px-4 py-3">{{ $businesscontacts->state }}</td> -->
                            @foreach($user as $users)
                            <td class="px-4 py-3">{{ $users->name }} <br> {{ $users->mobile }} <br> {{ $users->email }}</td>
                            <!-- <td class="px-4 py-3">{{ $users->mobile }}</td>
                            <td class="px-4 py-3">{{ $users->email }}</td> -->
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="bg-white p-4 rounded-lg">
            <span class="text-gray-500 cursor-pointer float-right" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="Preview Image" class="max-w-full h-auto rounded-lg" />
        </div>
    </div>

    <script>
        function openModal(imageSrc) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('imageModal').classList.remove('hidden');
            document.getElementById('imageModal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('imageModal').classList.remove('flex');
            document.getElementById('imageModal').classList.add('hidden');
        }
    </script>



</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    // // function updateMachine(){
    // //     var id = $("#id").val();
    // //     var name = $("#name").val();
    // //     var image = $('#image')[0].files[0];
    // //     var description = $("#description").val();
    // //     var status = $("#status").val();
    // //     const status2 = $("#statusoneone").val();
    // //     $('#show_message').empty();
    // //     //alert(status + " " + status2);
    // //     if(status == status2){

    // //     }else{
    // //         var status_val;
    // //         if(status == 1){
    // //             status_val = 'Active';
    // //         }else if(status == 0){
    // //             status_val = 'InActive';
    // //         }
    // //         if(id == 1 || id == 2 || id == 3){
    // //             if(confirm('This Repair and Service in Man power services in the home will be made '+ status_val +'. Do you want to continue?')){

    // //             } else {
    // //                 return false;
    // //             }
    // //         }

    // //     }
    //     var formData = new FormData();

    //     formData.append("id", $('#id').val());
    //     formData.append("name", $('#name').val());
    //     formData.append("image", $('#image')[0].files[0]);
    //     formData.append("description", $("#description").val());
    //     formData.append("status", $("#status").val());
    //     formData.append("status1", $("#status1").val());
    //     //var formData = $(this).serialize();
    //     $.ajax({
    //         url: '{{ route("repairsandservices.update") }}',
    //         type: 'post',
    //         headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
    //         contentType: false,
    //         processData: false,

    //         /*data: {
    //             //id : id,
    //             name: addname,
    //             addimage: addimage,
    //             addhorsepower: addhorsepower,
    //             status: status,
    //         },*/
    //         data: formData,
    //         dataType: 'json',



    //         success: function(response) {
    //             $('#show_message').empty();
    //             console.log(response);
    //             if(response.status == 200){
    //                 $('#roleModal').modal('hide');
    //                 alert(response.success);
    //                 location.reload()
    //             }
    //             if(response.status == 400){
    //                 alert(response.error);
    //             }
    //         },
    //         error: function (err) {
    //             $('#show_message').empty();
    //             //console.log(data);
    //             if (err.status == 422 || err.status == 500) { // when status code is 422, it's a validation issue
    //                 console.log(err.responseJSON);
    //                 //alert(err.responseJSON.message);
    //                 if(err.responseJSON.message == 'Validation rule unique requires at least 1 parameters.'){
    //                     $('#show_message').html('<span style="color: red;">Role name must be unique.</span>');
    //                 }else{
    //                     $('#show_message').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
    //                 }


    //                 // you can loop through the errors object and show it to the user
    //                 /*console.warn(err.responseJSON.errors);
    //                 // display errors on each form field
    //                 $.each(err.responseJSON.errors, function (i, error) {
    //                     alert(i + " " + error);
    //                     var el = $(document).find('[name="'+i+'"]');
    //                     el.after($('<span style="color: red;">'+error[0]+'</span>'));
    //                 });*/
    //             }
    //         },
    //     });
    // }


    // function addMachine(){
    //     //var id = $("#id").val();
    //     var addname = $("#addname").val();
    //     var addimage = $('#addimage')[0].files[0];
    //     var adddescription = $("#adddescription").val();
    //     var status = $("#addstatus").val();
    //     $('#show_message').empty();
    //     //alert(name);
    //     var formData = new FormData();

    //     formData.append("name", $('#addname').val());
    //     formData.append("addimage", $('#addimage')[0].files[0]);
    //     formData.append("adddescription", $("#adddescription").val());
    //     formData.append("addstatus", $("#addstatus").val());
    //     //var formData = $(this).serialize();
    //     $.ajax({
    //         url: '{{ route("repairsandservices.add") }}',
    //         type: 'post',
    //         headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
    //         contentType: false,
    //         processData: false,

    //         /*data: {
    //             //id : id,
    //             name: addname,
    //             addimage: addimage,
    //             addhorsepower: addhorsepower,
    //             status: status,
    //         },*/
    //         data: formData,
    //         dataType: 'json',



    //         success: function(response) {
    //             $('#show_message').empty();
    //             console.log(response);
    //             if(response.status == 200){
    //                 $('#roleModal').modal('hide');
    //                 alert(response.success);
    //                 location.reload()
    //             }
    //             if(response.status == 400){
    //                 alert(response.error);
    //             }
    //         },
    //         error: function (err) {
    //             $('#show_message').empty();
    //             //console.log(data);
    //             if (err.status == 422 || err.status == 500) { // when status code is 422, it's a validation issue
    //                 console.log(err.responseJSON);
    //                 //alert(err.responseJSON.message);
    //                 if(err.responseJSON.message == 'Validation rule unique requires at least 1 parameters.'){
    //                     $('#show_message').html('<span style="color: red;">Role name must be unique.</span>');
    //                 }else{
    //                     $('#show_message').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
    //                 }


    //                 // you can loop through the errors object and show it to the user
    //                 /*console.warn(err.responseJSON.errors);
    //                 // display errors on each form field
    //                 $.each(err.responseJSON.errors, function (i, error) {
    //                     alert(i + " " + error);
    //                     var el = $(document).find('[name="'+i+'"]');
    //                     el.after($('<span style="color: red;">'+error[0]+'</span>'));
    //                 });*/
    //             }
    //         },
    //     });
    // }

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    $(document).on('click', '.repairsandservicesedit', function() {
        //alert($(this).data('name'));
        var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        frame.src = $(this).data('image');
        $("#description").val($(this).data('description'));

        $('select[name^="status"] option:selected').attr("selected", null);
        $('select[name^="status"] option[value="' + $(this).data('status') + '"]').attr("selected", "selected");
        $('select[name^="status1"] option:selected').attr("selected", null);
        $('select[name^="status1"] option[value="' + $(this).data('status') + '"]').attr("selected", "selected");
        $('#repairsandservicesModal').modal('show');
    });

    $(document).on('click', '.close', function() {
        $('#repairsandservicesModal').modal('hide');
    });
    $(document).on('click', '.closebutton', function() {
        $('#repairsandservicesModal').modal('hide');
    });

    $(document).on('click', '.repairsandservicesadd', function() {
        //alert($(this).data('name'));
        /*var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");*/
        $('#repairsandservicesaddModal').modal('show');
    });
    $(document).on('click', '.closeadd', function() {
        $('#repairsandservicesaddModal').modal('hide');
    });
    $(document).on('click', '.closeaddbutton', function() {
        $('#repairsandservicesaddModal').modal('hide');
    });
</script>

<script>
    function filterTable() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const table = document.getElementById('repair_service');
        const tr = table.getElementsByTagName('tr');

        for (let i = 1; i < tr.length; i++) {
            const tdArray = tr[i].getElementsByTagName('td');
            let match = false;
            for (let j = 0; j < tdArray.length; j++) {
                const td = tdArray[j];
                if (td) {
                    const txtValue = td.textContent || td.innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        match = true;
                    }
                }
            }
            tr[i].style.display = match ? '' : 'none';
        }
    }
</script>
@endsection