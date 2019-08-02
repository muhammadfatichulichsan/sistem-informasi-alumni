@extends('layouts.master')
@section('content')
       <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tulis Pengumuman
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form method="POST" action="{{ route('pengumuman.store') }}">
                  @csrf
                  <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul">
                  </div>
                    <div class="form-group">
                      <label>Konten</label>
                      <textarea id="editor1" name="konten" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                      </textarea>
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