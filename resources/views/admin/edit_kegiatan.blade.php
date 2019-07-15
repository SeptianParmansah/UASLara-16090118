@extends('templates.back_end._main')
@section('main')

<div class="container">
  <h1>Edit Data Kegiatan</h1>
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif

  <div class="row">
    <div class="col-lg-12">

    </div>
    <form action="/kegiatan/{{$kegiatan->id}}/update" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="Nama Kegiatan">Nama Kegiatan</label>
          <input name="nama_kegiatan" type="text" class="form-control" id="nama_kegiatan" aria-describedby="emailHelp" placeholder="Nama Kegiatan"
          value="{{$kegiatan->nama_kegiatan}}">
        </div>
        <div class="form-group">
          <label for="Alamat">Alamat</label>
          <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat"
          value="{{$kegiatan->alamat}}">
        </div>
        <div class="form-group">
          <label for="Keterangan">Keterangan</label>
          <input name="keterangan" type="text" class="form-control" id="keterangan" aria-describedby="emailHelp" placeholder="Keterangan"
          value="{{$kegiatan->keterangan}}">
       <div class="form-group">
         <label for="Foto">Foto</label>
         <input name="foto" type="file" class="form-control" id="foto" aria-describedby="emailHelp" placeholder="Masukan Foto Kegiatan">
       </div>
       <button type="submit" class="btn btn-warning">Update</button>
     </form>
   </div>
  </div>
</div>
@endsection
