@extends('layouts.master')
@section('content')
@php
$alumni = App\User::where('is_admin' , false)->count();
@endphp
@php
$lowongan = App\Post::all()->count();
@endphp
@php
$pengumuman = App\Pengumuman::all()->count();
@endphp
@php
$jurusan = App\Jurusan::all()->count();
@endphp
	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> {{ $alumni }} </h3>

              <p>Jumlah Semua Alumni</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="/admin" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$lowongan}}</h3>

              <p>Lowongan Perkerjaan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('post.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$pengumuman}}</h3>

              <p>Pengumuman</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('pengumuman.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $jurusan }}</h3>

              <p>Jurusan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Data Alumni   
              <a href="{{ route('import.excel') }}"><button class="btn btn-xs btn-primary pull-right"> Import Excel </button></a></h3>
              <a href="{{ route('cetak') }}"><button class="btn btn-xs btn-primary pull-right"> Cetak Laporan </button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                  <th>Aksi</th>
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
                      <td><button class="btn btn-xs btn-danger">Edit Data</button></td>
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
@endsection