<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        // $kelas = DB::table('kelas')->get();
        // $siswa = DB::table('siswa')
        // ->join('kelas','siswa.kelas_id','=','kelas.id')
        // ->select('siswa.*','kelas.nama_kelas');

        // return view('siswa.index',compact('siswa'));
        $nama_lengkap = $request->nama_lengkap;
        $kelas_id = $request->kelas_id;

        $query = DB::table('siswa')
            ->join('kelas', 'siswa.kelas_id', '=', 'kelas.id');
            // ->select('produk.*', 'kategori.nama_kategori');

        $siswa = $query->get();

        $kelas = DB::table('kelas')->get();

        return view('siswa.index', compact('siswa', 'kelas'));
    }

    public function edit($id)
    {
        $kelas = DB::table('siswa')->where('id',$id)->first();
        return view('siswa.edit',compact('siswa'));
    }

    public function update($id,Request $request)
    {
        $kelas_id = $request->kelas_id;
        $nis = $request->nis;
        $nama_lengkap = $request->nama_lengkap;
        $jenis_kelamin = $request->jenis_kelamin;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $alamat = $request->alamat;
        $no_hp = $request->no_hp;
        $email = $request->email;
        $asal_sekolah = $request->asal_sekolah;
        $jurusan = $request->jurusan;
        $nama_ayah = $request->nama_ayah;
        $nama_ibu = $request->nama_ibu;
        $no_hp_wali = $request->no_hp_wali;
        $status = $request->status;

        try{
            DB::table('kelas')->where('id',$id)->update(
                [
                    'kelas_id' => $kelas_id,
                    'nis' => $nis,
                    'nama_lengkap' => $nama_lengkap,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'np_hp' => $no_hp,
                    'email' => $email,
                    'asal_sekolah' => $asal_sekolah,
                    'jurusan' => $jurusan,
                    'nama_ayah' => $nama_ayah,
                    'nama_ibu' => $nama_ibu,
                    'no_hp_wali' => $no_hp_wali,
                    'status' => $status,
                ]
            );
            return redirect()->route('siswa.index')->with('succes','Data Berhasil Diedit');
        } catch (Exception $e) {
            return redirect()->route('siswa.index')->with('error','Data Gagal Diedit');
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('siswa')->where('id',$id)->delete();
            return redirect()->route('siswa.index')->with('succes','Data Berhasil Dihapus');
        } catch (Exception $e) {
            return redirect()->route('siswa.index')->with('error','Data Gagal Dihapus');
        }
    }

    public function create()
    {
        $kelas = DB::table('kelas')->get();
        return view('siswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $kelas_id = $request->input('kelas_id');
        $nis = $request->input('nis');
        $nama_lengkap = $request->input('nama_lengkap');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $no_hp = $request->input('no_hp');
        $email = $request->input('email');
        $asal_sekolah = $request->input('asal_sekolah');
        $jurusan = $request->input('jurusan');
        $nama_ayah = $request->input('nama_ayah');
        $nama_ibu = $request->input('nama_ibu');
        $no_hp_wali = $request->input('no_hp_wali');
        $status = $request->input('status');

        try{
            DB::table('siswa')->insert(
                [
                    'kelas_id' => $kelas_id,
                    'nis' => $nis,
                    'nama_lengkap' => $nama_lengkap,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'np_hp' => $no_hp,
                    'email' => $email,
                    'asal_sekolah' => $asal_sekolah,
                    'jurusan' => $jurusan,
                    'nama_ayah' => $nama_ayah,
                    'nama_ibu' => $nama_ibu,
                    'no_hp_wali' => $no_hp_wali,
                    'status' => $status,
                ]
            );
            return redirect()->route('siswa.index')->with('succes','Data Berhasil Ditambah');
        } catch (Exception $e) {
            return redirect()->route('siswa.index')->with('error','Data Gagal Ditambah');
        }
    }
}
