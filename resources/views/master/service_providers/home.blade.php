@extends('layouts.adminapp')

@section('content')

<div class="h-full ml-14 mt-14 mb-10 md:ml-64">


<div class="mt-4 mx-4">
    <div class="w-full overflow-hidden rounded-lg shadow-md">
        <div class="flex flex-wrap items-center px-4 py-2 bg-gray-50 dark:bg-gray-800">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Service Providers</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                <a href="#" class="action-btn py-1.5 font-light text-sm px-4 inline-block mt-2 rounded-lg text-center shadow-md bg-blue-500 text-white  transition duration-200 repairsandservicesadd" type="button" data-toggle="modal" data-target="#repairsandservicesModal">Add Service Providers</a>
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
            <input type="text" id="searchInput" onkeyup="filterTable()" placeholder="Search for repairs and services..." class="px-4 py-2   bg-gray-50 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-md">
        </div>
            <table class="w-full divide-y divide-gray-200" id="repair_service">
                <thead>
                    <tr class="text-sm font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-custom-green-light dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">S No</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Mobile</th>
                        <!-- <th class="px-4 py-3">Status</th> -->
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php $i = 0; ?>
                    @foreach($customer as $customers)
                        <tr class="text-sm bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 transition duration-200">
                            <td class="px-4 py-3">{{ $customers->id }}</td>
                            <td class="px-4 py-3">{{ $customers->name }}</td>
                            
                            <td class="px-4 py-3">{{ $customers->email }}</td>
                            <td class="px-4 py-3">{{ $customers->mobile }}</td>
                            <!-- <td class="px-4 py-3">
                                @if($customers->status == 1)
                                    Active
                                @elseif($customers->status == 0)
                                    Inactive
                                @endif
                            </td> -->
                            <?php
                            $id = $customers->id;
                            ?>
                                <td class="px-4 py-3">
        <a href="{{ route('service_providers.view', $id) }}">
            <i class="fa fa-eye"></i>
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
        frame.src=URL.createObjectURL(event.target.files[0]);
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
        
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
        $('select[name^="status1"] option:selected').attr("selected",null);
        $('select[name^="status1"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
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