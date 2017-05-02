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
                  <form>

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
                      <button class="btn btn-default submit" href="#signup">Simpan</button>
                      <button class="btn btn-default submit" href="#signup">Simpan & Kembali</button>
                      <a class="btn btn-default submit" href="list-user">Kembali</a>
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
@endsection