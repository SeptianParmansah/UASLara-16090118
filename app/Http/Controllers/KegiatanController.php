<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
  public function index()
  {
    $data_kegiatan = \App\Kegiatan::all();
    return view('admin.kegiatan', ['data_kegiatan' => $data_kegiatan]);
  }
  
  public function create(Request $request)
  {
    \App\Kegiatan::create($request->all());
    return redirect('/kegiatan')->with('sukses', 'Data Anggota Berhasil di Tambah');
  }

  public function edit($id)
  {
    $kegiatan = \App\Kegiatan::find($id);
    return view('admin.edit_kegiatan', ['kegiatan' => $kegiatan]);
  }

  public function update(Request $request, $id)
  {
    $kegiatan = \App\Kegiatan::find($id);
    $kegiatan->update($request->all());
    return redirect('/kegiatan')->with('sukses', 'Data Berhasil di Update');
  }

  public function delete($id)
  {
    $kegiatan = \App\Kegiatan::find($id);
    $kegiatan->delete();
    return redirect('/kegiatan')->with('sukses', 'Data Berhasil Di Hapus');
  }
}
