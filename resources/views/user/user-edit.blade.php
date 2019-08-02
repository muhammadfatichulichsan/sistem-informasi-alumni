@extends('layouts.master')

@section('content')
  <div class="row">
      <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Profil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nisn" class="col-md-4 col-form-label text-md-right">{{ __('NISN') }}</label>

                            <div class="col-md-6">
                                <input id="nisn" type="text" class="form-control{{ $errors->has('nisn') ? ' is-invalid' : '' }}" name="nisn" value="{{ $user->nisn }}" required autofocus>

                                @if ($errors->has('nisn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nisn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ $user->alamat }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_tlp" class="col-md-4 col-form-label text-md-right">{{ __('No Tlp') }}</label>

                            <div class="col-md-6">
                                <input id="no_tlp" type="text" class="form-control{{ $errors->has('no_tlp') ? ' is-invalid' : '' }}" name="no_tlp" value="{{ $user->no_tlp }}" required autofocus>

                                @if ($errors->has('no_tlp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_tlp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan_id" class="col-md-4 col-form-label text-md-right">{{ __('Jurusan') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="jurusan_id">
                                    @foreach($jurusan as $data)
                                        <option value="{{ $data->id }}"
                                            <?php if ($data->id ===  $user->jurusan_id ): ?>
                                                selected
                                            <?php endif ?>
                                            >
                                            {{ $data->nama_jurusan }}
                                        </option>
                                    @endforeach
                                </select>

                                @if ($errors->has('jurusan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jurusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_nikah" class="col-md-4 col-form-label text-md-right">{{ __('Status Nikah') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="status_nikah">
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                </select>

                                @if ($errors->has('status_nikah'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status_nikah') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_kerja" class="col-md-4 col-form-label text-md-right">{{ __('Status Kerja') }}</label>

                            <div class="col-md-6">
                                <input id="status_kerja" type="text" class="form-control{{ $errors->has('status_kerja') ? ' is-invalid' : '' }}" name="status_kerja" value="{{ $user->status_kerja }}" required autofocus>

                                @if ($errors->has('status_kerja'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status_kerja') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_masuk" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Masuk') }}</label>

                            <div class="col-md-6">
                                <input id="tahun_masuk" type="number" class="form-control{{ $errors->has('tahun_masuk') ? ' is-invalid' : '' }}" name="tahun_masuk" value="{{ $user->tahun_masuk }}" required autofocus>

                                @if ($errors->has('tahun_masuk'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tahun_masuk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_keluar" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Keluar') }}</label>

                            <div class="col-md-6">
                                <input id="tahun_keluar" type="number" class="form-control{{ $errors->has('tahun_keluar') ? ' is-invalid' : '' }}" name="tahun_keluar" value="{{ $user->tahun_keluar }}" required autofocus>

                                @if ($errors->has('tahun_keluar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tahun_keluar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="avatar" type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}">

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        </div>
                        <div class="box-footer">
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
          </div>
          <!-- /.box -->
        </div>
  </div>
@endsection
