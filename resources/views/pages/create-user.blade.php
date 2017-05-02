@extends('layouts.app')
@section('title', 'List Book')
@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="header">
                  <h4 class="title">Create User</h4>
                </div>
                <div class="content">
                  <form id="formUser">
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
                          <input type="text" name="class" class="form-control" placeholder="Class" value="">
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
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text" name="level" class="form-control" placeholder="Level" value="">
                        </div>
                      </div>
                    </div>
                    <div>
                      <br>
                      <button class="btn btn-default submit" id="btnSimpan">Simpan</button>
                      <button class="btn btn-default submit" id="btnSimpanKembali">Simpan & Kembali</button>
                      <a class="btn btn-default submit" route={{route('page.list-book')}}>Kembali</a>
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
      
    });

    // ini adalah proses submit data menggunakan Ajax
    $("#btnSimpan").click(function(event) {
      // kasih ini dong biar gag hard reload
      event.preventDefault();
      $.ajax({
        url: '{{route("users.store")}}', // url post data
        dataType: 'JSON',
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',
        data: $("#formUser").serialize(), // data tadi diserialize berdasarkan name
        success: function( data, textStatus, jQxhr ){
            console.log('status =>', textStatus);
            console.log('data =>', data);
            // scroll up
            // $('html, body').animate({
            //     scrollTop: $("#nav-top").offset().top
            // }, 2000);
            // tampilkan pesan sukses
            showNotifSuccess();
            // clear data inputan
            $('#formUser').find("input[type=text], textarea").val("");
            // kembali kelist book
        },
        error: function( data, textStatus, errorThrown ){
          console.log('data', data.responseText);
            console.log( errorThrown );
            // $('html, body').animate({
            //     scrollTop: $("#nav-top").offset().top
            // }, 2000);
            // scroll up 
            // tampilkan pesan error
            $('#errMsg').toggleClass('hide');
            $('#errMsg').addClass('alert-warning');
            
            // jangan clear data
        }
      });
    });
    
    function showNotifSuccess(){
    	$.notify({
            icon: 'pe-7s-checklist',
            message: "Data User berhasil disimpan."
        }, {
                type: 'success',
                timer: 4000
            });
	  }
  </script>
@endsection