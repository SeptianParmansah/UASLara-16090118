@extends('templates.back_end._main')
@section('main')

<div class="container">
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif
  <div class="row">
    <div class="col-6">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Data Anggota
      </button>
    </div>

  <table class="table table-bordered table-hover">
    <tr>
      <th width="25%">Nama</th>
      <th width="20%">Asal Sekolah</th>
      <th width="10%">Jenis Kelamin</th>
      <th width="15%">Tanggal Lahir</th>
      <th width="15%">Agama</th>
      <th width="15%">Action</th>
    </tr>
    @foreach($data_anggota as $data)
      <tr>

        <td><a href="/anggota/{{$data->id}}/profile">{{$data->nama}}</a></td>
        <td>{{$data->asal_sekolah}}</td>
        <td>{{$data->jenis_kelamin}}</td>
        <td>{{$data->tanggal_lahir}}</td>
        <td>{{$data->agama}}</td>
        <td>
          <a href="/anggota/{{$data->id}}/edit" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
          <a href="/anggota/{{$data->id}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('Hapus Data Anggota?')">
            <i class="fa fa-trash"></i></a>
        </td>
      </tr>
    @endforeach
  </table>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/anggota/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('nama') ? ' has-error' : ''}}">
              <label for="Nama">Nama</label>
              <input name="nama" type="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama" value="{{old('nama')}}">
                  @if($errors->has('nama'))
                    <span class="help-block">{{$errors->first('nama')}}</span>
                  @endif
            </div>

            <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
              <label for="Email">Email</label>
              <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
              @if($errors->has('email'))
                <span class="help-block">{{$errors->first('email')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('asal_sekolah') ? 'has-error' : ''}}">
              <label for="AsalSekolah">Asal Sekolah</label>
              <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" aria-describedby="emailHelp" placeholder="Masukan Asal Sekolah" value="{{old('asal_sekolah')}}">
              @if($errors->has('asal_sekolah'))
                <span class="help-block">{{$errors->first('asal_sekolah')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="L"{{(old('jenis_kelamin') == 'L') ? ' selected' : ''}}>Laki-Laki</option>
                <option value="P"{{(old('jenis_kelamin') == 'P') ? ' selected' : ''}}>Perempuan</option>
              </select>
              @if($errors->has('jenis_kelamin'))
                <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
              <label for="TanggalLahir">Tanggal Lahir</label>
              <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir" value="{{old('tanggal_lahir')}}">
              @if($errors->has('tanggal_lahir'))
                <span class="help-block">{{$errors->first('tanggal_lahir')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
              <label for="TanggalLahir">Tempat Lahir</label>
              <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir" value="{{old('tempat_lahir')}}">
              @if($errors->has('tempat_lahir'))
                <span class="help-block">{{$errors->first('tempat_lahir')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('agama') ? 'has-error' : ''}}">
              <label for="Agama">Agama</label>
              <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Masukan Agama" value="{{old('agama')}}">
              @if($errors->has('agama'))
                <span class="help-block">{{$errors->first('agama')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
             <label for="Alamat">Alamat</label>
             <textarea name="alamat" class="form-control" id="alamat" rows="4">{{old('alamat')}}</textarea>
             @if($errors->has('alamat'))
               <span class="help-block">{{$errors->first('alamat')}}</span>
             @endif
           </div>
           <div class="form-group{{$errors->has('foto') ? 'has-error' : ''}}">
             <label for="Foto">Foto</label>
             <input name="foto" type="file" class="form-control" id="foto" aria-describedby="emailHelp" placeholder="Pilih Foto Anda">
             @if($errors->has('foto'))
               <span class="help-block">{{$errors->first('foto')}}</span>
             @endif
           </div>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
@endsection
