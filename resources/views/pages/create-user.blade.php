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
<!--   Core JS Files   -->
<script src={{asset('assets/js/jquery-1.10.2.js')}} type="text/javascript"></script>
<script src={{asset('assets/js/bootstrap.min.js')}} type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src={{asset('assets/js/bootstrap-checkbox-radio-switch.js')}}></script>

<!--  Charts Plugin -->
<script src={{asset('assets/js/chartist.min.js')}}></script>

<!--  Notifications Plugin    -->
<script src={{asset('assets/js/bootstrap-notify.js')}}></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src={{asset('assets/js/light-bootstrap-dashboard.js')}}></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src={{asset('assets/js/demo.js')}}></script>

@endsection