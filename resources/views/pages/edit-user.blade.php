@extends('layouts.app')
@section('title', 'List Book')
@section('content')

           <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="header">
                  <h4 class="title">Edit User</h4>
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
                          <label>Name</label>
                          <input type="email" class="form-control" placeholder="Name">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Class</label>
                          <input type="text" class="form-control" placeholder="Class" value="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" placeholder="Address" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Phone</label>
                          <input type="text" class="form-control" placeholder="Phone" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text" class="form-control" placeholder="Level" value="">
                        </div>
                      </div>
                    </div>
                    <div>
                      <br>
                      <button class="btn btn-default submit" href="#signup">Update</button>
                      <a class="btn btn-default submit" href="list-user">Kembali</a>
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
    $('#nav-list-transaksi').removeClass('active');
    $('#nav-list-book').removeClass('active');
    $('#nav-list-user').addClass('active');
  });
</script>
@endsection