@extends('layouts.app')
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
                                    <form>
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Id</label>
                                                    <input type="text" class="form-control" placeholder="Id" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Book ID</label>
                                                    <input type="email" class="form-control" placeholder="Book ID">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>User ID</label>
                                                    <input type="text" class="form-control" placeholder="User ID" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Petugas</label>
                                                    <input type="text" class="form-control" placeholder="Petugas" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input type="text" class="form-control" placeholder="Status" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Expired at</label>
                                                <input type="number" class="form-control" placeholder="Expired at">
                                            </div>
                                        </div>
                                </div>
                                <div>
                                    <br>
                                    <button class="btn btn-default submit" href="#signup">Update</button>
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
    // aktifkan class nav user
    $('#nav-dashboard').removeClass('active');
    $('#nav-list-book').removeClass('active');
    $('#nav-list-user').removeClass('active');
    $('#nav-list-transaction').addClass('active');
  });
</script>
@endsection