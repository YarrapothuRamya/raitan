@extends('layouts.app')

@section('content')
<div class="container mt-20">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 text-md-start">Dashboard</div>
                        <div class="col-md-6 text-md-end"><!--<button type="button" class="btn btn-primary roleadd"  data-toggle="modal" data-target="#roleModal">Add Role</button>--></div>
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
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="salesrequestModal" tabindex="-1" role="dialog" aria-labelledby="salesrequestModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="salesrequestModalLongTitle">Sales Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="show_message_one" id="show_message_one">

            </div>
            <input id="role_id" type="hidden" name="role_id" value="">
            <input id="role_permission_status" type="hidden" name="role_permission_status" value="">
            <div class="row mb-3">
                <label for="aadhar" class="col-md-4 col-form-label text-md-end">{{ __('Aadhar card') }}(image)*</label>

                <div class="col-md-6">
                    <input id="aadhar" type="file" class="form-control" name="aadhar" value="">
                </div>
            </div>

            <!--<div class="row mb-3">
                <label for="pan" class="col-md-4 col-form-label text-md-end">{{ __('Pan card') }}(pdf)</label>

                <div class="col-md-6">
                    <input id="pan" type="file" class="form-control" name="pan" value="">
                </div>
            </div>-->

            <!--<div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>-->
        
      
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closebutton" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary addsalesrequestj">Place Request</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="agentrequestModal" tabindex="-1" role="dialog" aria-labelledby="agentrequestModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="agentrequestModalLongTitle">Agent Request</h5>
        <button type="button" class="agentclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="show_message_two" id="show_message_two">

            </div>
            <input id="agent_role_id" type="hidden" name="agent_role_id" value="">
            <input id="agent_role_permission_status" type="hidden" name="agent_role_permission_status" value="">
            <div class="row mb-3">
                <label for="aadhar" class="col-md-4 col-form-label text-md-end">{{ __('Aadhar card') }}(image)*</label>

                <div class="col-md-6">
                    <input id="agent_aadhar" type="file" class="form-control" name="agent_aadhar" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="pan" class="col-md-4 col-form-label text-md-end">{{ __('Pan card') }}(image)*</label>

                <div class="col-md-6">
                    <input id="agent_pan" type="file" class="form-control" name="agent_pan" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="pan" class="col-md-4 col-form-label text-md-end">{{ __('GST No') }}</label>

                <div class="col-md-6">
                    <input id="agent_gst" type="text" class="form-control" name="agent_gst" value="">
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
            <button type="button" class="btn btn-secondary agentclosebutton" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary addagentrequestj">Place Request</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="sellerrequestModal" tabindex="-1" role="dialog" aria-labelledby="sellerrequestModalCenterTitle" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sellerrequestModalLongTitle">Sellers Request</h5>
        <button type="button" class="sellerclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="show_message_three" id="show_message_three">

            </div>
            <input id="seller_role_id" type="hidden" name="seller_role_id" value="">
            <input id="seller_role_permission_status" type="hidden" name="seller_role_permission_status" value="">
            <div class="row mb-3">
                <label for="aadhar" class="col-md-4 col-form-label text-md-end">{{ __('Aadhar card') }}(image)*</label>

                <div class="col-md-6">
                    <input id="seller_aadhar" type="file" class="form-control" name="seller_aadhar" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="pan" class="col-md-4 col-form-label text-md-end">{{ __('Pan card') }}(image)*</label>

                <div class="col-md-6">
                    <input id="seller_pan" type="file" class="form-control" name="seller_pan" value="">
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
            <button type="button" class="btn btn-secondary sellerclosebutton" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary addsellerrequestj">Place Request</button>
          </div>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).on('click', '.addsalesrequest', function() {
    $("#role_id").val($(this).data('role-master-role-id'));
    $("#role_permission_status").val($(this).data('role-id-permission-status'));
    $('#salesrequestModal').modal('show');
});
$(document).on('click', '.close', function() {
    $('#salesrequestModal').modal('hide');
});
$(document).on('click', '.closebutton', function() {
    $('#salesrequestModal').modal('hide');
});
$(document).ready(function(){
  
  $('.addsalesrequestj').click(function(){

      var role_master_role_id = $("#role_id").val();
      var role_id_permission_status = $("#role_permission_status").val();
      //alert(role_master_role_id + " " + role_id_permission_status);
      //return false;
      $('#show_messages').empty();
      //alert(name + " " + mobile);
      $('.addsalesrequestj').attr('disabled', 'disabled' );

      var formData = new FormData();
      
      formData.append("role_master_role_id", $("#role_id").val());
      formData.append("role_id_permission_status", $("#role_permission_status").val());
      formData.append("aadhar", $('#aadhar')[0].files[0]);
      //formData.append("pan", $('#pan')[0].files[0]);


      $.ajax
      ({ 
          url: '{{ route("add_role_request") }}',
          headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
          contentType: false,
          processData: false,
          data: formData,
          type: 'post',
          dataType: 'json',
          success: function(result)
          {
                //var data = JSON.parse(result);
              console.log(result);
              //alert(result.success + " " + result.message);
              //alert(result.message);
              if(result.success){
                //alert(result.success + " " + result.message);
                $('#show_message_one').html('<span style="color: green;">'+ result.message +'</span>');
                $('.addsalesrequestj').removeAttr('Disabled');
                setTimeout(function() {
                     window.location.reload();
                  }, 1000);
              }else if (result.error) {
                $('#show_message_one').html('<span style="color: red;">'+ result.message +'</span>');
              }
              
              $('.addsalesrequestj').removeAttr('Disabled');
              /*setTimeout(function() {
                 window.location.reload();
              }, 1000);*/
          },
          error: function(res)
          {
                //var data = JSON.parse(res);
              console.log(res);
              //alert("Hi");
              if(res.error){
                $('#show_message_one').html('<span style="color: red;">'+ res.message +'</span>');
              }else{
                $('#show_message_one').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
              }
              
              $('.addsalesrequestj').removeAttr('Disabled');
              /*setTimeout(function() {
                 window.location.reload();
              }, 2000);*/
          },
      });
  });



   
})

