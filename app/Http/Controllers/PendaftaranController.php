<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home.pendaftaran.index');
        
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3|max:25',
            'npm' => 'required|max:8',
            'email' => 'required|email',
            'jk' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,bmp,png',
            'ipk' => 'required',
            'krs' => 'required|mimes:pdf',
            'dns' => 'required|mimes:pdf',
            'telp' => 'required',
            'alamat' => 'required'
        ]);

        $foto = $request->foto;
        $new_foto = time().$foto->getClientOriginalName();
        
        $krs = $request->krs;
        $new_krs = time().$krs->getClientOriginalName();
        
        $dns = $request->dns;
        $new_dns = time().$dns->getClientOriginalName();

        $daftar = Pendaftaran::create([
            'nama' =>  $request->nama,
            'npm' => $request->npm,
            'email' => $request->email,
            'jk' =>  $request->jk,
            'ipk' => $request->ipk,
            'telp' => $request->telp,
            'foto' => 'uploads/pendaftaran/'.$new_foto,
            'krs' => 'uploads/pendaftaran/'.$new_krs,
            'dns' => 'uploads/pendaftaran/'.$new_dns,
            'alamat' =>  $request->alamat
        ]);

        $foto->move('uploads/pendaftaran/', $new_foto);
        $krs->move('uploads/pendaftaran/', $new_krs);
        $dns->move('uploads/pendaftaran/', $new_dns);
        return redirect()->back()->with('success','Data telah berhasil ditambahkan, Anda akan segera di hubungi :)'); 

    }


}
