<?php

namespace App\Http\Controllers;

use App\Praktikum;
use App\Buku;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PraktikumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $praktikum = Praktikum::paginate(5);
        $buku = Buku::paginate(5);
        return view('admin.praktikum.index', compact('praktikum','buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.praktikum.create');
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
            'name' => 'required|min:3'
        ]);


        $praktikum = Praktikum::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->back()->with('success','Ketegori berhasil disimpan');
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
        $praktikum = Praktikum::findorfail($id);
        return view('admin.praktikum.edit', compact('praktikum'));

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
            'name' => 'required'
        ]);

        $praktikum_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Praktikum::whereId($id)->update($praktikum_data);

        return redirect()->route('praktikum.index')->with('success','Data Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $praktikum = Praktikum::findorfail($id);
        $praktikum->delete();
        

        return redirect()->route('praktikum.index')->with('sukses','Data Berhasil Dihapus');
    }
}
