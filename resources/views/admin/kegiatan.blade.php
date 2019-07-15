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
      @if(auth()->user()->level == 'admin')
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Data Kegiatan
      </button>
      @endif
    </div>

  <table class="table table-bordered table-hover">
    <tr>
      <!-- <th width="20%">Foto</th> -->
      <th width="20%">Nama Kegiatan</th>
      <th width="20%">Alamat</th>
      <th width="25%">keterangan</th>
      @if(auth()->user()->level == 'admin')
      <th width="15%">Action</th>
      @endif
    </tr>
    @foreach($data_kegiatan as $data)
      <tr>
        <td>{{$data->nama_kegiatan}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->keterangan}}</td>
        @if(auth()->user()->level == 'admin')
        <td>
          <a href="/kegiatan/{{$data->id}}/edit" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
          <a href="/kegiatan/{{$data->id}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('Hapus Data Kegiatan?')">
            <i class="fa fa-trash"></i></a>
        </td>
        @endif
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kegiatan/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('nama_kegiatan') ? ' has-error' : ''}}">
              <label for="nama_kegiatan">Nama Kegiatan</label>
              <input name="nama_kegiatan" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama Kegiatan" value="{{old('nama_kegiatan')}}">
                  @if($errors->has('nama'))
                    <span class="help-block">{{$errors->first('nama_kegiatan')}}</span>
                  @endif
            </div>

            <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
              <label for="Alamat">Alamat Kegiatan</label>
              <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat" value="{{old('alamat')}}">
              @if($errors->has('alamat'))
                <span class="help-block">{{$errors->first('alamat')}}</span>
              @endif
            </div>

            <div class="form-group{{$errors->has('keterangan') ? 'has-error' : ''}}">
              <label for="Keterangan">Keterangan</label>
              <input name="keterangan" type="text" class="form-control" id="keterangan" aria-describedby="emailHelp" placeholder="Keterangan" value="{{old('keterangan')}}">
              @if($errors->has('keterangan'))
                <span class="help-block">{{$errors->first('keterangan')}}</span>
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
