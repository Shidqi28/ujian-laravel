<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $kelas = DB::table('kelas')->get();
        return view('kelas.index',compact('kelas'));
    }

    public function edit($id)
    {
        $kelas = DB::table('kelas')->where('id',$id)->first();
        return view('kelas.edit',compact('kelas'));
    }

    public function update($id,Request $request)
    {
        $kode_kelas = $request->kode_kelas;
        $nama_kelas = $request->nama_kelas;
        $tingkat = $request->tingkat;
        $tahun_ajaran = $request->tahun_ajaran;
        $wali_kelas = $request->wali_kelas;

        try{
            DB::table('kelas')->where('id',$id)->update(
                [
                    'kode_kelas' => $kode_kelas,
                    'nama_kelas' => $nama_kelas,
                    'tingkat' => $tingkat,
                    'tahun_ajaran' => $tahun_ajaran,
                    'wali_kelas' => $wali_kelas
                ]
            );
            return redirect()->route('kelas.index')->with('succes','Data Berhasil Diedit');
        } catch (Exception $e) {
            return redirect()->route('kelas.index')->with('error','Data Gagal Diedit');
        }
    }

    public function destroy($id)
    {
        try {
            DB::table('kelas')->where('id',$id)->delete();
            return redirect()->route('kelas.index')->with('succes','Data Berhasil Dihapus');
        } catch (Exception $e) {
            return redirect()->route('kelas.index')->with('error','Data Gagal Dihapus');
        }
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $kode_kelas = $request->input('kode_kelas');
        $nama_kelas = $request->input('nama_kelas');
        $tingkat = $request->input('tingkat');
        $tahun_ajaran = $request->input('tahun_ajaran');
        $wali_kelas = $request->input('wali_kelas');

        try{
        DB::table('kelas')->insert(
        [
        'kode_kelas' => $kode_kelas,
        'nama_kelas' => $nama_kelas,
        'tingkat' => $tingkat,
        'tahun_ajaran' => $tahun_ajaran,
        'wali_kelas' => $wali_kelas
        ]
        );
        return redirect()->route('kelas.index')->with('succes', 'Kategori Berhasil Disimpan');
        }   catch (Exception $e) {
            return redirect()->route('kelas.index')->with('error', 'Kategori Gagal Disimpan');
        }
    }
}