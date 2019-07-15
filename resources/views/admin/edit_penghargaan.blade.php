@extends('templates.back_end._main')
@section('main')

<div class="container">
  <h1>Edit Data Penghargaan</h1>
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif

  <div class="row">
    <div class="col-lg-12">

    </div>
    <form action="/penghargaan/{{$penghargaan->id}}/update" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="Nama Penghargan">Nama Penghargaan</label>
          <input name="nama_penghargaan" type="text" class="form-control" id="nama_penghargaan" aria-describedby="emailHelp" placeholder="Nama Penghargaan"
          value="{{$penghargaan->nama_penghargaan}}">
        <div class="form-group">
          <label for="Keterangan">Keterangan</label>
          <input name="keterangan" type="text" class="form-control" id="keterangan" aria-describedby="emailHelp" placeholder="Keterangan"
          value="{{$penghargaan->keterangan}}">
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
