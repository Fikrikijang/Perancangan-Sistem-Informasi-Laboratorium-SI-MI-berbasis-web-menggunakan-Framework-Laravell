<?php

namespace App\Http\Controllers;

use Storage;
use App\Asisten;
use App\Posts;
use App\Buku;
use App\Category;
use App\Strukturlab;
use App\Pendaftaran;
use App\Tags;
use App\Jadwal;
use App\Praktikum;
use App\Kelas;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Response;


class PagesHomeController extends Controller
{
    public function index()
    {
        $category_widget = Category::all();
        $artikelsAwal = Posts::latest()->paginate(1);
        $artikels = Posts::latest()->skip(1)->take(2)->get();
        $kelas = Kelas::latest()->paginate(3);
         
         
        return view('home.index', compact('artikels','artikelsAwal','category_widget','kelas'));
        
    }

    public function jadwal()
    {
        $jadwalnc = Jadwal::where('ruang_pr','LIKE','LAB NComputing')->paginate(5);
        $jadwalpc = Jadwal::where('ruang_pr','LIKE','LAB PC')->paginate(5);

        //$jadwal dilempar ke view
        //Menghubungkan ke view / Tampilan
        return view('home.jadwal',compact('jadwalnc','jadwalpc'));
    }

    public function tahapan()
    {
        return view('home.tahapan');
    }

    public function prosedur()
    {
        return view('home.prosedur');
    }
    
    public function visimisi()
    {
        return view('home.visi-misi');
    }
    
    public function struktur()
    {

        $category_widget = Category::all();
        $artikelsAwal = Posts::latest()->paginate(1);
        $artikels = Posts::latest()->skip(1)->take(5)->get();
        $strukturlab = Strukturlab::latest()->paginate(1);
        $strukturlabs = Strukturlab::latest()->skip(1)->take(3)->get();
         
        return view('home.struktur', compact('artikels','artikelsAwal','category_widget','strukturlab','strukturlabs'));
    }
    
    public function asistens()
    {
        $asisten = Asisten::paginate(6);
        $kelas = Kelas::latest()->paginate(2);

        return view('home.asistens', compact('asisten','kelas'));
    }

    public function artikels()
    {
        $category_widget = Category::all();
        $artikelsAwal = Posts::latest()->paginate(1);
        $artikels = Posts::latest()->skip(1)->take(5)->get();
         
        return view('home.artikels', compact('artikels','artikelsAwal','category_widget'));
    }
    
    public function show($id)
    {
        $category = Category::all();
        $tags = Tags::all();
        $post = Posts::findorfail($id);
        $posts = Posts::latest()->paginate(5);
        return view('home.detail', compact('post','tags','category','posts'));
    }

    public function buku()
    {
        $bukus = Buku::paginate(10);
         
        return view('home.buku_praktikum', compact('bukus'));
    }

    public function download($file)
    {
        return response()->download('storage/'. $file);
    }

    public function aktivasi()
    {
        return view('home.aktivasi');
    }

    public function pendaftaran()
    {
        return view('home.pendaftaran');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3|max:25',
            'npm' => 'required|max:8',
            'email' => 'required|email',
            'jk' => 'required',
            'ipk' => 'required',
            'krs' => 'required',
            'dns' => 'required',
            'telp' => 'required',
            'alamat' => 'required'
        ]);

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
            'krs' => 'uploads/pendaftaran/'.$new_krs,
            'dns' => 'uploads/pendaftara/'.$new_dns,
            'alamat' =>  $request->alamat
        ]);

        $krs->move('uploads/pendaftaran/', $new_krs);
        $dns->move('uploads/pendaftaran/', $new_dns);
        return redirect()->back()->with('success','Data telah berhasil ditambahkan');
       
    }
    


}
