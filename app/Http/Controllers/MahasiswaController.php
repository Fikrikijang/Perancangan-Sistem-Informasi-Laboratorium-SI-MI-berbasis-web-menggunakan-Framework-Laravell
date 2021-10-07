<?php

namespace App\Http\Controllers;


use App\Student;
use App\matkul;
use App\nilai;
use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->get('cari');
        $mahasiswa = Student::where('npm', 'LIKE', '%' . $query . '%')
                    ->orWhere('name', 'LIKE', '%' . $query . '%')
                    ->orWhere('kelas', 'LIKE', '%' . $query . '%')
                    ->paginate(3);

        return view('admin.mahasiswa.index', compact('mahasiswa'));
        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
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
            'name' => 'required|max:25',
            'tgl_lahir' => 'required|max:8',
            'email' => 'required|email',
            'kelas' => 'required',
            'status' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);

        if($request->input('password')) {
            $password = bcrypt($request->password);
        }
        else
        {
            $password = bcrypt('12345');
        }

        $foto = $request->foto;
        $new_foto = time().$foto->getClientOriginalName();

        $mahasiswa = Student::create([
            'name' =>  $request->name,
            'npm' => $request->npm,
            'tgl_lahir' =>  $request->tgl_lahir,
            'email' => $request->email,
            'kelas' =>  $request->kelas,
            'bio' =>  $request->bio,
            'status' =>  $request->status,
            'foto' => 'uploads/mahasiswa/'.$new_foto,
            'password' => $password
        ]);

        $foto->move('uploads/mahasiswa/', $new_foto);
        return redirect()->route('mahasiswa.create')->with('success','Data telah berhasil ditambahkan');
        
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
        // $mahasiswa = Student::find($id);
        $mahasiswa = Student::findorfail($id);
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
        // return view('admin.mahasiswa.edit');
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
            'name' => 'required|max:25',
            'tgl_lahir' => 'required|max:8',
            'email' => 'required|email',
            'kelas' => 'required',            
            'status' => 'required'            
         ]);

        $mahasiswa = Student::findorfail($id);

        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time().$foto->getClientOriginalName();
            $foto->move('uploads/mahasiswa/', $new_foto);

            if($request->input('password')) {
                $mahasiswa_data = [
                    'npm' => $request->npm,
                    'name' =>  $request->name,
                    'tgl_lahir' =>  $request->tgl_lahir,
                    'email' => $request->email,
                    'kelas' =>  $request->kelas,
                    'bio' =>  $request->bio,
                    'status' =>  $request->status,
                    'foto' => 'uploads/mahasiswa/'.$new_foto,
                    'password' => bcrypt($request->password)
                    ];
            }
            else{
                $mahasiswa_data = [
                    'npm' => $request->npm,
                    'name' =>  $request->name,
                    'tgl_lahir' =>  $request->tgl_lahir,
                    'email' => $request->email,
                    'kelas' =>  $request->kelas,
                    'status' =>  $request->status
                    ];
            }
        }
       
    
        $mahasiswa->update($mahasiswa_data);

        return redirect()->route('mahasiswa.index')->with('success','Data berhasil diubah'); 
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Student::findorfail($id);
        $mahasiswa->delete();

        return redirect()->back()->with('success','Berhasil Cuy dihapus');
    }

    public function profile($id)
    {
        $mahasiswa = Student::findorfail($id);
        $matkul = Matkul::all();
        return view ('admin.mahasiswa.profile',compact('mahasiswa','matkul'));
    }

    public function tambah($id)
    {
        $mahasiswa = Student::findorfail($id);   
        $matkul = Matkul::all();
        return view ('admin.mahasiswa.tambah',compact('mahasiswa','matkul'));
    }

    public function addnilai(Request $request, $idmahasiswa)
    {
        $mahasiswa = Student::find($idmahasiswa);
        // if ($mahasiswa->matkul()->where('name',$request->matkul)->exists() && ($mahasiswa->matkul()->where('pertemuan',$request->matkul)->exists())){
        //     return redirect('mahasiswa/'.$idmahasiswa.'/profile')->with('error','Data praktikum sudah ada');
        // }
        $mahasiswa->matkul()->attach($request->matkul,['nilai' => $request->nilai,'pertemuan' => $request->pertemuan]);
        return redirect('mahasiswa/'.$idmahasiswa.'/profile')->with('success','Data telah berhasil ditambahkan');
    }

    public function nilai($kelas){

        $mahasiswa = Student::findorfail($kelas);   
        $matkul = Matkul::all();
        return view ('admin.mahasiswa.nilai',compact('mahasiswa','matkul'));
    }
    
}

