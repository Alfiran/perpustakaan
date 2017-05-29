@extends('layouts.dashboard')
@section('title', 'List Book')
@section('content')

            <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="header">
                  <h4 class="title">Edit Book</h4>
                </div>
                <div class="content">
                  <form id="formBook">
                    <input type="hidden" class="form-control" value="{{$book->id}}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Kode Buku</label>
                          <input type="text" name="kode_buku" class="form-control" placeholder="Kode Buku" value="{{$book->kode_buku}}">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Judul</label>
                          <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{$book->judul}}">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Pengarang</label>
                          <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" value="{{$book->pengarang}}">
                        </div>
                      </div>
                    </div>
                    <div>
                      <br>
                      <button class="btn btn-default submit" id="btnUpdate">Update</button>
                       <a class="btn btn-default submit" href={{route('page.list-book')}}>Kembali</a>
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
    $('#nav-list-transaction').removeClass('active');
    $('#nav-list-member').removeClass('active');
    $('#nav-list-book').addClass('active');
  });
</script>
<script>
 $(document).ready(function(){
      
    });

    // ini adalah proses submit data menggunakan Ajax
    $("#btnUpdate").click(function(event) {
      // kasih ini dong biar gag hard reload
      event.preventDefault();
      $.ajax({
        url: '{{route("books.update",['id' => $book->id])}}', // url edit data
        dataType: 'JSON',
        type: 'PUT',
        contentType: 'application/x-www-form-urlencoded',
        data: $("#formBook").serialize(), // data tadi diserialize berdasarkan name
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
            window.location.href = '{{route("page.list-book")}}'
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
            message: "Edit Data Buku berhasil disimpan."
        }, {
                type: 'success',
                timer: 4000
            });
	  }
</script>
@endsection