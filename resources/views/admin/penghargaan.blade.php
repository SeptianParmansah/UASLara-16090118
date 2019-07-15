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
        Tambah Data Penghargaan
      </button>
      @endif
    </div>

  <table class="table table-bordered table-hover">
    <tr>
      <th width="20%">Nama Penghargan</th>
      <th width="20%">Keterangan</th>
      <!-- <th width="25%">Foto</th> -->
      @if(auth()->user()->level == 'admin')
      <th width="15%">Action</th>
      @endif
    </tr>
    @foreach($data_penghargaan as $data)
      <tr>

        <td>{{$data->nama_penghargaan}}</td>
        <td>{{$data->keterangan}}</td>
        <!-- <td>{{$data->foto}}</td> -->
        @if(auth()->user()->level == 'admin')
        <td>
          <a href="/penghargaan/{{$data->id}}/edit" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
          <a href="/penghargaan/{{$data->id}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('Hapus Data Kegiatan?')">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penghargan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/penghargaan/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('nama_penghargaan') ? ' has-error' : ''}}">
              <label for="nama_penghargaan">Nama Penghargaan</label>
              <input name="nama_penghargaan" type="text" class="form-control" id="nama_penghargaan" aria-describedby="emailHelp" placeholder="Masukan Nama Penghargan" value="{{old('nama_penghargaan')}}">
                  @if($errors->has('nama_penghargaan'))
                    <span class="help-block">{{$errors->first('nama_penghargaan')}}</span>
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
