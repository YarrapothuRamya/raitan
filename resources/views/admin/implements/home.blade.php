@extends('layouts.adminapp')

@section('content')

<div class="h-full ml-14 mt-14 mb-10 md:ml-64">
  

<div class="mt-4 mx-4">
    <div class="w-full overflow-hidden rounded-lg shadow-md">
        <div class="flex flex-wrap items-center px-4 py-2 bg-gray-50 dark:bg-gray-800">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Add/Edit Implements</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                <a href="{{route('implements.addview')}}" class="action-btn py-1.5 font-light text-sm px-4 inline-block mt-2 rounded-lg text-center shadow-md bg-blue-500 text-white  transition duration-200 implementorsadd" >Add Implements</a>
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
            <table class="w-full">
                <thead>
                    <tr class="text-sm font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-custom-green-light dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">S No</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Machine Type</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-800">
                    <?php $i = 0; ?>
                    @foreach($horse_power_implements as $horse_power_implement)    
                        <tr class="text-sm bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 transition duration-200">
                            <td class="px-4 py-3"><?php echo ++$i; ?></td>
                            <td class="px-4 py-3">{{ $horse_power_implement->name }}</td>
                            <td class="px-4 py-3">{{ $horse_power_implement->machine_name }}</td>
                            
                            <td class="px-4 py-3">
                                    <button onclick="openModal('{{ asset('implement_images').'/'.$horse_power_implement->image }}')" class="">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            <td class="px-4 py-3">
                                @if($horse_power_implement->status == 1)
                                <span class="text-green-600">Active</span>
                                @elseif($horse_power_implement->status == 0)
                                <span class="text-red-600">Inactive</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                            <a href="{{route('implements.edit',['imp_id' => $horse_power_implement['id']])}}" type="button" class=" implementorsedit" data-toggle="modal" data-target="#implementorModal" data-id="{{ $horse_power_implement['id'] }}" data-name="{{ $horse_power_implement['name'] }}" data-machine-id="{{ $horse_power_implement['machine_id'] }}" data-status="{{ $horse_power_implement['status'] }}" data-image="{{ asset('implement_images').'/'.$horse_power_implement['image'] }}"><i class="fas fa-edit"></i></a>   
                           
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

<!-- <div class="container mt-20">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-md-start">Add/Edit Implementors</div>
                        <div class="col-md-6 text-md-end"><button type="button" class="btn btn-primary implementorsadd"  data-toggle="modal" data-target="#roleModal">Add Machinary</button></div>
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
                                <th>Machine Type</th>
                                <th>Image</th>
                                <th>Horse power</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                          
                            <tr>
                                <td><?php echo ++$i; ?></td>
                               
                               
                            </tr>
                        
                        </tbody>
                    </table>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- Modal -->
<!-- <div class="modal fade" id="implementorsModal" tabindex="-1" role="dialog" aria-labelledby="machineModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="machineModalLongTitle">Edit Machine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('implementor.update') }}" method="post">
            @csrf
            <div class="show_message1" id="show_message1">

            </div>
            <input id="id" type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="">
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}*</label>

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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Machine Type') }}*</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="machine_id" id="machine_id">
                        <option value="0">Select Parent Name</option>
                        @foreach($machines as $machine)
                        <option value="{{ $machine->id }}">{{ $machine->name }}</option>
                        @endforeach
                        
                    </select>
                    @if($errors->has('parent_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('parent_id') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" onchange="preview()" class="form-control @error('name') is-invalid @enderror" name="image" value="">
                    <img id="frame" src="" width="100px" />

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}*</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
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

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        
      
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closebutton" data-dismiss="modal">Close</button>
            <button type="button" onclick="updateMachine();" class="btn btn-primary">Update</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div> -->


<!-- <div class="modal fade" id="implementorsaddModal" tabindex="-1" role="dialog" aria-labelledby="roleModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLongTitle">Add Implementor</h5>
        <button type="button" class="closeadd" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('implementor.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="show_message" id="show_message">

            </div>
            <input id="id" type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="">
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}*</label>

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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Machine Type') }}*</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="add_machine_id" id="add_machine_id">
                        <option value="0">Select Parent Name</option>
                        @foreach($machines as $machine)
                        <option value="{{ $machine->id }}">{{ $machine->name }}</option>
                        @endforeach
                        
                    </select>
                    @if($errors->has('parent_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('parent_id') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}*</label>

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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}*</label>

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

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        
      
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closeaddbutton" data-dismiss="modal">Close</button>
            <button type="button" onclick="addMachine();" class="btn btn-primary">Add</button>
          </div>
      
        </form>
    </div>
  </div>
</div> -->


</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    function updateMachine(){
        var id = $("#id").val();
        var name = $("#name").val();
        var machine_id = $("#machine_id").val();
        var image = $('#image')[0].files[0];
        //var horsepower = $("#horse_power").val();
        var status = $("#status").val();
        $('#show_message').empty();
        //alert(name);
        var formData = new FormData();
        
        formData.append("id", $('#id').val());
        formData.append("name", $('#name').val());
        formData.append("machine_id", $("#machine_id").val());
        formData.append("image", $('#image')[0].files[0]);
        //formData.append("horse_power", $("#horse_power").val());
        formData.append("status", $("#status").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("implementor.update") }}',
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


    function addMachine(){
        //var id = $("#id").val();
        var addname = $("#addname").val();
        var add_machine_id = $("#add_machine_id").val();
        var addimage = $('#addimage')[0].files[0];
        //var addhorsepower = $("#addhorsepower").val();
        var status = $("#addstatus").val();
        $('#show_message').empty();
        //alert(name);
        var formData = new FormData();
        
        formData.append("name", $('#addname').val());
        formData.append("add_machine_id", $("#add_machine_id").val());
        formData.append("addimage", $('#addimage')[0].files[0]);
        //formData.append("addhorsepower", $("#addhorsepower").val());
        formData.append("addstatus", $("#addstatus").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("implementor.add") }}',
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

    $(document).on('click', '.implementorsedit', function() {
        //alert($(this).data('name'));
        var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        frame.src = $(this).data('image');
        //$("#horse_power").val($(this).data('horse-power'));
        
        $('select[name^="machine_id"] option:selected').attr("selected",null);
        $('select[name^="machine_id"] option[value="'+ $(this).data('machine-id') +'"]').attr("selected","selected");

        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
        $('#implementorsModal').modal('show');
    });

    $(document).on('click', '.close', function() {
        $('#implementorsModal').modal('hide');
    });
    $(document).on('click', '.closebutton', function() {
        $('#implementorsModal').modal('hide');
    });

    $(document).on('click', '.implementorsadd', function() {
        //alert($(this).data('name'));
        /*var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");*/
        $('#implementorsaddModal').modal('show');
    });
    $(document).on('click', '.closeadd', function() {
        $('#implementorsaddModal').modal('hide');
    });
    $(document).on('click', '.closeaddbutton', function() {
        $('#implementorsaddModal').modal('hide');
    });
</script> 
@endsection