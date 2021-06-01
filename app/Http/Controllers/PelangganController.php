<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('pelanggan/admin/daftar_pelanggan',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan/admin/tambah_pelanggan');
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

            'name' => 'min:5',
            'email' => 'required|email|unique:users',
            'role' => 'required',
        ]);

        $users = new \App\Models\User;
        $users->role = $request->role;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = hash::make($request->password);
        $users->save();
        
        return redirect()->back()->with('toast_success', 'Data berhasil Ditambah!');
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
        $pelanggan = User::findOrFail($id);
        return view('pelanggan/admin_editpelanggan', compact('pelanggan', 'pelanggan'));
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
        $users = User::where('id', $id)->first();
        $users->fill($request->all());
        $users->update();
        return redirect()->to('daftar_pelanggan')->with(['success' => 'Produk Berhasil Disimpan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
