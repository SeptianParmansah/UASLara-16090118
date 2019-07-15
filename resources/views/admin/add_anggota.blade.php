<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Anggota
</button>

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
        <form action="/anggota/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="Nama">Nama</label>
              <input name="nama" type="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <label for="AsalSekolah">Asal Sekolah</label>
              <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" aria-describedby="emailHelp" placeholder="Masukan Asal Sekolah">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="TanggalLahir">Tanggal Lahir</label>
              <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" aria-describedby="emailHelp" placeholder="Masukan Tanggal Lahir">
            </div>
            <div class="form-group">
              <label for="TanggalLahir">Tempat Lahir</label>
              <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" aria-describedby="emailHelp" placeholder="Masukan Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="Agama">Agama</label>
              <input name="agama" type="text" class="form-control" id="agama" aria-describedby="emailHelp" placeholder="Masukan Agama">
            </div>
            <div class="form-group">
             <label for="Alamat">Alamat</label>
             <textarea name="alamat" class="form-control" id="alamat" rows="4"></textarea>
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