$(document).on('click', '.addagentrequest', function() {
    $("#agent_role_id").val($(this).data('role-master-role-id'));
    $("#agent_role_permission_status").val($(this).data('role-id-permission-status'));
    $('#agentrequestModal').modal('show');
});
$(document).on('click', '.agentclose', function() {
    $('#agentrequestModal').modal('hide');
});
$(document).on('click', '.agentclosebutton', function() {
    $('#agentrequestModal').modal('hide');
});
$(document).ready(function(){
  
  $('.addagentrequestj').click(function(){

      var role_master_role_id = $("#agent_role_id").val();
      var role_id_permission_status = $("#agent_role_permission_status").val();
      //alert(role_master_role_id + " " + role_id_permission_status);
      //return false;
      $('#show_messages').empty();
      //alert(name + " " + mobile);
      $('.addsalesrequestj').attr('disabled', 'disabled' );

      var formData = new FormData();
      
      formData.append("role_master_role_id", $("#agent_role_id").val());
      formData.append("role_id_permission_status", $("#agent_role_permission_status").val());
      formData.append("aadhar", $('#agent_aadhar')[0].files[0]);
      formData.append("pan", $('#agent_pan')[0].files[0]);
      formData.append("gst", $("#agent_gst").val());


      $.ajax
      ({ 
          url: '{{ route("add_role_request") }}',
          headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
          contentType: false,
          processData: false,
          data: formData,
          type: 'post',
          dataType: 'json',
          success: function(result)
          {
                //var data = JSON.parse(result);
              console.log(result);
              //alert(result.success + " " + result.message);
              //alert(result.message);
              if(result.success){
                //alert(result.success + " " + result.message);
                $('#show_message_two').html('<span style="color: green;">'+ result.message +'</span>');
                $('.addagentrequestj').removeAttr('Disabled');
                setTimeout(function() {
                     window.location.reload();
                  }, 1000);
              }else if (result.error) {
                $('#show_message_two').html('<span style="color: red;">'+ result.message +'</span>');
              }
              
              $('.addagentrequestj').removeAttr('Disabled');
              /*setTimeout(function() {
                 window.location.reload();
              }, 1000);*/
          },
          error: function(res)
          {
                //var data = JSON.parse(res);
              console.log(res);
              //alert("Hi");
              if(res.error){
                $('#show_message_two').html('<span style="color: red;">'+ res.message +'</span>');
              }else{
                $('#show_message_two').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
              }
              
              $('.addagentrequestj').removeAttr('Disabled');
              /*setTimeout(function() {
                 window.location.reload();
              }, 2000);*/
          },
      });
  });



   
})

$(document).on('click', '.addsellerrequest', function() {
    $("#seller_role_id").val($(this).data('role-master-role-id'));
    $("#seller_role_permission_status").val($(this).data('role-id-permission-status'));
    $('#sellerrequestModal').modal('show');
});
$(document).on('click', '.sellerclose', function() {
    $('#sellerrequestModal').modal('hide');
});
$(document).on('click', '.sellerclosebutton', function() {
    $('#sellerrequestModal').modal('hide');
});
$(document).ready(function(){
  
  $('.addsellerrequestj').click(function(){

      var role_master_role_id = $("#seller_role_id").val();
      var role_id_permission_status = $("#seller_role_permission_status").val();
      //alert(role_master_role_id + " " + role_id_permission_status);
      //return false;
      $('#show_messages').empty();
      //alert(name + " " + mobile);
      $('.addsalesrequestj').attr('disabled', 'disabled' );

      var formData = new FormData();
      
      formData.append("role_master_role_id", $("#seller_role_id").val());
      formData.append("role_id_permission_status", $("#seller_role_permission_status").val());
      formData.append("aadhar", $('#seller_aadhar')[0].files[0]);
      formData.append("pan", $('#seller_pan')[0].files[0]);


      $.ajax
      ({ 
          url: '{{ route("add_role_request") }}',
          headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
          contentType: false,
          processData: false,
          data: formData,
          type: 'post',
          dataType: 'json',
          success: function(result)
          {
                //var data = JSON.parse(result);
              console.log(result);
              //alert(result.success + " " + result.message);
              //alert(result.message);
              if(result.success){
                //alert(result.success + " " + result.message);
                $('#show_message_three').html('<span style="color: green;">'+ result.message +'</span>');
                $('.addsellerrequestj').removeAttr('Disabled');
                setTimeout(function() {
                     window.location.reload();
                  }, 1000);
              }else if (result.error) {
                $('#show_message_three').html('<span style="color: red;">'+ result.message +'</span>');
              }
              
              $('.addsellerrequestj').removeAttr('Disabled');
              /*setTimeout(function() {
                 window.location.reload();
              }, 1000);*/
          },
          error: function(res)
          {
                //var data = JSON.parse(res);
              console.log(res);
              //alert("Hi");
              if(res.error){
                $('#show_message_three').html('<span style="color: red;">'+ res.message +'</span>');
              }else{
                $('#show_message_three').html('<span style="color: red;">'+err.responseJSON.message+'</span>');
              }
              
              $('.addsellerrequestj').removeAttr('Disabled');
              /*setTimeout(function() {
                 window.location.reload();
              }, 2000);*/
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