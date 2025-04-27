@extends('layout/main')
@push('style')
<link rel="stylesheet" href="{{asset('assets')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush
@section('section')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="row">
                  <div class="col-md-10">
                  <h3 class="box-title">Hover Data Table</h3>
                  </div>
                  <div class="col-md-2">
                      <a href="{{url('guru/create')}}" class="btn btn-primary">tambah data guru</a>
                  </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>email</th>
                  <th>jabatan</th>
                  <th>nip</th>
                  <th>alamat</th>
                  <th>pendidikan</th>
                  <th>foto</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($guru as $gr)
                  <tr>
                      <td>{{$gr->name}}</td>
                      <td>{{$gr->email}}</td>
                      <td>{{$gr->jabatan}}</td>
                      <td>{{$gr->nip}}</td>
                      <td>{{$gr->alamat}}</td>
                      <td>{{$gr->pendidikan}}</td>
                      <td><img src="{{asset('image/'. $gr->foto)}}" alt="" width="100"></td>
                      <td>
                        <div class="row">
                          <div class="col-md-6">
                            <button class="btn btn-info">Edit</button>
                          </div>
                          <div class="col-md-6">
                            <button class="btn btn-warning">Hapus</button>
                          </div>
                        </div>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
@endsection
@push('script')
<script src="{{asset('assets')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endpush
