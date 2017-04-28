@extends('layouts.app')
@section('title', 'List Book')
@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <div class="header">
                  <h4 class="title">List Book</h4>
                </div>
                <div class="content">
                  <div class="row">
                    <div class="col-md-8 pull-left">
                      <div class="font-icon-list">
                        <a class="btn btn-default submit" href="create-book">
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
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>A1</td>
                          <td>Hujan</td>
                          <td>Tere Liye</td>
                          <td>
                            <a class="btn btn-default" href="edit-book">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>A2</td>
                          <td>Pukat</td>
                          <td>Minerva Hooper</td>
                          <td>
                           <a class="btn btn-default" href="edit-book">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>A3</td>
                          <td>Supernova</td>
                          <td>Sage Rodriguez</td>
                          <td>
                            <a class="btn btn-default" href="edit-book">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>A4</td>
                          <td>Sepotong hati yang baru</td>
                          <td>Philip Chaney</td>
                          <td>
                            <a class="btn btn-default" href="edit-book">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>A5</td>
                          <td>Negeri 5 menara</td>
                          <td>Doris Greene</td>
                          <td>
                           <a class="btn btn-default" href="edit-book">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>A6</td>
                          <td>Alice in Wonderland</td>
                          <td>Mason Porter</td>
                          <td>
                            <a class="btn btn-default" href="edit-book">
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