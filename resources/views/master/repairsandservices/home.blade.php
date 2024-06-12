@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-md-start">Add/Edit Repairs and Services</div>
                        <div class="col-md-6 text-md-end"><button type="button" class="btn btn-primary repairsandservicesadd"  data-toggle="modal" data-target="#roleModal">Add Repairs and Services</button></div>
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($repairsandservices as $ras)
                            <tr>
                                <td><?php echo ++$i; ?></td>
                                <td>{{ $ras->name }}</td>
                                <td><img src='{{ asset("repairsandservices_images")."/".$ras->image }}' width="100px" /></td>
                                <td>{{ $ras->description }}</td>
                                <td>
                                    @if($ras->status == 1)
                                        Active
                                    @elseif($ras->status == 0)
                                        Inactive
                                    @endif
                                </td>
                                <td><button type="button" class="btn btn-primary repairsandservicesedit"  data-toggle="modal" data-target="#repairsandservicesModal" data-id="{{ $ras['id'] }}" data-name="{{ $ras['name'] }}" data-description="{{ $ras['description'] }}" data-status="{{ $ras['status'] }}" data-image="{{ asset('repairsandservices_images').'/'.$ras['image'] }}" >Edit</button></td>
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
<div class="modal fade" id="repairsandservicesModal" tabindex="-1" role="dialog" aria-labelledby="repairsandservicesModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="repairsandservicesModalLongTitle">Edit Repairs and Services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('repairsandservices.update') }}" method="post">
            @csrf
            <div class="show_message1" id="show_message1">

            </div>
            <input id="id" type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="">
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
                    <input id="image" type="file" onchange="preview()" class="form-control @error('image') is-invalid @enderror" name="image" value="">
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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

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
                <label for="statusoneone" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('statusoneone') ? 'is-invalid' : '' }}" name="statusoneone" id="statusoneone">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @if($errors->has('statusoneone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('statusoneone') }}
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


<div class="modal fade" id="repairsandservicesaddModal" tabindex="-1" role="dialog" aria-labelledby="repairsandservicesModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="repairsandservicesModalLongTitle">Add Repairs and Services</h5>
        <button type="button" class="closeadd" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('repairsandservices.add') }}" method="post" enctype="multipart/form-data">
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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

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
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">
                    <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="addstatus" id="addstatus">
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

            <!--<div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>-->
        
      
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closeaddbutton" data-dismiss="modal">Close</button>
            <button type="button" onclick="addMachine();" class="btn btn-primary">Add</button>
          </div>
      </div>
        </form>
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
        var status = $("#status").val();
        const status2 = $("#statusoneone").val();
        $('#show_message').empty();
        //alert(status + " " + status2);
        if(status == status2){

        }else{
            var status_val;
            if(status == 1){
                status_val = 'Active';
            }else if(status == 0){
                status_val = 'InActive';
            }
            if(id == 1 || id == 2 || id == 3){
                if(confirm('This Repair and Service in Man power services in the home will be made '+ status_val +'. Do you want to continue?')){
                    
                } else {
                    return false;
                }
            }
            
        }
        var formData = new FormData();
        
        formData.append("id", $('#id').val());
        formData.append("name", $('#name').val());
        formData.append("image", $('#image')[0].files[0]);
        formData.append("description", $("#description").val());
        formData.append("status", $("#status").val());
        formData.append("status1", $("#status1").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("repairsandservices.update") }}',
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
        var adddescription = $("#adddescription").val();
        var status = $("#addstatus").val();
        $('#show_message').empty();
        //alert(name);
        var formData = new FormData();
        
        formData.append("name", $('#addname').val());
        formData.append("addimage", $('#addimage')[0].files[0]);
        formData.append("adddescription", $("#adddescription").val());
        formData.append("addstatus", $("#addstatus").val());
        //var formData = $(this).serialize();
        $.ajax({
            url: '{{ route("repairsandservices.add") }}',
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
@endsection