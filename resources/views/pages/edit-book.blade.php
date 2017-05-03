@extends('layouts.app')
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
                  <form id="formUser">
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
                          <label>Kode Buku</label>
                          <input type="email" class="form-control" placeholder="Kode Buku">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Judul</label>
                          <input type="text" class="form-control" placeholder="Judul" value="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Pengarang</label>
                          <input type="text" class="form-control" placeholder="Pengarang" value="">
                        </div>
                      </div>
                    </div>
                    <div>
                      <br>
                      <button class="btn btn-default submit" href="#signup">Update</button>
                      <a class="btn btn-default submit" href="list-book">Kembali</a>
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
    // aktifkan class nav user
    $('#nav-dashboard').removeClass('active');
    $('#nav-list-transaction').removeClass('active');
    $('#nav-list-user').removeClass('active');
    $('#nav-list-book').addClass('active');
  });
</script>
@endsection