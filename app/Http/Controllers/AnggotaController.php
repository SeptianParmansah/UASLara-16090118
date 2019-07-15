<?php

namespace App\Http\Controllers;
use App\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
      $data_anggota = \App\Anggota::all();
      return view('admin.anggota', ['data_anggota' => $data_anggota]);
    }

    public function create(Request $request)
    {
      $this->validate($request, [
        'nama' => 'required|min:5',
        'email' => 'required|email|unique:users',
        'asal_sekolah' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
        'tanggal_lahir' => 'required',
        'tempat_lahir' => 'required',
        'alamat'  => 'required',
        'foto' => 'mimes:jpg,png,jpeg,pneg',
      ]);


      // return view('admin.add_anggota');
      //Insert ke table User
      $user = new \App\User;
      $user->level = 'anggota';
      $user->name = $request->nama;
      $user->email = $request->email;
      $user->password = bcrypt('12345');
      $user->remember_token = str_random(60);
      $user->save();

      // //Insert ke table Penghargaan
      // $penghargaan = new \App\Penghargan;
      // $penghargaan->id = request

      //insert ke table Anggota
      $request->request->add(['user_id' => $user->id]);
      $anggota = \App\Anggota::create($request->all());
      if($request->hasFile('foto')){
        $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
        $anggota->foto = $request->file('foto')->getClientOriginalName();
        $anggota->save();
      }
      return redirect('/anggota')->with('sukses', 'Data Anggota Berhasil di Tambah');
    }

    public function edit($id)
    {
      $anggota = \App\Anggota::find($id);
      return view('admin.edit', ['anggota' => $anggota]);
    }

    public function update(Request $request, $id)
    {
      $anggota = \App\Anggota::find($id);
      $anggota->update($request->all());
      if($request->hasFile('foto')){
        $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
        $anggota->foto = $request->file('foto')->getClientOriginalName();
        $anggota->save();
      }
      return redirect('/anggota')->with('sukses', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
      $anggota = \App\Anggota::find($id);
      $anggota->delete();
      return redirect('/anggota')->with('sukses', 'Data Berhasil Di Hapus');
    }

    public function profile($id)
    {
      $anggota = \App\Anggota::find($id);
      return view('admin.profile', ['anggota' => $anggota]);
    }
}
