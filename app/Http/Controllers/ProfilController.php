<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    // public function index()
    // {
    //     return view('admin.profil.index');
    // }
    
    public function show($id)
    {
        $user = User::findorfail($id);
        return view('admin.profil.index', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
          ]);
        
        $user = User::findorfail($id);
    
        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time().$foto->getClientOriginalName();
            $foto->move('uploads/users/', $new_foto);

            $user_data = [
                'name' => $request->name,
                'foto' => 'uploads/users/'.$new_foto,
                'password' => bcrypt($request->password)
            ];
            }
            else{
                $user_data = [
                    'name' => $request->name
                    ];
            }

         $user->update($user_data);

         return redirect()->back()->with('success','berhasil diupdate');
    }

    

         
    
}
