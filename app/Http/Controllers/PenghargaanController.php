<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
  public function index()
  {
    $data_penghargaan = \App\Penghargaan::all();
    return view('admin.penghargaan', ['data_penghargaan' => $data_penghargaan]);
  }

  public function create(Request $request)
  {
    \App\Penghargaan::create($request->all());
    return redirect('/penghargaan')->with('sukses', 'Data Penghargaan Berhasil di Tambah');
  }

  public function edit($id)
  {
    $penghargaan = \App\Penghargaan::find($id);
    return view('admin.edit_penghargaan', ['penghargaan' => $penghargaan]);
  }

  public function update(Request $request, $id)
  {
    $penghargaan = \App\Penghargaan::find($id);
    $penghargaan->update($request->all());
    return redirect('/penghargaan')->with('sukses', 'Data Berhasil di Update');
  }

  public function delete($id)
  {
    $penghargaan = \App\Penghargaan::find($id);
    $penghargaan->delete();
    return redirect('/penghargaan')->with('sukses', 'Data Berhasil Di Hapus');
  }

  public function profile($id)
  {
    $penghargaan = \App\Penghargaan::find($id);
    return view('admin.profile_penghargaan', ['penghargaan' => $penghargaan]);
  }
}
