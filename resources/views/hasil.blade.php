@extends('layouts.master')
@section('content')
@php
$jurusan = App\Jurusan::all();
$kerja = App\User::all();
$masuk = App\User::all();
$keluar = App\User::all();
@endphp
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('cari')  }}" method="get" class="form-group">
                  <div class="row">
                    <div class="col-xs-2">
                    <label>Nama</label>
                      <input type="text" name="query1" class="form-control" placeholder="Nama Alumni">
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
                      <label>Tahun Masuk</label>
                      <select class="form-control" name="query5">
                        <option value="" disabled selected>Pilih Tahun Keluar</option>
                        <?php foreach ($keluar as $data): ?>
                              <option value="{{ $data->tahun_keluar }}"> {{ $data->tahun_keluar }} </option>    
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="col-xs-2" style="margin-top: 25px">
                      <button class="btn btn-sm btn-primary" type="submit"> Submit </button>
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
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      @endif
@endsection