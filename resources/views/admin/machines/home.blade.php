@extends('layouts.adminapp')

@section('content')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">



<div class="mt-4 mx-4">
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Add/Edit Machinary</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                <a href="{{route('machine.addview')}}" class="action-btn py-1.5 font-light text-sm px-4 inline-block mt-2 rounded-lg text-center shadow-md machineadd">Add Machinary</a>
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
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">S No</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Horse Power</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php $i = 0; ?>
                    @foreach($machines as $machine)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3"><?php echo ++$i; ?></td>
                            <td class="px-4 py-3">{{ $machine->name }}</td>
                            <td class="px-4 py-3"><img src='{{ asset("machine_images")."/".$machine->image }}' width="100px" /></td>
                            <td class="px-4 py-3">{{ $machine->horse_power }}</td>
                            <td class="px-4 py-3">
                                @if($machine->status == 1)
                                    Active
                                @elseif($machine->status == 0)
                                    Inactive
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <!-- <a  class="bg-blue-500 text-white py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md machineedit" data-toggle="modal" data-target="#machineModal" data-id="{{ $machine['id'] }}" data-name="{{ $machine['name'] }}" data-horse-power="{{ $machine['horse_power'] }}" data-status="{{ $machine['status'] }}" data-image="{{ asset('machine_images').'/'.$machine['image'] }}">Edit</button> -->
                                <a href="{{route('machine.edit',['mech_id' => $machine['id']])}}" class="bg-blue-500 text-white py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md machineedit" >Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





<!-- <div class="container mt-20">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-md-start">Add/Edit Machinary</div>
                        <div class="col-md-6 text-md-end"><button type="button" class="btn btn-primary machineadd"  data-toggle="modal" data-target="#roleModal">Add Machinary</button></div>
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
                                <th>Horse power</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($machines as $machine)
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td>{{ $machine->name }}</td>
                                <td><img src='{{ asset("machine_images")."/".$machine->image }}' width="100px" /></td>
                                <td>{{ $machine->horse_power }}</td>
                                <td>
                                    @if($machine->status == 1)
                                        Active
                                    @elseif($machine->status == 0)
                                        Inactive
                                    @endif
                                </td>
                                <td><button type="button" class="btn btn-primary machineedit"  data-toggle="modal" data-target="#machineModal" data-id="{{ $machine['id'] }}" data-name="{{ $machine['name'] }}" data-horse-power="{{ $machine['horse_power'] }}" data-status="{{ $machine['status'] }}" data-image="{{ asset('machine_images').'/'.$machine['image'] }}" >Edit</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    

                    
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- Modal -->
<!-- <div class="modal fade" id="machineModal" tabindex="-1" role="dialog" aria-labelledby="machineModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="machineModalLongTitle">Edit Machine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('role.update') }}" method="post">
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
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Horse Power') }}*</label>

                <div class="col-md-6">
                    <input id="horse_power" type="text" class="form-control @error('name') is-invalid @enderror" name="horse_power" value="">
                    
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

            <div class="row mb-3 d-none">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status1" id="status1">
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


<!-- <div class="modal fade" id="machineaddModal" tabindex="-1" role="dialog" aria-labelledby="roleModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLongTitle">Add Machinary</h5>
        <button type="button" class="closeadd" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('machine.add') }}" method="post" enctype="multipart/form-data">
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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Horse Power') }}*</label>

                <div class="col-md-6">
                    <input id="addhorsepower" type="text" class="form-control @error('addhorsepower') is-invalid @enderror" name="addhorsepower" value="">

                    @if($errors->has('addhorsepower'))
                        <div class="invalid-feedback">
                            {{ $errors->first('addhorsepower') }}
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
        var image = $('#image')[0].files[0];
        var horsepower = $("#horse_power").val();
        var status = $("#status").val();
        const status1 = $("#status1").val();
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
            if(confirm('Implementors related to this machine will also get '+ status_val +'. Do you want to continue?')){
                
            } else {
                return false;
            }
        }
        var formData = new FormData();
        
        formData.append("id", $('#id').val());
        formData.append("name", $('#name').val());
        formData.append("image", $('#image')[0].files[0]);
        formData.append("horse_power", $("#horse_power").val());
        formData.append("status", $("#status").val());
        formData.append("status1", $("#status1").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("machine.update") }}',
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
        var addimage = $('#addimage')[0].files[0];
        var addhorsepower = $("#addhorsepower").val();
        var status = $("#addstatus").val();
        $('#show_message').empty();
        //alert(name);
        var formData = new FormData();
        
        formData.append("name", $('#addname').val());
        formData.append("addimage", $('#addimage')[0].files[0]);
        formData.append("addhorsepower", $("#addhorsepower").val());
        formData.append("addstatus", $("#addstatus").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("machine.add") }}',
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

    $(document).on('click', '.machineedit', function() {
        //alert($(this).data('name'));
        var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        frame.src = $(this).data('image');
        $("#horse_power").val($(this).data('horse-power'));
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
        $('select[name^="status1"] option:selected').attr("selected",null);
        $('select[name^="status1"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
        $('#machineModal').modal('show');
    });

    $(document).on('click', '.close', function() {
        $('#machineModal').modal('hide');
    });
    $(document).on('click', '.closebutton', function() {
        $('#machineModal').modal('hide');
    });

    $(document).on('click', '.machineadd', function() {
        //alert($(this).data('name'));
        /*var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");*/
        $('#machineaddModal').modal('show');
    });
    $(document).on('click', '.closeadd', function() {
        $('#machineaddModal').modal('hide');
    });
    $(document).on('click', '.closeaddbutton', function() {
        $('#machineaddModal').modal('hide');
    });
</script>
@endsection