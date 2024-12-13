@extends('layouts.adminapp')

@section('content')

<div class="h-full ml-14 mt-14 mb-10 md:ml-64">


    <div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-md">
            <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">KYC Details</h3>
                </div>
                <!-- <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <a href="{{route('role.addview')}}"      class="action-btn py-1.5 font-light text-sm px-4 inline-block mt-2 rounded-lg text-center shadow-md bg-blue-500 text-white  transition duration-200 roleadd"  type="button" >Add Role</a>
                </div> -->
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <!-- <a href="{{ route('master.service.add') }}" class="action-btn py-1.5 font-light text-sm px-4 inline-block mt-2 rounded-lg text-center shadow-md bg-blue-500 text-white  transition duration-200 repairsandkycsadd" type="button" data-toggle="modal" data-target="#repairsandkycsModal">Add Service</a> -->
                </div>
            </div>
            <div class="w-full overflow-x-auto">
                <div class="px-4 py-3 ">
                    @if (session('status'))
                    <div class="alert alert-success session" role="alert">
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
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Business Name</th>
                            <th class="px-4 py-3">Status</th>
                            <!-- <th class="px-4 py-3">Driver Name</th>
                            <th class="px-4 py-3">Aadhar Card</th>
                            <th class="px-4 py-3">Pan Card</th>
                            <th class="px-4 py-3">Vehicle RC</th>
                            <th class="px-4 py-3">Vehicle Number</th>
                            <th class="px-4 py-3">Driving Licence</th> -->


                            <!-- <th class="px-4 py-3"></th> -->
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php $i = 0; ?>
                        @foreach($kycs as $kycss)
                        <?php
                        $business = App\Models\Business_contact::where('id', $kycss->business_id)->get();
                        $customer = App\Models\Customer::where('id', $kycss->user_id)->get();
                        $category = App\Models\Services::where('id', $kycss->category)->get();
                        ?>
                        <tr class="text-sm bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 transition duration-200">
                            <td class="px-4 py-3">{{ $kycss->id }}</td>
                            <td class="px-4 py-3">
                                @foreach($category as $categorys)
                                {{ $categorys->service_name }}
                                @endforeach
                            </td>
                            <td class="px-4 py-3">
                                @foreach($customer as $customers)
                                {{ $customers->name }}
                                @endforeach
                            </td>
                            <td class="px-4 py-3">
                                @foreach($business as $busines)
                                {{ $busines->business_name }}
                                @endforeach
                            </td>
                            <td class="px-4 py-3">
                                @switch(true)
                                @case($kycss->aadhar_status == '1' && $kycss->pan_status == '1' && $kycss->vehicle_status == '1' && $kycss->driving_status == '1')
                                {{ 'Completed' }}
                                @break

                                @case($kycss->aadhar_status == '' && $kycss->pan_status == '' && $kycss->vehicle_status == '' && $kycss->driving_status == '')
                                {{ 'Pending' }}
                                @break

                                @default
                                {{ 'Rejected' }}
                                @endswitch

                            </td>
                            <!-- <td class="px-4 py-3">{{ $kycss->driver_name }}</td> -->
                            <!-- <td class="px-4 py-3">{{ $kycss->driver_name }}</td>
                            <td class="px-4 py-3"><a href="{{ url('kyc/' . $kycss->aadhar_card) }}" target ="_blank">View</a></td>
                            <td class="px-4 py-3"><a href="{{ url('kyc/' .$kycss->pan_card) }}"target ="_blank">View</a></td>
                            <td class="px-4 py-3"><a href="{{ url('kyc/' .$kycss->vehicle_rc) }}"target ="_blank">View</a></td>
                            <td class="px-4 py-3">{{ $kycss->vehicle_number }}</td>
                            <td class="px-4 py-3"><a href="{{ url('kyc/' .$kycss->driving_licence) }}"target ="_blank">View</a></td> -->

                            <?php
                            $id = $kycss->id;
                            ?>
                            <td class="px-4 py-3">
                                <a href="{{ route('master.kycstatusupdate.edit', $id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
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
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    $(document).on('click', '.repairsandkycsedit', function() {
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
        $('#repairsandkycsModal').modal('show');
    });

    $(document).on('click', '.close', function() {
        $('#repairsandkycsModal').modal('hide');
    });
    $(document).on('click', '.closebutton', function() {
        $('#repairsandkycsModal').modal('hide');
    });

    $(document).on('click', '.repairsandkycsadd', function() {
        //alert($(this).data('name'));
        /*var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");*/
        $('#repairsandkycsaddModal').modal('show');
    });
    $(document).on('click', '.closeadd', function() {
        $('#repairsandkycsaddModal').modal('hide');
    });
    $(document).on('click', '.closeaddbutton', function() {
        $('#repairsandkycsaddModal').modal('hide');
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