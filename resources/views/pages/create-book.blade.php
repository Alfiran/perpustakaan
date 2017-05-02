@extends('layouts.app')
@section('title', 'Dashboard')
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
                  <h4 class="title">Create Book</h4>
                </div>
                <div class="content">
                  <form id="formBook">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Kode Buku</label>
                          <input type="text" name="kode_buku" class="form-control" placeholder="Kode Buku">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Judul</label>
                          <input type="text" name="judul" class="form-control" placeholder="Judul" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Pengarang</label>
                          <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" value="">
                        </div>
                      </div>
                    </div>
                    <div>
                      <br>
                      <button class="btn btn-default submit" id="btnSimpan">Simpan</button>
                      <button class="btn btn-default submit" id="btnSimpanKembali">Simpan & Kembali</button>
                      <a class="btn btn-default submit" route={{route('page.list-book')}}>Kembali</a>
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
        url: '{{route("books.store")}}', // url post data
        dataType: 'JSON',
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',
        data: $("#formBook").serialize(), // data tadi diserialize berdasarkan name
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
            $('#formBook').find("input[type=text], textarea").val("");
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
            message: "Data Buku berhasil disimpan."
        }, {
                type: 'success',
                timer: 4000
            });
	  }
  </script>
@endsection