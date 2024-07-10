@extends('layouts.adminapp')

@section('content')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">



<div class="mt-4 mx-4">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Roles</h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <button
                        class="action-btn py-1.5 font-light text-sm  px-4 inline-block mt-2 rounded-lg text-center shadow-md roleadd"
                        type="button" data-toggle="modal" data-target="#roleModal">Add Role</button>
                </div>
            </div>
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            
                            <th class="px-4 py-3">S No</th>   
                            <th class="px-4 py-3">Role Name</th>
                            <th class="px-4 py-3">Role ID</th>
                            <th class="px-4 py-3">Parent Name</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php $i = 0; ?>
                    @foreach($roles_with_parent as $role)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3"><?php echo ++$i; ?></td>
                        <td class="px-4 py-3">Administrator</td>
                            <td class="px-4 py-3">{{ $role['name'] }}</td>
                            <td class="px-4 py-3">{{ $role['role_id'] }}</td>
                            <td class="px-4 py-3">
                                @if(!empty($role['parent_name']->name))
                                    {{ $role['parent_name']->name }}
                                    @else
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    @if($role['status'] == 1)
                                        Active
                                    @elseif($role['status'] == 0)
                                        Inactive
                                    @endif
                                </td>
                            <td class="px-4 py-3">
                                <button type="button" class=" bg-blue-500 text-white py-1.5 font-light text-sm w-full px-4 inline-block mt-2 rounded-lg text-center shadow-md roleedit" data-toggle="modal" data-target="#roleModal" data-id="{{ $role['id'] }}" data-name="{{ $role['name'] }}" data-status="{{ $role['status'] }}" data-parent-id="{{ $role['parent_id'] }}">Edit</button>
                                
                            </td>
                        </tr>
                        @endforeach

                       
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            <!-- Pagination and other controls -->
        </div>
    </div>







<!-- <div class="container mt-20">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-md-start">Roles</div>
                        <div class="col-md-6 text-md-end"><button type="button" class="btn btn-primary roleadd"  data-toggle="modal" data-target="#roleModal">Add Role</button></div>
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
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Role Name</th>
                                <th>Role Id</th>
                                <th>Parent Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($roles_with_parent as $role)
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td>{{ $role['name'] }}</td>
                                <td>{{ $role['role_id'] }}</td>
                                <td>@if(!empty($role['parent_name']->name))
                                    {{ $role['parent_name']->name }}
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if($role['status'] == 1)
                                        Active
                                    @elseif($role['status'] == 0)
                                        Inactive
                                    @endif
                                </td>
                                <td><button type="button" class="btn btn-primary roleedit"  data-toggle="modal" data-target="#roleModal" data-id="{{ $role['id'] }}" data-name="{{ $role['name'] }}" data-status="{{ $role['status'] }}" data-parent-id="{{ $role['parent_id'] }}" >Edit</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLongTitle">Edit Role</h5>
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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Edit Parent') }}*</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                        <option value="0">Select Parent Name</option>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
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
            <button type="button" onclick="updateRole();" class="btn btn-primary">Update</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div>

<div class="modal fade" id="roleaddModal" tabindex="-1" role="dialog" aria-labelledby="roleModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLongTitle">Add Role</h5>
        <button type="button" class="closeadd" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('role.update') }}" method="post">
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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Add Parent') }}*</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="add_parent_id" id="add_parent_id">
                        <option value="0">Select Parent Name</option>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
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
            <button type="button" onclick="addRole();" class="btn btn-primary">Add</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div> -->

</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    function updateRole(){
        var id = $("#id").val();
        var name = $("#name").val();
        var parent_id = $("#parent_id").val();
        var status = $("#status").val();
        //alert(name);
        $.ajax({
            url: '{{ route("role.update") }}',
            type: 'post',
            dataType: 'json',
            data: {
                id : id,
                name: name,
                parent_id: parent_id,
                status: status,
            },
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },

            success: function(response) {
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
                        $('#show_message1').html('<span style="color: red;">Role name must be unique.</span>');
                    }else{
                        $('#show_message1').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
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
            }
        });
    }

    function addRole(){
        //var id = $("#id").val();
        var name = $("#addname").val();
        var add_parent_id = $("#add_parent_id").val();
        var status = $("#addstatus").val();
        $('#show_message').empty();
        //alert(name);
        $.ajax({
            url: '{{ route("role.add") }}',
            type: 'post',
            dataType: 'json',
            data: {
                //id : id,
                name: name,
                add_parent_id: add_parent_id,
                status: status,
            },
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },

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

    $(document).on('click', '.roleedit', function() {
        //alert($(this).data('name'));
        var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        $('select[name^="parent_id"] option:selected').attr("selected",null);
        $('select[name^="parent_id"] option[value="'+ $(this).data('parent-id') +'"]').attr("selected","selected");

        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");
        $('#roleModal').modal('show');
    });

    $(document).on('click', '.close', function() {
        $('#roleModal').modal('hide');
    });
    $(document).on('click', '.closebutton', function() {
        $('#roleModal').modal('hide');
    });

    $(document).on('click', '.roleadd', function() {
        //alert($(this).data('name'));
        /*var modalToggle = document.getElementById($(this).id); // relatedTarget
        //var myModal = document.getElementById($('#roleModal'))
        //myModal.show(modalToggle);
        $("#id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        $('select[name^="status"] option:selected').attr("selected",null);
        $('select[name^="status"] option[value="'+ $(this).data('status') +'"]').attr("selected","selected");*/
        $('#roleaddModal').modal('show');
    });

    $(document).on('click', '.closeadd', function() {
        $('#roleaddModal').modal('hide');
    });
    $(document).on('click', '.closeaddbutton', function() {
        $('#roleaddModal').modal('hide');
    });
</script>
@endsection