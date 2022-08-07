<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::select('siswas.*', 'users.*')
        ->join('users', 'siswas.user_id', 'users.id')
        ->where('role_id', '=', 3)
        ->get();

        // return $siswas;

       return view('admin.siswa.index',compact('siswas'));
    }

    public function dashboard()
    {
        $siswa = User::select('siswas.*', 'users.*')
        ->join('siswas', 'siswas.user_id', 'users.id')
        ->where('users.id', '=', auth()->id())
            ->first();

        // return $siswa;

        return view('admin.siswa.dashboard', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $user = new User;
        $user->name = $request->name;
        $user->nis = $request->nis;
        $user->role_id = 3;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $siswa = new Siswa;
        $siswa->hp = $request->hp;
        $siswa->user_id = $user->id;
        $siswa->nama_orangtua = $request->ortu;
        $siswa->alamat = $request->alamat;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        return redirect('siswas')->with('success', 'success create new siswa');
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
    public function edit(Siswa $siswa)
    {

        return view('admin.siswa.update', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Siswa $siswa)
    {
        //
        return $request;
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
