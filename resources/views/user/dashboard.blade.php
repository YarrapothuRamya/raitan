@extends('layouts.app')

@section('content')
<div class="container">
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
                    <div class="show_messages" id="show_messages">

                    </div>
                    <div class="show_messages1" id="show_messages1">

                    </div>
                    @foreach($roles as $role)
                        @if($role->request_roles_permission_status == null || $role->request_roles_permission_status == 0)
                            <a href="#" class="addrequest" data-role="{{ $role->role_master_name }}" data-role-master-role-id="{{ $role->role_master_role_id }}" data-role-id-permission-status="3" style="text-decoration: none; color: blue;">Request for {{ $role->role_master_name }} membership</a><br>
                        @elseif($role->request_roles_permission_status == 3)
                            <a href="#" class="requestedrequest" data-role="{{ $role->role_master_name }}" data-role-master-role-id="{{ $role->role_master_role_id }}" data-role-id-permission-status="0" style="text-decoration: none; color: blue;">Requested for {{ $role->role_master_name }} membership, cancel the request</a><br>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.addrequest').click(function(){

      var role_master_role_id = $(this).data('role-master-role-id');
      var role_id_permission_status = $(this).data('role-id-permission-status');
      $('#show_messages').empty();
      //alert(name + " " + mobile);
      $('.addrequest').attr('disabled', 'disabled' );
      $.ajax
      ({ 
          url: '{{ route("add_role_request") }}',
          headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
          data: {
              "role_master_role_id": role_master_role_id,
              "role_id_permission_status": role_id_permission_status,
          },
          type: 'post',
          dataType: 'json',
          success: function(result)
          {
                //var data = JSON.parse(result);
              console.log(result);
              //alert(result.success + " " + result.message);
              if(result.success){
                //alert(result.success + " " + result.message);
                $('#show_messages').html('<span style="color: green;">'+ result.message +'</span>');
              }
              
              $('.addrequest').removeAttr('Disabled');
              setTimeout(function() {
                 window.location.reload();
              }, 1000);
          },
          error: function(res)
          {
                //var data = JSON.parse(res);
              console.log(res);
              if(res.error){
                $('#show_messages').html('<span style="color: red;">'+ res.message +'</span>');
              }
              
              $('.addrequest').removeAttr('Disabled');
              setTimeout(function() {
                 window.location.reload();
              }, 2000);
          },
      });
  });

    $('.requestedrequest').click(function(){

      //var name = $('#rname').val();
      var role_master_role_id = $(this).data('role-master-role-id');
      var role_id_permission_status = $(this).data('role-id-permission-status');
      //var password_confirmation = $('#password_confirmation').val();
      $('#show_messages1').empty();
      //alert(name + " " + mobile);
      $('.requestedrequest').attr('disabled', 'disabled' );
      $.ajax
      ({ 
          url: '{{ route("cancel_role_request_user") }}',
          headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
          data: {
              "role_master_role_id": role_master_role_id,
              "role_id_permission_status": role_id_permission_status,
          },
          type: 'post',
          dataType: 'json',
          success: function(result)
          {
              console.log(result);
              if(result.success){
                $('#show_messages1').html('<span style="color: red;">'+ result.message +'</span>');
              }
              $('.requestedrequest').removeAttr('Disabled');
              setTimeout(function() {
                 window.location.reload();
              }, 1000);
          },
          error: function(res)
          {
              console.log(res);
              if(res.responseJSON.message == 'Validation rule unique requires at least 1 parameters.'){
                  $('#show_messages1').html('<span style="color: red;">Phone Number must be unique.</span>');
              }else{
                  $('#show_messages1').html('<span style="color: red;">'+res.responseJSON.message+'</span>');
              }
              console.log(res);
              if(res.error){
                $('#show_messages1').html('<span style="color: red;">'+ res.message +'</span>');
              }
              
              $('.requestedrequest').removeAttr('Disabled');
              setTimeout(function() {
                 window.location.reload();
              }, 2000);
          },
      });
  });
})
</script>
@endsection