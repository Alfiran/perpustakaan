@extends('layouts.dashboard')
@section('title', 'Create Member')
@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
             <div class="alert alert-dismissible hide" id="errMsg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span id="errData"></span>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-8">
              <div class="card">
                <div class="header">
                  <h4 class="title">Create Member</h4>
                </div>
                <div class="content">
                  <form id="formMember">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Class</label>
                           <select id="idclass" class="form-control" id="idstatus" name="class">
                              <option value="X RPL 1">X RPL 1</option>
                              <option value="X RPL 2">X RPL 2</option>
                              <option value="X RPL 3">X RPL 3</option>
                              <option value="XI RPL 1">XI RPL 1</option>
                              <option value="XI RPL 2">XI RPL 2</option>
                              <option value="XI RPL 3">XI RPL 3</option>
                              <option value="XII RPL 1">XII RPL 1</option>
                              <option value="XII RPL 2">XII RPL 2</option>
                              <option value="XII RPL 3">XII RPL 3</option>
                              <option value="X TEI 1">X TEI 1</option>
                              <option value="X TEI 2">X TEI 2</option>
                              <option value="X TEI 3">X TEI 3</option>
                              <option value="XI TEI 1">XI TEI 1</option>
                              <option value="XI TEI 2">XI TEI 2</option>
                              <option value="XI TEI 3">XI TEI 3</option>
                              <option value="XII TEI 1">XII TEI 1</option>
                              <option value="XII TEI 2">XII TEI 2</option>
                              <option value="XII TEI 3">XII TEI 3</option>
                              <option value="X TKJ 1">X TKJ 1</option>
                              <option value="X TKJ 2">X TKJ 2</option>
                              <option value="X TKJ 3">X TKJ 3</option>
                              <option value="XI TKJ 1">XI TKJ 1</option>
                              <option value="XI TKJ 2">XI TKJ 2</option>
                              <option value="XI TKJ 3">XI TKJ 3</option>
                              <option value="XII TKJ 1">XII TKJ 1</option>
                              <option value="XII TKJ 2">XII TKJ 2</option>
                              <option value="XII TKJ 3">XII TKJ 3</option>
                              <option value="X TKR 1">X TKR 1</option>
                              <option value="X TKR 2">X TKR 2</option>
                              <option value="X TKR 3">X TKR 3</option>
                              <option value="XI TKR 1">XI TKR 1</option>
                              <option value="XI TKR 2">XI TKR 2</option>
                              <option value="XI TKR 3">XI TKR 3</option>
                              <option value="XII TKR 1">XII TKR 1</option>
                              <option value="XII TKR 2">XII TKR 2</option>
                              <option value="XII TKR 3">XII TKR 3</option>
                              <option value="X TSM 1">X TSM 1</option>
                              <option value="X TSM 2">X TSM 2</option>
                              <option value="X TSM 3">X TSM 3</option>
                              <option value="XI TSM 1">XI TSM 1</option>
                              <option value="XI TSM 2">XI TSM 2</option>
                              <option value="XI TSM 3">XI TSM 3</option>
                              <option value="XII TSM 1">XII TSM 1</option>
                              <option value="XII TSM 2">XII TSM 2</option>
                              <option value="XII TSM 3">XII TSM 3</option>

                          </select>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="address" class="form-control" placeholder="Address" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" name="phone" class="form-control" placeholder="Phone" value="">
                        </div>
                      </div>
                    </div>
                    
                    <div>
                      <br>
                      <button class="btn btn-default submit" id="btnSimpan">Simpan</button>
                      <button class="btn btn-default submit" id="btnSimpanKembali">Simpan & Kembali</button>
                       <a class="btn btn-default submit" href={{route('page.list-member')}}>Kembali</a>
                    </div>
                    <hr>
                   
                </div>
              </div>

            </div>
          </div>
        </div>

        </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
    $('#idclass').select2();
    });

    // ini adalah proses submit data menggunakan Ajax
    $("#btnSimpan").click(function(event) {
      // kasih ini dong biar gag hard reload
      event.preventDefault();
      $.ajax({
        url: '{{route("members.store")}}', // url post data
        dataType: 'JSON',
        type: 'POST',
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
            // clear data inputan
            $('#formMember').find("input[type=text], textarea").val("");
            // kembali kelist member
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
    $("#btnSimpanKembali").click(function(event) {
      // kasih ini dong biar gag hard reload
      event.preventDefault();
      $.ajax({
        url: '{{route("members.store")}}', // url post data
        dataType: 'JSON',
        type: 'POST',
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
            // clear data inputan
            $('#formMember').find("input[type=text], textarea").val("");
            // kembali kelist member
            window.location.replace('{{route("page.list-member")}}');
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
            message: "Data Member berhasil disimpan."
        }, {
                type: 'success',
                timer: 4000
            });
	  }
  </script>
@endsection