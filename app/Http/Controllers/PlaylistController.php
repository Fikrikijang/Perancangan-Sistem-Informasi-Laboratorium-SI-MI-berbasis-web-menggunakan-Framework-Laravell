<?php

namespace App\Http\Controllers;

use App\Playlists;
use App\Kategoris;
use App\Kelas;
use App\Praktikum;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlist = Playlists::latest()->paginate(5);
        return view('admin.playlist.index', compact('playlist'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategoris::all();
        $kelas = Kelas::all();
        $praktikum = Praktikum::all();
        return view('admin.playlist.create', compact('praktikum','kelas','kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Playlists;
        if ($request->file('file')) {
            $file=$request->file('file');
            $filename=time(). '.' .$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);

            $data->file = $filename;
        }
        $data->pertemuan = $request->pertemuan;
        $data->judul = $request->judul;
        $data->praktikum_id = $request->praktikum_id;
        $data->kelas_id = $request->kelas_id;
        $data->content = $request->content;
        $data->video = $request->video;
        $data->slug = Str::slug($request->judul);
        $data->users_id = Auth::id();
        $data->save();
        $data->kategoris()->attach($request->kategoris);
        return redirect()->back()->with('success','Data berhasil disimpan'); 

        // $this->validate($request, [
        //     'pertemuan' => 'required',
        //     'judul' => 'required',
        //     'praktikum_id' => 'required',
        //     'kelas_id' => 'required',
        //     'content' => 'required',
        //     'file' => 'required',
        //     'video' => 'required'
        // ]);

        // $file = $request->file;
        // $new_file = time().$file->getClientOriginalName();

        // $playlist = Playlists::create([
        //     'pertemuan' => $request->pertemuan,
        //     'judul' => $request->judul,
        //     'praktikum_id' =>  $request->praktikum_id,
        //     'kelas_id' =>  $request->kelas_id,
        //     'content' =>  $request->content,
        //     'file' => 'storage/'.$new_file,
        //     'video' =>  $request->video,
        //     'slug' => Str::slug($request->judul),
        //     'users_id' => Auth::id()
        // ]);

        // $playlist->kategoris()->attach($request->kategoris);

        // $file->move('storage/', $new_file);
        // return redirect()->back()->with('success','Data berhasil disimpan'); 
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
        $kelas = Kelas::all();
        $praktikum = Praktikum::all();
        $playlist = Playlists::findorfail($id);
        return view('admin.playlist.edit', compact('playlist','kelas','praktikum','kategoris'));
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
            'pertemuan' => 'required',
            'judul' => 'required',
            'praktikum_id' => 'required',
            'kelas_id' => 'required',
            'content' => 'required',
            'video' => 'required'            
         ]);

        

        $playlist = Playlists::findorfail($id);

        if ($request->has('file')) {
            $file = $request->file;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/', $new_file);

        $playlist_data = [
            'pertemuan' => $request->pertemuan,
            'judul' => $request->judul,
            'praktikum_id' =>  $request->praktikum_id,
            'kelas_id' =>  $request->kelas_id,
            'content' =>  $request->content,
            'file' => 'storage/'.$new_file,
            'video' =>  $request->video,
            'slug' => Str::slug($request->judul)
        ];
        }
        else{
        $playlist_data = [
            'pertemuan' => $request->pertemuan,
            'judul' => $request->judul,
            'praktikum_id' =>  $request->praktikum_id,
            'kelas_id' =>  $request->kelas_id,
            'content' =>  $request->content,
            'video' =>  $request->video,
            'slug' => Str::slug($request->judul)
        ];
        }
    

        $playlist->kategoris()->sync($request->kategoris);
        $playlist->update($playlist_data);

        
        return redirect()->route('playlist.index')->with('success','playlistingan anda berhasil diupdate'); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $playlist = Playlists::findorfail($id);
        $playlist->delete();

        return redirect()->back()->with('success','playlist Berhasil Dihapus (Silahkan cek trashed playlist)');
    }

    public function tampil_hapus(){
        $playlist = Playlist::onlyTrashed()->paginate(10);
        return view('admin.playlist.hapus', compact('playlist'));
    }

    public function restore($id){
        $playlist = Playlist::withTrashed()->where('id', $id)->first();
        $playlist->restore();

        return redirect()->back()->with('success','playlist Berhasil DiRestore (Silahkan cek list playlist)');
    }

    public function kill($id){
        $playlist = Playlist::withTrashed()->where('id', $id)->first();
        $playlist->forceDelete();

        return redirect()->back()->with('success','playlist Berhasil Dihapus Secara Permanen');
    }
}
