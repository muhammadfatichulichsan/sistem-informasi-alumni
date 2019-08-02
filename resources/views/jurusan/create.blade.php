@extends('layouts.master')
@section('content')
       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tambah Jurusan
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form method="POST" action="{{ route('jurusan.store') }}">
                  @csrf
                  <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan">
                  </div>
                    <button class="btn btn-primary"> Kirim </button>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
@endsection