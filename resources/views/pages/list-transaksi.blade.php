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
                        <a class="btn btn-default submit" href={{route('page.create-transaksi')}}>
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
                        <th>Buku</th>
                        <th>User</th>
                        <th>Petugas</th>
                        <th>Status</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Hujan</td>
                          <td>Dakota Rice</td>
                          <td>Alfira</td>
                          <td>Belum kembali</td>
                          <td>02-07-2017</td>
                          <td>
                           <a class="btn btn-default" href="edit-transaksi">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Pukat</td>
                          <td>Minerva Hooper</td>
                          <td>Lailatul</td>
                          <td>Belum kembali</td>
                          <td>05-07-2017</td>
                          <td>
                            <a class="btn btn-default" href="edit-transaksi">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Supernova</td>
                          <td>Sage Rodriguez</td>
                          <td>Rosita</td>
                          <td>Belum kembali</td>
                          <td>05-07-2017</td>
                          <td>
                            <a class="btn btn-default" href="edit-transaksi">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Sepotong hati yang baru</td>
                          <td>Philip Chaney</td>
                          <td>Alfira</td>
                          <td>Belum kembali</td>
                          <td>05-07-2017</td>
                          <td>
                            <a class="btn btn-default" href="edit-transaksi">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Negeri 5 menara</td>
                          <td>Doris Greene</td>
                          <td>Alfira</td>
                          <td>Belum kembali</td>
                          <td>05-07-2017</td>
                          <td>
                            <a class="btn btn-default" href="edit-transaksi">
                              <i class="pe-7s-pen"></i>
                            </a>
                            <button class="btn btn-danger">
                              <i class="pe-7s-trash"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Alice in Wonderland</td>
                          <td>Mason Porter</td>
                          <td>Alfira</td>
                          <td>Belum kembali</td>
                          <td>05-07-2017</td>
                          <td>
                            <a class="btn btn-default" href="edit-transaksi">
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
@endsection