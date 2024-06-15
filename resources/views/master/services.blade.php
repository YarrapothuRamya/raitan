@extends('layouts.app')

@section('content')

<script src="https://cdn.tailwindcss.com"></script>
<div class="container mt-20">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-md-start">Add/Edit Services</div>
                        <div class="col-md-6 text-md-end"><button type="button" class="btn btn-primary serviceadd"  data-toggle="modal" data-target="#roleModal">Add Service</button></div>
                    </div>
                </div>

                <div class="card-body">
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

                    
                </div>

                <div class="card-body">
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

                    
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Route</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($services as $service)
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td>{{ $service->service_name }}</td>
                                <td><img src='{{ asset("service_images")."/".$service->image }}' width="100px" /></td>
                                <td>{{ $service->description }}</td>
                                <td>{{ $service->route }}</td>
                                <td>
                                    @if($service->status == 1)
                                        Active
                                    @elseif($service->status == 0)
                                        Inactive
                                    @endif
                                </td>
                                <td><button type="button" class="btn btn-primary serviceedit"  data-toggle="modal" data-target="#machineModal" data-id="{{ $service['id'] }}" data-name="{{ $service['service_name'] }}" data-description="{{ $service['description'] }}" data-route="{{ $service['route'] }}" data-status="{{ $service['status'] }}" data-image="{{ asset('service_images').'/'.$service['image'] }}" >Edit</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="machineModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serviceModalLongTitle">Edit Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('service.update') }}" method="post">
            @csrf
            <div class="show_message1" id="show_message1">

            </div>
            <input id="id" type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="">
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" onchange="preview()" class="form-control @error('name') is-invalid @enderror" name="image" value="">
                    <img id="frame" src="" width="100px" />

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="">
                    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="route" class="col-md-4 col-form-label text-md-end">{{ __('route') }}</label>

                <div class="col-md-6">
                    <input id="route" type="text" class="form-control @error('route') is-invalid @enderror" name="route" value="">
                    
                    @error('route')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3 d-none">
                <label for="status1" class="col-md-4 col-form-label text-md-end">{{ __('Status1') }}</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status1') ? 'is-invalid' : '' }}" name="statusone" id="statusone">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @if($errors->has('status1'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status1') }}
                        </div>
                    @endif
                </div>
            </div>

            <!--<div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>-->
        
      
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closebutton" data-dismiss="modal">Close</button>
            <button type="button" onclick="updateMachine();" class="btn btn-primary">Update</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div>


