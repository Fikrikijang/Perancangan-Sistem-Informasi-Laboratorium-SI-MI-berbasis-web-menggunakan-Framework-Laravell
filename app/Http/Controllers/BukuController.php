<?php

namespace App\Http\Controllers;

use App\Buku;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::paginate(5);
        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Buku;
        if ($request->file('file')) {
            $file=$request->file('file');
            $filename=time(). '.' .$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);

            $data->file = $filename;
        }
        $data->nama_buku = $request->nama_buku;
        $data->save();
        return redirect()->route('buku.index')->with('success','Data telah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findorfail($id);
        return view('admin.buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_buku' => 'required|max:80'          
         ]);

        $buku = Buku::findorfail($id);

        if ($request->has('file')) {
            $file = $request->file;
            $new_file = time().$file->getClientOriginalName();
            $file->move('uploads/buku/', $new_file);

        $buku_data = [
            'nama_buku' =>  $request->nama_buku,
            'file' => 'uploads/buku/'.$new_file
        ];
        }
        else{
        $buku_data = [
            'nama_buku' =>  $request->nama_buku
        ];
        }
    
        $buku->update($buku_data);

        return redirect()->route('buku.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findorfail($id);
        $buku->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
