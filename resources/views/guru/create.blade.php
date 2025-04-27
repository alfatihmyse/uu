@extends('layout/main')
@section('section')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{$title}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('guru')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="nip">Nip</label>
                  <input type="text" class="form-control" id="nip" name="nip">
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan">
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                  <label for="foto">File input</label>
                  <input type="file" id="foto" name="foto">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection
