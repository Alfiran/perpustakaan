@extends('layouts.dashboard')
@section('title', 'List Book')
@section('content')

           <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="header">
                  <h4 class="title">Edit Member</h4>
                </div>
                <div class="content">
                  <form id="formMember">
                    <input type="hidden" class="form-control" value="{{$member->id}}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name" value="{{$member->name}}">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Class</label>
                           <select class="form-control" id="idclass" name="class" value="{{$member->class}}">
                            @foreach($class as $c)
                              @if($c == $member->class)
                                <option value="{{$c}}" selected>{{$c}}</option>
                              @endif
                              <option value="{{$c}}">{{$c}}</option>
                            @endforeach
                          </select>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="address" class="form-control" placeholder="Address" value="{{$member->address}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{$member->phone}}">
                        </div>
                      </div>
                    </div>
                    
                    <div>
                      <br>
                      <button class="btn btn-default submit" id="btnUpdate">Update</button>
                       <a class="btn btn-default submit" href={{route('page.list-member')}}>Kembali</a>
                    </div>
                    <hr>
                   
                </div>
              </div>

            </div>
          </div>
        </div>

@endsection
@section('scripts')
<script>
  $(document).ready(function(){
    // aktifkan class nav member
    $('#nav-dashboard').removeClass('active');
    $('#nav-list-transaksi').removeClass('active');
    $('#nav-list-book').removeClass('active');
    $('#nav-list-member').addClass('active');
  });
</script>
<script>
 $(document).ready(function(){
 $('#idclass').select2();
    });

    // ini adalah proses submit data menggunakan Ajax
    $("#btnUpdate").click(function(event) {
      // kasih ini dong biar gag hard reload
      event.preventDefault();
      $.ajax({
        url: '{{route("members.update",['id' => $member->id])}}', // url edit data
        dataType: 'JSON',
        type: 'PUT',
        contentType: 'application/x-www-form-urlencoded',
        data: $("#formMember").serialize(), // data tadi diserialize berdasarkan name
        success: function( data, textStatus, jQxhr ){
            console.log('status =>', textStatus);
            console.log('data =>', data);
            // clear validation error messsages
            $('#errMsg').addClass('hide');
            $('#errData').html('');
            // scroll up
            // $('html, body').animate({
            //     scrollTop: $("#nav-top").offset().top
            // }, 2000);
            // tampilkan pesan sukses
            showNotifSuccess();
            // kembali kelist book
            window.location.href = '{{route("page.list-member")}}'
        },
        error: function( data, textStatus, errorThrown ){
          var messages = jQuery.parseJSON(data.responseText);
            console.log( errorThrown );
            // $('html, body').animate({
            //     scrollTop: $("#nav-top").offset().top
            // }, 2000);
            // scroll up 
            // tampilkan pesan error
             $('#errData').html('');
          $('#errMsg').addClass('alert-warning');
          $('#errMsg').removeClass('hide');
          $.each(messages, function(i, val) {
            $('#errData').append('<p>'+ i +' : ' + val +'</p>')
            console.log(i,val);
          });          
          // jangan clear data
        }
      });
    });
    
    function showNotifSuccess(){
    	$.notify({
            icon: 'pe-7s-checklist',
            message: "Edit Data Member berhasil disimpan."
        }, {
                type: 'success',
                timer: 4000
            });
	  }
</script>
@endsection