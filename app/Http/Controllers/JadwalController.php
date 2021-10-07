<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Praktikum;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        //kodingan cari
        if($request->has('cari')){
            $jadwal = Jadwal::when($request->cari, function ($query) use ($request)  {
                $query->where('kelas_pr', 'LIKE', "%{$request->cari}%")
                      ->orWhere('hari_pr', 'LIKE', "%{$request->cari}%")
                      ->orWhere('jam_pr', 'LIKE', "%{$request->cari}%")
                      ->orWhere('praktikum_id', 'LIKE', "%{$request->cari}%");
                    })->get();
            $jadwalnc = $jadwal->where('ruang_pr','LIKE','LAB NComputing');
            $jadwalpc = $jadwal->where('ruang_pr','LIKE','LAB PC');
        }else{
            //Ambil MOdel
            // $jadwalp = Jadwal::latest()->paginate(5);
            $jadwalnc = Jadwal::where('ruang_pr','LIKE','LAB NComputing')->paginate(5);
            $jadwalpc = Jadwal::where('ruang_pr','LIKE','LAB PC')->paginate(5);

        }
        //$jadwal dilempar ke view
        //Menghubungkan ke view / Tampilan
        return view('admin.jadwal.index',compact('jadwalnc','jadwalpc'));
       
    }

    public function create()
    {
        $jadwal = Jadwal::latest()->paginate(5);
        $praktikum = Praktikum::all();
        return view('admin.jadwal.create', compact('jadwal','praktikum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ruang_pr' => 'required',
            'hari_pr' => 'required',
            'kelas_pr' => 'required',
            'jam_pr' => 'required',
            'praktikum_id' => 'required'
        ]);

        $jadwal = jadwal::create([
            'ruang_pr' => $request->ruang_pr,
            'hari_pr' => $request->hari_pr,
            'kelas_pr' =>  $request->kelas_pr,
            'jam_pr' =>  $request->jam_pr,
            'praktikum_id' =>  $request->praktikum_id
        ]);
       
        return redirect()->back()->with('success','Jadwal berhasil disimpan'); 
    }

    
    public function destroy($id)
    {
        $jadwal = Jadwal::findorfail($id);
        $jadwal->delete();
        

        return redirect()->route('jadwal.index')->with('sukses','Data Berhasil Dihapus');
    }

}
