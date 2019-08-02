@extends('layouts.master')
@section('content')
@php
$jurusan = App\Jurusan::all();
$kerja = App\User::where('status_kerja' ,'=', 'Bekerja')->orWhere('status_kerja' ,'=', 'Belum Bekerja')->get()->take(2);
$masuk = App\User::all();
$keluar = App\User::all();
@endphp
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sesuaikan Data Untuk Dicetak / 
                <form action="/download-pdf" method="get">
                    <input type="hidden" name="query1">
                    <input type="hidden" name="query2">
                    <input type="hidden" name="query3">
                    <input type="hidden" name="query4">
                    <input type="hidden" name="query5">
                      <button class="btn btn-xs btn-primary" style="width: 100%" type="submit"> Cetak Semua <i class="fa fa-print"></i></button>
                </form>
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('cetak')  }}" method="get" class="form-group">
                  <div class="row">
                    <div class="col-xs-2">
                    <label>Nama</label>
                      <input type="text" placeholder="Nama Alumni" name="query1" class="form-control">
                    </div>
                    <div class="col-xs-2">
                      <label>Jurusan</label>
                      <select class="form-control" name="query2">
                        <option value="" disabled selected>Pilih Jurusan</option>
                        <?php foreach ($jurusan as $data): ?>
                              <option value="{{ $data->nama_jurusan }}"> {{ $data->nama_jurusan }} </option>    
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="col-xs-2">
                      <label>Status Kerja</label>
                      <select class="form-control" name="query3">
                        <option value="" disabled selected>Pilih Status Kerja</option>
                        <?php foreach ($kerja as $data): ?>
                              <option value="{{ $data->status_kerja }}"> {{ $data->status_kerja }} </option>    
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="col-xs-2">
                      <label>Tahun Masuk</label>
                      <select class="form-control" name="query4">
                        <option value="" disabled selected>Pilih Tahun Masuk</option>
                        <?php foreach ($masuk as $data): ?>
                              <option value="{{ $data->tahun_masuk }}"> {{ $data->tahun_masuk }} </option>    
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="col-xs-2">
                      <label>Tahun Keluar</label>
                      <select class="form-control" name="query5">
                        <option value="" disabled selected>Pilih Tahun Keluar</option>
                        <?php foreach ($keluar as $data): ?>
                              <option value="{{ $data->tahun_keluar }}"> {{ $data->tahun_keluar }} </option>    
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="col-xs-1" style="margin-top: 25px">
                      <button class="btn btn-sm btn-primary" type="submit"> Lihat </button>
                    </div>
                  </div>
                </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      @if(!$user)
      @else
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Data Alumni Yang Dicetak </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>NISN</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Jurusan</th>
                  <th>Status Nikah</th>
                  <th>Status Kerja</th>
                  <th>Tahun Masuk</th>
                  <th>Tahun Keluar</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($user as $data): ?>
                    <tr>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->nisn }}</td>
                      <td>{{ $data->alamat }}</td>
                      <td>{{ $data->no_tlp }}</td>
                      <td>{{ $data->jurusan }}</td>
                      <td>{{ $data->status_nikah }}</td>
                      <td>{{ $data->status_kerja }}</td>
                      <td>{{ $data->tahun_masuk }}</td>
                      <td>{{ $data->tahun_keluar }}</td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
              <div style="margin-top: 20px">
                <form action="/download-pdf" method="get">
                    <input type="hidden" name="query1" value="{{ $query1 }}" >
                    <input type="hidden" name="query2" value="{{ $query2 }}" >
                    <input type="hidden" name="query3" value="{{ $query3 }}" >
                    <input type="hidden" name="query4" value="{{ $query4 }}" >
                    <input type="hidden" name="query5" value="{{ $query5 }}" >
                      <button class="btn btn-sm btn-primary" style="width: 100%" type="submit"><i class="fa fa-print"></i> cetak PDF</button>
                </form>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      @endif
@endsection