@extends('templates.back_end._main')
@section('main')

<div class="container">
  <h1>Edit Data Anggota</h1>
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif

  <div class="row">
    <div class="col-lg-12">

    </div>
    <form action="/anggota/{{$anggota->id}}/update" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="Nama">Nama</label>
          <input name="nama" type="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama"
          value="{{$anggota->nama}}">
        </div>
        <div class="form-group">
          <label for="AsalSekolah">Asal Sekolah</label>
          <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" aria-describedby="emailHelp" placeholder="Masukan Asal Sekolah"
          value="{{$anggota->asal_sekolah}}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
            <option value="L" @if($anggota->jenis_kelamin == 'L') selected @endif >Laki-Laki</option>
            <option value="P" @if($anggota->jenis_kelamin == 'P') selected @endif>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="TanggalLahir">Tanggal Lahir</label>
          <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir"
          value="{{$anggota->tanggal_lahir}}">
        </div>
        <div class="form-group">
          <label for="TanggalLahir">Tempat Lahir</label>
          <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir"
          value="{{$anggota->tempat_lahir}}">
        </div>
        <div class="form-group">
          <label for="Agama">Agama</label>
          <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Masukan Agama"
          value="{{$anggota->agama}}">
        </div>
        <div class="form-group">
         <label for="Alamat">Alamat</label>
         <textarea name="alamat" class="form-control" id="alamat" value="{{$anggota->alamat}}" rows="4">{{$anggota->alamat}}</textarea>
       </div>

       <div class="form-group">
         <label for="Foto">Foto</label>
         <input name="foto" type="file" class="form-control" id="foto" aria-describedby="emailHelp" placeholder="Pilih Foto Anda">
       </div>
       <button type="submit" class="btn btn-warning">Update</button>
     </form>
   </div>
  </div>
</div>
@endsection