<div class="modal fade" id="serviceaddModal" tabindex="-1" role="dialog" aria-labelledby="roleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLongTitle">Add Service</h5>
        <button type="button" class="closeadd" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('service.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="show_message" id="show_message">

            </div>
            <!--<input id="id" type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="">-->
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="addname" type="text" class="form-control @error('name') is-invalid @enderror" name="addname" value="">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                <div class="col-md-6">
                    <input id="addimage" type="file" class="form-control @error('addimage') is-invalid @enderror" name="addimage" value="">

                    @if($errors->has('parent_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('parent_id') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <input id="adddescription" type="text" class="form-control @error('adddescription') is-invalid @enderror" name="adddescription" value="">

                    @if($errors->has('adddescription'))
                        <div class="invalid-feedback">
                            {{ $errors->first('adddescription') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <label for="route" class="col-md-4 col-form-label text-md-end">{{ __('Route') }}</label>

                <div class="col-md-6">
                    <input id="addroute" type="text" class="form-control @error('addroute') is-invalid @enderror" name="addroute" value="">

                    @if($errors->has('addroute'))
                        <div class="invalid-feedback">
                            {{ $errors->first('addroute') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="addstatus" id="addstatus">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('role_id') }}
                        </div>
                    @endif
                </div>
            </div>

            <!--<div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>-->
        
      
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closeaddbutton" data-dismiss="modal">Close</button>
            <button type="button" onclick="addService();" class="btn btn-primary">Add</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div>


<section class="container px-4 mx-auto bg-white"> <!-- Added bg-white for the section -->
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">
                                        <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                        <button class="flex items-center gap-x-2">
                                            <span>S No</span>

                                            <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                            </svg>
                                        </button>
                                    </div>
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Name
                                </th>

                               
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Image
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Description
                                </th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-body" class="bg-white divide-y divide-gray-200">
                            <!-- Table Rows (Paginated content will be inserted here by JavaScript) -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between mt-6">
        <button id="prev-btn" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>
            <span>previous</span>
        </button>

        <div id="pagination" class="items-center hidden md:flex gap-x-3">
            <!-- Pagination numbers will be inserted here by JavaScript -->
        </div>

        <button id="next-btn" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
            <span>Next</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </button>
    </div>
</section>


<div id="modal" class="fixed inset-0 z-50 hidden overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    <div class="flex items-center justify-center min-h-screen px-4 text-center">
        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
        <div class="inline-block overflow-hidden transition-all transform bg-white rounded-lg text-left align-bottom shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <!-- <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div> -->
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 id="modal-title" class="text-lg font-medium leading-6 text-gray-900">Edit Service</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">Are you sure you want to remove this invoice? This action cannot be undone.</p>
                        </div>
                        <form id="remove-form" class="mt-4 space-y-4">
                            <div>
                                <label for="file-upload" class="block text-sm font-medium text-gray-700">Upload Image</label>
                                <input id="file-upload" type="file" class="common-input input-focus text-sm py-3 rounded-xl px-2" />
                            </div>
                            <div>
                                
                                <input id="name" type="text" placeholder="Name" class="common-input input-focus text-sm py-3 rounded-xl px-2" />
                            </div>
                            <div>
                                
                                <textarea id="description" placeholder="Description" class="common-input input-focus text-sm py-3 rounded-xl px-2" rows="3"></textarea>
                            </div>
                            <div>
                                
                                <select id="route" class="common-input input-focus text-sm py-3 rounded-xl px-2">
                                    <option value="">Select a route</option>
                                    <option value="/route1">Route 1</option>
                                    <option value="/route2">Route 2</option>
                                    <option value="/route3">Route 3</option>
                                </select>
                            </div>
                            <div>
                                
                                <select id="status" class="common-input input-focus text-sm py-3 rounded-xl px-2">
                                    <option value="">Select status</option>
                                    <option value="pending">Active</option>
                                    <option value="rejected">Deactivate</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse">
                <button id="confirm-remove" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Ok
                </button>
                <button id="cancel-remove" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    function updateMachine(){
        var id = $("#id").val();
        var name = $("#name").val();
        var image = $('#image')[0].files[0];
        var description = $("#description").val();
        var route = $("#route").val();
        var status = $("#status").val();
        const status1 = $("#statusone").val();
        //alert(status + " " + status1);
        $('#show_message').empty();
        //alert(name);
        if(status == status1){

        }else{
            var status_val;
            if(status == 1){
                status_val = 'Active';
            }else if(status == 0){
                status_val = 'InActive';
            }
            if(confirm('This service to users will be made '+ status_val +'. Do you want to continue?')){
                
            } else {
                return false;
            }
        }
        var formData = new FormData();
        
        formData.append("id", $('#id').val());
        formData.append("name", $('#name').val());
        formData.append("image", $('#image')[0].files[0]);
        formData.append("description", $("#description").val());
        formData.append("route", $("#route").val());
        formData.append("status", $("#status").val());
        formData.append("status1", $("#status1").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("service.update") }}',
            type: 'post',
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            contentType: false,
            processData: false,
            
            /*data: {
                //id : id,
                name: addname,
                addimage: addimage,
                addhorsepower: addhorsepower,
                status: status,
            },*/
            data: formData,
            dataType: 'json',

            

            success: function(response) {
                $('#show_message').empty();
                console.log(response);
                if(response.status == 200){
                    $('#roleModal').modal('hide');
                    alert(response.success);
                    location.reload()
                }
                if(response.status == 400){
                    alert(response.error);
                }
            },
            error: function (err) {
                $('#show_message').empty();
                //console.log(data);
                if (err.status == 422 || err.status == 500) { // when status code is 422, it's a validation issue
                    console.log(err.responseJSON);
                    //alert(err.responseJSON.message);
                    if(err.responseJSON.message == 'Validation rule unique requires at least 1 parameters.'){
                        $('#show_message').html('<span style="color: red;">Role name must be unique.</span>');
                    }else{
                        $('#show_message').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
                    }
                    
                    
                    // you can loop through the errors object and show it to the user
                    /*console.warn(err.responseJSON.errors);
                    // display errors on each form field
                    $.each(err.responseJSON.errors, function (i, error) {
                        alert(i + " " + error);
                        var el = $(document).find('[name="'+i+'"]');
                        el.after($('<span style="color: red;">'+error[0]+'</span>'));
                    });*/
                }
            },
        });
    }


    function addService(){
        //var id = $("#id").val();
        var addname = $("#addname").val();
        var addimage = $('#addimage')[0].files[0];
        var adddescription = $("#adddescription").val();
        var addroute = $("#addroute").val();
        var status = $("#addstatus").val();
        $('#show_message').empty();
        //alert(name);
        var formData = new FormData();
        
        formData.append("name", $('#addname').val());
        formData.append("addimage", $('#addimage')[0].files[0]);
        formData.append("adddescription", $("#adddescription").val());
        formData.append("addroute", $("#addroute").val());
        formData.append("addstatus", $("#addstatus").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("service.add") }}',
            type: 'post',
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            contentType: false,
            processData: false,
            
            /*data: {
                //id : id,
                name: addname,
                addimage: addimage,
                addhorsepower: addhorsepower,
                status: status,
            },*/
            data: formData,
            dataType: 'json',

            

            success: function(response) {
                $('#show_message').empty();
                console.log(response);
                if(response.status == 200){
                    $('#roleModal').modal('hide');
                    alert(response.success);
                    location.reload()
                }
                if(response.status == 400){
                    alert(response.error);
                }
            },
            error: function (err) {
                $('#show_message').empty();
                //console.log(data);
                if (err.status == 422 || err.status == 500) { // when status code is 422, it's a validation issue
                    console.log(err.responseJSON);
                    //alert(err.responseJSON.message);
                    if(err.responseJSON.message == 'Validation rule unique requires at least 1 parameters.'){
                        $('#show_message').html('<span style="color: red;">Role name must be unique.</span>');
                    }else{
                        $('#show_message').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
                    }
                    
                    
                    // you can loop through the errors object and show it to the user
                    /*console.warn(err.responseJSON.errors);
                    // display errors on each form field
                    $.each(err.responseJSON.errors, function (i, error) {
                        alert(i + " " + error);
                        var el = $(document).find('[name="'+i+'"]');
                        el.after($('<span style="color: red;">'+error[0]+'</span>'));
                    });*/
                }
            },
        });
    }

    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }

    $(document).on('click', '.serviceedit', function() {
        //alert($(this).data('name'));
        var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        frame.src = $(this).data('image');
        $("#description").val($(this).data('description'));
        $("#route").val($(this).data('route'));

        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
        $('select[name^="status1"] option:selected').attr("selected",null);
        $('select[name^="status1"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
        $('#serviceModal').modal('show');
    });

    $(document).on('click', '.close', function() {
        $('#serviceModal').modal('hide');
    });
    $(document).on('click', '.closebutton', function() {
        $('#serviceModal').modal('hide');
    });

    $(document).on('click', '.serviceadd', function() {
        //alert($(this).data('name'));
        /*var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");*/
        $('#serviceaddModal').modal('show');
    });
    $(document).on('click', '.closeadd', function() {
        $('#serviceaddModal').modal('hide');
    });
    $(document).on('click', '.closeaddbutton', function() {
        $('#serviceaddModal').modal('hide');
    });
</script>



<script>
    document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('table-body');
    const pagination = document.getElementById('pagination');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    let currentPage = 1;
    const rowsPerPage = 5;
    const totalRows = 14; // Assume 14 rows for this example
    const totalPages = Math.ceil(totalRows / rowsPerPage);

    const data = [
        { sno: '1', name: 'Machines', image: 'service_images/1649174894.png', description: 'Machines are efficient', imageEmail: 'authurmelo@example.com', img: 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80' },
        { sno: '2', name: 'Implementors', image: 'service_images/1286028071.jpg', description: 'Implementors are efficient', imageEmail: 'andi@example.com', img: 'https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80' },
        { sno: '3', name: 'Earth Movers', image: 'service_images/660615102.png', description: 'Earth Movers are efficient', imageEmail: 'kate@example.com', img: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=761&q=80' },
        { sno: '4', name: 'Agriculture Labor', image: 'service_images/1692977740.png', description: 'Agriculture Labor are efficient', imageEmail: 'candice@example.com', img: 'https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80' },
        { sno: '5', name: 'Harvestors', image: 'service_images/1239528894.png', description: 'Harvestors are efficient', imageEmail: 'orlando@example.com', img: 'https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=644&q=80' },
        // ... Add remaining rows as needed
    ];

    function renderTable() {
        tableBody.innerHTML = '';
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        const rows = data.slice(start, end);
        
        rows.forEach(row => {
            const tableRow = `
                <tr>
                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                        <div class="inline-flex items-center gap-x-3">
                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded">
                            <span>${row.sno}</span>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">${row.name}</td>
                    
                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                        <div class="flex items-center gap-x-2">
                            
                            <div>
                            <img src=${row.image} width="100px">
                                
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">${row.description}</td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                        <div class="flex items-center gap-x-6">
                            <button class="text-gray-500 transition-colors duration-200 hover:text-blue-500 focus:outline-none">
                                Activate
                            </button>
                            <button class="remove-btn text-red-500 transition-colors duration-200 hover:text-red-700 focus:outline-none">
                                Edit
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', tableRow);
        });
    }

    function renderPagination() {
        pagination.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = `<button class="px-2 py-1 text-sm ${i === currentPage ? 'bg-blue-500 text-white' : 'bg-white text-gray-700'} border rounded-md hover:bg-gray-100">${i}</button>`;
            pagination.insertAdjacentHTML('beforeend', pageBtn);
        }

        const pageButtons = pagination.querySelectorAll('button');
        pageButtons.forEach(button => {
            button.addEventListener('click', () => {
                currentPage = parseInt(button.getAttribute('data-page'));
                updatePagination();
            });
        });
    }

    function updatePagination() {
        renderTable();
        renderPagination();
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages;
    }

    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            updatePagination();
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            updatePagination();
        }
    });

    updatePagination();
});


</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const removeButtons = document.querySelectorAll('.remove-btn');
        const modal = document.getElementById('modal');
        const cancelBtn = document.getElementById('cancel-remove');
        const confirmRemoveBtn = document.getElementById('confirm-remove');
        
        removeButtons.forEach(button => {
            button.addEventListener('click', () => {
                modal.classList.remove('hidden');
            });
        });
        
        cancelBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
        
        confirmRemoveBtn.addEventListener('click', () => {
            // Implement the remove action here
            modal.classList.add('hidden');
            alert('Invoice removed successfully');
        });
    });
</script>
@endsection