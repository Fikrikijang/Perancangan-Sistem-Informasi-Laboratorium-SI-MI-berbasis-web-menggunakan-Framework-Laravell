<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Kategoris;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::latest()->paginate(3);
        return view('admin.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategoris::all();
        return view('admin.kelas.create', compact('kategoris'));
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
            'judul' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $kelas = Kelas::create([
            'judul' => $request->judul,
            'content' =>  $request->content,
            'gambar' => 'uploads/kelas/'.$new_gambar,
            'slug' => Str::slug($request->judul),
            'users_id' => Auth::id()
        ]);

        $kelas->kategoris()->attach($request->kategoris);

        $gambar->move('uploads/kelas/', $new_gambar);
        return redirect()->back()->with('success','Kelas berhasil disimpan'); 
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
        $kategoris = Kategoris::all();
        $kelas = Kelas::findorfail($id);
        return view('admin.kelas.edit', compact('kelas','kategoris'));
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
            'judul' => 'required',
            'content' => 'required'            
         ]);

        

        $kelas = Kelas::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/kelas/', $new_gambar);

        $kelas_data = [
            'judul' => $request->judul,
            'content' =>  $request->content,
            'gambar' => 'uploads/kelas/'.$new_gambar,
            'slug' => Str::slug($request->judul)
        ];
        }
        else{
        $kelas_data = [
            'judul' => $request->judul,
            'content' =>  $request->content,            
            'slug' => Str::slug($request->judul)
        ];
        }
    

        $kelas->kategoris()->sync($request->kategoris);
        $kelas->update($kelas_data);

        
        return redirect()->route('kelas.index')->with('success','Kelas berhasil diupdate'); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findorfail($id);
        $kelas->delete();

        return redirect()->back()->with('success','Kelas Berhasil Dihapus (Silahkan cek trashed kelas)');
    }

    public function tampil_hapus(){
        $kelas = Kelas::onlyTrashed()->paginate(10);
        return view('admin.kelas.hapus', compact('kelas'));
    }

    public function restore($id){
        $kelas = Kelas::withTrashed()->where('id', $id)->first();
        $kelas->restore();

        return redirect()->back()->with('success','Kelas Berhasil DiRestore (Silahkan cek list kelas)');
    }

    public function kill($id){
        $kelas = Kelas::withTrashed()->where('id', $id)->first();
        $kelas->forceDelete();

        return redirect()->back()->with('success','Kelas Berhasil Dihapus Secara Permanen');
    }
}
