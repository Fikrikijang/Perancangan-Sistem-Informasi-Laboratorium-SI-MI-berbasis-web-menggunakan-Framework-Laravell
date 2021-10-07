<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Student;
use Auth;
use App\Kategoris;
use App\Playlists;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Response;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('student');
    }


    public function edit($id)
    {
        
        $student = Student::findorfail($id);
        return view('mahasiswa.profil.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'email' => 'required|email',
            'bio' => 'required'         
         ]);

        $mahasiswa = Student::findorfail($id);
        
        $mahasiswa_data = [
                    'email' => $request->email,
                    'bio' =>  $request->bio
                    ];
        $mahasiswa->update($mahasiswa_data);

        return redirect()->back()->with('success','Data berhasil diubah'); 
    } 

    public function password($id)
    {
        
        $student = Student::findorfail($id);
        return view('mahasiswa.profil.password', compact('student'));
    }

    public function ubah(Request $request, $id)
    {
         $this->validate($request, [          
            'password' => 'required'            
         ]);

        $mahasiswa = Student::findorfail($id);

        

            if($request->input('password')) {
                $mahasiswa_data = [
                    'password' => bcrypt($request->password)
                    ];
            }
    
        $mahasiswa->update($mahasiswa_data);

        return redirect()->back()->with('success','Data berhasil diubah'); 
         
        
    }
    
	public function kelas(){
		
        $kelas = Kelas::latest()->paginate(9);
         
		return view('mahasiswa.kelas', compact('kelas'));
		
    }
    
    public function playlist($id)
    {
		$playlist = Playlists::all();
        $kelas = Kelas::findorfail($id);
        return view('mahasiswa.playlist',compact('playlist','kelas'));
    }
    
    public function play(Request $request,$id)
    {
        $playlist = Playlists::findorfail($id);
        $playlists = Playlists::where('praktikum_id','LIKE','%'.$playlist->praktikum_id.'%')->get();
        $kelas = Kelas::findorfail($id);
        
        return view('mahasiswa.play_video',compact('playlist','playlists','kelas'));
    }
    
    public function profil($id)
    {
        $student = Student::findorfail($id);
        return view('mahasiswa.profil.index', compact('student'));
		
    }
    
    public function download($file)
    {
        return response()->download('storage/'. $file);
    }
}
