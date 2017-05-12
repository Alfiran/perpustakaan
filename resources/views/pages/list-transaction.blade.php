@extends('layouts.app')
@section('title', 'List Transaksi')
@section('content')
   <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <h4 class="title">List Transaksi</h4>
                </div>
                <div class="content">
                  <div class="row">
                    <div class="col-md-8 pull-left">
                      <div class="font-icon-list">
                        <a class="btn btn-default submit" href={{route('page.create-transaction')}}>
                          <i class="pe-7s-plus"></i>
                        </a>
                        <a class="btn btn-default submit" href={{route( 'page.list-transaction')}}>
                          <i class="pe-7s-refresh"></i>
                        </a>
                        <a class="btn btn-default submit"href={{route( 'page.list-book')}}>
                          <i class="pe-7s-mail-open-file"></i>
                        </a>
                         <a class="btn btn-default submit"href={{route( 'page.list-book')}}>
                          <i class="pe-7s-print"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4 pull-right">
                      <form method="GET" action="{{route('page.list-transaction')}}"> 
                      <div class="form-group">
                      <input type="text" class="form-control" name="search" placeholder="Pencarian berdasarkan Kode TRX..." value="">
                    </div>
                  </form>
                    </div>
                  </div>
                  <div class="table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                      <thead>
                        <th>Kode TRX</th>
                        <th>Buku</th>
                        <th>Peminjam</th>
                        <th>Petugas</th>
                        <th>Status</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                      </thead>
                       <tbody>
                         @foreach ($transactions as $transaction)
                          <tr>
                            <td>{{ $transaction->kode }}</td>
                            <td>{{ $transaction->book == null ? "null" : $transaction->book->judul }}</td>
                            <td>{{ $transaction->user == null ? "null" : $transaction->user->name }}</td>
                            <td>{{ $transaction->petugas }}</td>
                            <td>{{ $transaction->status }}</td>
                            <td>{{ $transaction->expired_at }}</td>
                            <td>
                              <a class="btn btn-default" href={{route('page.edit-transaction',['id' => $transaction->id])}}>
                                <i class="pe-7s-pen"></i>
                              </a>
                              <button class="btn btn-danger" onClick="deleteData('{{$transaction->id}}')">
                                <i class="pe-7s-trash"></i>
                              </button>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center">
      <!--pagination-->
      {{$transactions->links()}}
    </div>
          </div>
        </div>
@endsection
@section('scripts')
<script>
  function deleteData(transactionId){
    console.log(transactionId);
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel plx!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        // delete data using ajax
        $.ajax({
          url: "/api/transactions/" + transactionId,
          type: 'DELETE',
          success: function( data, textStatus, jQxhr ){
            console.log(data);
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          },
          error: function( data, textStatus, jQxhr ){
            swal("Internal Server Error", "Whooops something went wrong!", "error");
          }
        });
        // reload page
        location.reload();
      } else {
        swal("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });
  };
</script>
@endsection