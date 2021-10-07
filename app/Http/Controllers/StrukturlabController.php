<?php

namespace App\Http\Controllers;

use App\Strukturlab;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StrukturlabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturlab = Strukturlab::latest()->paginate(5);

        return view('admin.strukturlab.index', compact('strukturlab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.strukturlab.create');
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
            'nama' => 'required|max:40',
            'jabatan' => 'required',
            'email' => 'required|email',
            'gambar' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $strukturlab = Strukturlab::create([
            'nama' =>  $request->nama,
            'jabatan' =>  $request->jabatan,
            'email' => $request->email,
            'gambar' => 'uploads/strukturlab/'.$new_gambar
        ]);

        $gambar->move('uploads/strukturlab/', $new_gambar);
        return redirect()->route('strukturlab.index')->with('success','Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Strukturlab  $strukturlab
     * @return \Illuminate\Http\Response
     */
    public function show(Strukturlab $strukturlab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Strukturlab  $strukturlab
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $strukturlab = Strukturlab::findorfail($id);
        return view('admin.strukturlab.edit', compact('strukturlab'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Strukturlab  $strukturlab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'nama' => 'required|max:40',
            'email' => 'required|email',
            'jabatan' => 'required'           
         ]);

        $strukturlab = Strukturlab::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/strukturlab/', $new_gambar);

        $strukturlab_data = [
            'nama' =>  $request->nama,
            'email' => $request->email,
            'jabatan' =>  $request->jabatan,
            'gambar' => 'uploads/strukturlab/'.$new_gambar
        ];
        }
        else{
        $strukturlab_data = [
            'nama' =>  $request->nama,
            'email' => $request->email,
            'jabatan' =>  $request->jabatan
        ];
        }
    
        $strukturlab->update($strukturlab_data);

        return redirect()->route('strukturlab.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Strukturlab  $strukturlab
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $strukturlab = Strukturlab::findorfail($id);
        $strukturlab->delete();

        return redirect()->back()->with('success','Data telah berhasil dihapus');
    }

}
