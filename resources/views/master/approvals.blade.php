@extends('layouts.adminapp')

@section('content')

<div class="h-full ml-14 mt-14 mb-10 md:ml-64">


<div class="mt-20 flex justify-center">
    <div class="w-full max-w-2xl">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-gray-200 px-6 py-4 rounded-t-lg flex justify-between items-center">
                <h2 class="text-gray-800 font-semibold text-lg">Approvals</h2>
                <!-- <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md" data-toggle="modal" data-target="#roleModal">Add Machinery</button> -->
            </div>

            <div class="p-6">
                @if (session('status'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="show_messages" id="show_messages"></div>
                <div class="show_messages1" id="show_messages1"></div>

                @if($errors->any())
                    <div class="text-red-500 mb-4">
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    </div>
                @endif
                @if(Session::get('error'))
                    <div class="text-red-500 mb-4">{{ Session::get('error') }}</div>
                    @php
                    Session::put('error', null)
                    @endphp
                @endif
                @if(Session::get('success'))
                    <div class="text-green-500 mb-4">{{ Session::get('success') }}</div>
                    @php
                    Session::put('success', null)
                    @endphp
                @endif

                <a href="{{ route('approve_permissions_sales') }}" class="text-blue-600 hover:underline block mb-2">Sales</a>
                <a href="{{ route('approve_permissions_agents') }}" class="text-blue-600 hover:underline block mb-2">Agents</a>
                <a href="{{ route('approve_permissions_sellers') }}" class="text-blue-600 hover:underline block mb-2">Sellers</a>

                <!-- 
                Uncomment the table below if you want to use it 
                <div class="overflow-x-auto mt-4">
                    <table class="w-full bg-white rounded-lg">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">S No</th>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Role</th>
                                <th class="px-4 py-2 border">Permission Status</th>
                                <th class="px-4 py-2 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($request_roles as $request_role)
                            <tr>
                                <td class="px-4 py-2 border">{{ ++$i }}</td>
                                <td class="px-4 py-2 border">{{ $request_role->user_name }}</td>
                                <td class="px-4 py-2 border">{{ $request_role->role_name }}</td>
                                <td class="px-4 py-2 border">
                                    @if($request_role->role_permission_status == 3)
                                        Requested
                                    @elseif($request_role->role_permission_status == 1)
                                        Approved
                                    @elseif($request_role->role_permission_status == 2)
                                        Rejected
                                    @endif
                                </td>
                                <td class="px-4 py-2 border">
                                    @if($request_role->role_permission_status == 3)
                                        <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2" data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="1" >Approve</button>
                                        <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md" data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="2" >Reject</button>
                                    @elseif($request_role->role_permission_status == 1)
                                        <button type="button" class="bg-red-500 text-white px-4 py-2 rounded-md" data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="2" >Reject</button>
                                    @elseif($request_role->role_permission_status == 2)
                                        <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md" data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="1" >Approve</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                -->
            </div>
        </div>
    </div>
</div>




    <!-- <div class="container mt-20">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 text-md-start">Approvals</div>
                            <div class="col-md-6 text-md-end">
                                <button type="button" class="btn btn-primary machineadd"  data-toggle="modal" data-target="#roleModal">Add Machinary</button></div>
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
                        <div class="show_messages" id="show_messages">

                        </div>
                        <div class="show_messages1" id="show_messages1">

                        </div>

                        
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

                        <a href="{{ route('approve_permissions_sales') }}" style="text-decoration: none; color: blue;">Sales</a><br>
                        <a href="{{ route('approve_permissions_agents') }}" style="text-decoration: none; color: blue;">Agents</a><br>
                        <a href="{{ route('approve_permissions_sellers') }}" style="text-decoration: none; color: blue;">Sellers</a><br>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Horse power</th>
                                    <th>Permission Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0 ?>
                                @foreach($request_roles as $request_role)
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td>{{ $request_role->user_name }}</td>
                                    <td>{{ $request_role->role_name }}</td>
                                    <td>
                                        @if($request_role->role_permission_status == 3)
                                            Requested
                                        @elseif($request_role->role_permission_status == 1)
                                            Approved
                                        @elseif($request_role->role_permission_status == 2)
                                            Rejected
                                        @endif
                                    </td>
                                    <td>
                                        @if($request_role->role_permission_status == 3)
                                            <button type="button" class="btn btn-primary acceptpermission"  data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="1" >Approve</button>
                                            <br>
                                            <button type="button" class="btn btn-danger rejectpermission"  data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="2" >Reject</button>
                                        @elseif($request_role->role_permission_status == 1)
                                            <button type="button" class="btn btn-danger rejectpermission"  data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="2" >Reject</button>
                                        @elseif($request_role->role_permission_status == 2)
                                            <button type="button" class="btn btn-primary acceptpermission"  data-toggle="modal" data-target="#rejectModal" data-user-id="{{ $request_role['user_id'] }}" data-name="{{ $request_role['user_name'] }}" data-role-id="{{ $request_role['role_id'] }}" data-role-permission-status="1" >Approve</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    
</div>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.acceptpermission').click(function(){

      var user_id = $(this).data('user-id');
      var role_id = $(this).data('role-id');
      var role_permission_status = $(this).data('role-permission-status');
      //var password_confirmation = $('#password_confirmation').val();
      $('#show_messages').empty();
      //alert(name + " " + mobile);
      $('.addrequest').attr('disabled', 'disabled' );
      $.ajax
      ({ 
          url: '{{ route("approve_permissions_users") }}',
          headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
          data: {
              "user_id": user_id,
              "role_id": role_id,
              "role_permission_status": role_permission_status,
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

    $('.rejectpermission').click(function(){

      //var name = $('#rname').val();
      var user_id = $(this).data('user-id');
      var role_id = $(this).data('role-id');
      var role_permission_status = $(this).data('role-permission-status');
      //var password_confirmation = $('#password_confirmation').val();
      $('#show_messages1').empty();
      //alert(name + " " + mobile);
      $('.requestedrequest').attr('disabled', 'disabled' );
      $.ajax
      ({ 
          url: '{{ route("reject_permissions_users") }}',
          headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
          data: {
              "user_id": user_id,
              "role_id": role_id,
              "role_permission_status": role_permission_status,
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