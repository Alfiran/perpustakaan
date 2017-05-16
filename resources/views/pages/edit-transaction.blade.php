@extends('layouts.dashboard')
@section('title', 'Edit Transaksi')
@section('content')

           <div class="container-fluid">
         <div class="row">
             <div class="col-md-8">
                 <div class="card">
                     <div class="header">
                         <h4 class="title"> Edit Transaksi</h4>
                     </div>
                     <div class="content">
                         <form id="formTransaction">
                     <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Buku</label>
                             <select class="form-control" id="idbooks" name="book_id" value="{{$transaction->book_id}}">
                             @foreach($books as $book)
                            @if($book->id == $transaction->book_id)
                              <option value="{{$book->id}}" selected>{{$book->judul}}</option>
                             @endif
                              <option value="{{$book->id}}">{{$book->judul}}</option>
                             @endforeach
                            </select>
                     </div>
                     </div>
                     </div>

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" id="idstatus" name="status" value="{{$transaction->status}}">
                            @foreach($status as $s)
                              @if($s == $transaction->status)
                                <option value="{{$s}}" selected>{{$s}}</option>
                              @endif
                              <option value="{{$s}}">{{$s}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                                                           
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Peminjam</label>
                         <select class="form-control" id="idusers" name="user_id" value="{{$transaction->peminjam}}">
                            @foreach($users as $user)
                            @if($user->id == $transaction->user_id)
                              <option value="{{$user->id}}" selected>{{$user->name}}</option>
                            @endif
                            <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Petugas</label>
                          <input type="text" name="petugas" class="form-control" placeholder="Petugas" value="{{$transaction->petugas}}">
                        </div>
                      </div>
                    </div>
                    
                    <button class="btn btn-default submit" id="btnUpdate">Update</button>
                    <a class="btn btn-default submit" href="list-transaksi">Kembali</a>
                                </div>
                                <hr>

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
    $('#nav-list-book').removeClass('active');
    $('#nav-list-member').removeClass('active');
    $('#nav-list-transaction').addClass('active');
  });
</script>
<script>
 $(document).ready(function(){
     $('#idbooks').select2();
     $('#idmembers').select2();
     $('#idstatus').select2();
    });

    // ini adalah proses submit data menggunakan Ajax
    $("#btnUpdate").click(function(event) {
      // kasih ini dong biar gag hard reload
      event.preventDefault();
      $.ajax({
        url: '{{route("transactions.update",['id' => $transaction->id])}}', // url edit data
        dataType: 'JSON',
        type: 'PUT',
        contentType: 'application/x-www-form-urlencoded',
        data: $("#formTransaction").serialize(), // data tadi diserialize berdasarkan name
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
            window.location.href = '{{route("page.list-transaction")}}'
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
            message: "Edit Data Transaksi berhasil disimpan."
        }, {
                type: 'success',
                timer: 4000
            });
	  }
</script>
@endsection