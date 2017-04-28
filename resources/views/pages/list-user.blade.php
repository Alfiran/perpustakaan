@extends('layouts.app')
@section('title', 'List Transaksi')
@section('content')
    <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <div class="header">
                  <h4 class="title">List User</h4>
                </div>
                <div class="content">
                  <div class="row">
                    <div class="col-md-8 pull-left">
                      <div class="font-icon-list">
                        <a class="btn btn-default submit" href="create-user">
                          <i class="pe-7s-plus"></i>
                        </a>
                        <button class="btn btn-default submit">
                          <i class="pe-7s-refresh"></i>
                        </button>
                      </div>
                    </div>
                    <div class="col-md-4 pull-right">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Pencarian..." value="">
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                      <thead>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>No.Tlp</th>
                        <th>Level</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>001</td>
                          <td>Alfira</td>
                          <td>XI RPL 2</td>
                          <td>Kepanjen</td>
                          <td>098657245378</td>
                          <td>Siswa</td>
                          <td>
                           <a class="btn btn-default" href="edit-user">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>002</td>
                          <td>Alfira</td>
                          <td>XI RPL 2</td>
                          <td>Kepanjen</td>
                          <td>098765432987</td>
                          <td>Siswa</td>
                          <td>
                            <a class="btn btn-default" href="edit-user">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>003</td>
                          <td>Alfira</td>
                          <td>XI RPL 2</td>
                          <td>Kepanjen</td>
                          <td>098765432987</td>
                          <td>Siswa</td>
                          <td>
                           <a class="btn btn-default" href="edit-user">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>003</td>
                          <td>Alfira</td>
                          <td>XI RPL 2</td>
                          <td>Kepanjen</td>
                          <td>098765432987</td>
                          <td>Siswa</td>
                          <td>
                           <a class="btn btn-default" href="edit-user">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>004</td>
                          <td>Doris Greene</td>
                          <td>XI RPL 3</td>
                          <td>Malang</td>
                          <td>098765432987</td>
                          <td>Siswa</td>
                          <td>
                           <a class="btn btn-default" href="edit-user">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>005</td>
                          <td>Mason Porter</td>
                          <td>XI RPL 1</td>
                          <td>Malang</td>
                          <td>876900856345</td>
                          <td>Siswa</td>
                          <td>
                            <a class="btn btn-default" href="edit-user">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>

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