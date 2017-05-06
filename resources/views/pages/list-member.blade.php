@extends('layouts.app') @section('title', 'List Transaksi') @section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">List Member</h4>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-8 pull-left">
              <div class="font-icon-list">
                <a class="btn btn-default submit" href={{route( 'page.create-member')}}>
                  <i class="pe-7s-plus"></i>
                </a>
                <a class="btn btn-default submit" href={{route( 'page.list-member')}}>
                  <i class="pe-7s-refresh"></i>
                </a>
              </div>
            </div>
            <div class="col-md-4 pull-right">
              <form method="GET" action="{{route('page.list-member')}}"> 
                <div class="form-group">
                  <input type="text" class="form-control" name="search" placeholder="Pencarian..." value="">
                </div>
              </form>
            </div>
          </div>
          <div class="table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No.Tlp</th>
                <th>Level</th>
              </thead>
              <tbody>
                @foreach ($members as $member)
                <tr>
                  <td>{{ $member->name }}</td>
                  <td>{{ $member->class }}</td>
                  <td>{{ $member->address }}</td>
                  <td>{{ $member->phone }}</td>
                  <td>
                    @if($member->level == 1)
                    <span class="label label-primary">Administrator</span> @else
                    <span class="label label-default">Member</span> @endif
                  </td>
                  <td>
                    <a class="btn btn-default" href={{route( 'page.edit-member',[ 'id'=> $member->id])}}>
                    <i class="pe-7s-pen"></i>
                    </a>
                    <button class="btn btn-danger" onClick="deleteData('{{$member->id}}')">
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
      {{$members->links()}}
    </div>
  </div>
</div>
@endsection 
@section('scripts')
<script>
  function deleteData(userId) {
    console.log(userId);
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
      function(isConfirm) {
        if (isConfirm) {
          // delete data using ajax
          $.ajax({
            url: "/api/members/" + userId,
            type: 'DELETE',
            success: function(data, textStatus, jQxhr) {
              console.log(data);
              swal("Deleted!", "Your imaginary file has been deleted.", "success");
            },
            error: function(data, textStatus, jQxhr) {
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