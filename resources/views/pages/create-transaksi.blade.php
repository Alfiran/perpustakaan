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
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Judul Buku</label>
                          <input type="text" class="form-control" placeholder="Judul Buku" readonly>
                          <input type="hidden" class="form-control" name="book_id">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Peminjam</label>
                          <input type="text" class="form-control" placeholder="Nama Peminjam" readonly>
                          <input type="hidden" class="form-control" name="user_id">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Petugas</label>
                          <input type="text" class="form-control" placeholder="Petugas" name="petugas">
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
@endsection
@section('scripts')
<!--   Core JS Files   -->
<script src={{asset('assets/js/jquery-1.10.2.js" type="text/javascript')}}></script>
<script src={{asset('assets/js/bootstrap.min.js" type="text/javascript')}}></script>

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