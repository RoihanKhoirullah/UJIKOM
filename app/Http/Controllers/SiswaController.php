<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $number = Siswa::count();
        if($number > 0)
        {
            $number = Siswa::max('no_daftar');
            $strnum = substr($number, 2, 3);
            $strnum = ((int)$strnum + 1 );
            if (strlen((int)$strnum) == 3) {
                $no_daftar = $strnum;
            } else if (strlen((int)$strnum) == 3) {
                $no_daftar = "0" . $strnum;
            } else if (strlen((int)$strnum) == 2) {
                $no_daftar = "00" . $strnum;
            } else if (strlen((int)$strnum) == 1) {
                $no_daftar = "000" . $strnum;
            }
        } else {
            $no_daftar = "0001";
        }

        return view('admin.siswa.create', compact('no_daftar'));
    }

    public function PrintSiswa($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.print-siswa',  compact('siswa'));
    }

    public function PrintSemuaSiswa()
    {
        $printsemuasiswa = Siswa::get();
        return view('admin.siswa.print-semua-siswa', compact('printsemuasiswa'));
    }

    public function LihatSemuaDataSiswa()
    {
        $siswa = Siswa::all();
        return view('admin.siswa.lihat-semua-data-siswa' ,  compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::create([
            'no_daftar' => $request -> no_daftar,
            'nama' => $request -> nama,
            'jk' => $request -> jk,
            'alamat' => $request -> alamat, 
            'agama' => $request -> agama, 
            'asal_smp' => $request -> asal_smp, 
            'jurusan' => $request -> jurusan,         
            
         ]);
        // return redirect('siswa');
        return redirect()->route('print-siswa', $siswa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findorfail($id);
        $siswa->update($request->all());

        return redirect('/siswa')->with('toast_success','Data Berhasil Diubah');
        // return redirect()->route('print-siswa', $siswa->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Siswa::findorfail($id);
        $delete->delete();
        return redirect('/siswa')->with('toast_success','Data Berhasil Dihapus');
    }
}
