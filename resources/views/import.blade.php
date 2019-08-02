@extends('layouts.master')
@section('content')
       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Alumni
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
      			  @csrf
                  <div class="form-group">
                    <label>File .xlsx</label>
                    <input type="file" class="form-control" name="file">
                  </div>
                    <button class="btn btn-primary"> Tambah </button>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
@endsection