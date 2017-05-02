@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="header">
                  <h4 class="title"> Create Transaksi</h4>
                </div>
                <div class="content">
                  <form id="formTransaction">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Judul Buku</label>
                          <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" readonly>
                          <input type="hidden" name="judul_buku" class="form-control" name="book_id">
                          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Peminjam</label>
                          <input type="text" name="nama_peminjan" class="form-control" placeholder="Nama Peminjam" readonly>
                          <input type="hidden"  name="nama_peminjan" class="form-control" name="user_id">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Petugas</label>
                          <input type="text" name="petugas" class="form-control" placeholder="Petugas" name="petugas">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea class="form-control" placeholder="Keterangan" name="keterangan"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <button class="btn btn-default submit" href="#signup">Simpan</button>
                          <button class="btn btn-default submit" href="#signup">Simpan & Kembali</button>
                          <a class="btn btn-default submit" href="list-transaksi">Kembali</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>      
       <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
        url: '{{route("transactions.store")}}', // url post data
        dataType: 'JSON',
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',
        data: $("#formTransaction").serialize(), // data tadi diserialize berdasarkan name
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
            $('#formTransaction').find("input[type=text], textarea").val("");
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
            message: "Data Transaksi berhasil disimpan."
        }, {
                type: 'success',
                timer: 4000
            });
	  }
  </script>
@endsection