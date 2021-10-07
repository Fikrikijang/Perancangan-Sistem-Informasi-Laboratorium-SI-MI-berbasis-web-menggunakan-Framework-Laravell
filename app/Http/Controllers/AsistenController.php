<?php

namespace App\Http\Controllers;


use App\Asisten;
use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->get('cari');
        $asisten = Asisten::where('npm', 'LIKE', '%' . $query . '%')
                ->orWhere('nama', 'LIKE', '%' . $query . '%')->paginate(4);

        return view('admin.asisten.index', compact('asisten'));

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asisten.create');
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
            'npm' => 'required|min:3|max:8',
            'nama' => 'required|max:25',
            'tgl_lahir' => 'required|max:25',
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'akun' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,bmp,png',
            'alamat' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $asisten = Asisten::create([
            'npm' => $request->npm,
            'nama' =>  $request->nama,
            'tgl_lahir' =>  $request->tgl_lahir,
            'email' => $request->email,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'status' =>  $request->status,
            'akun' =>  $request->akun,
            'gambar' => 'uploads/asistens/'.$new_gambar,
            'alamat' =>  $request->alamat
        ]);

        $gambar->move('uploads/asistens/', $new_gambar);
        return redirect()->back()->with('success','Data telah berhasil ditambahkan');
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
        // $asisten = Asisten::find($id);
        $asisten = Asisten::findorfail($id);
        return view('admin.asisten.edit', compact('asisten'));
        // return view('admin.asisten.edit');
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
         $this->validate($request, [
            'npm' => 'required|min:3|max:8',
            'nama' => 'required|max:25',
            'tgl_lahir' => 'required|max:25',
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'akun' => 'required',
            'alamat' => 'required'            
         ]);

        $asisten = Asisten::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/asistens/', $new_gambar);

        $asisten_data = [
            'npm' => $request->npm,
            'nama' =>  $request->nama,
            'tgl_lahir' =>  $request->tgl_lahir,
            'email' => $request->email,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'status' =>  $request->status,
            'akun' =>  $request->akun,
            'gambar' => 'uploads/asistens/'.$new_gambar,
            'alamat' =>  $request->alamat
        ];
        }
        else{
        $asisten_data = [
            'npm' => $request->npm,
            'nama' =>  $request->nama,
            'tgl_lahir' =>  $request->tgl_lahir,
            'email' => $request->email,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'status' =>  $request->status,
            'akun' =>  $request->akun,
            'alamat' =>  $request->alamat
        ];
        }
    
        $asisten->update($asisten_data);

        return redirect()->route('asisten.index')->with('success','Data telah berhasil diupdate'); 
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asisten = Asisten::findorfail($id);
        $asisten->delete();

        return redirect()->back()->with('success','Data telah berhasil dihapus');
    }

}
