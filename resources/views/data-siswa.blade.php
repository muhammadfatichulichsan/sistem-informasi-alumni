@extends('layouts.master')
@section('content')
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Semua Data Alumni</h3>
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
@endsection