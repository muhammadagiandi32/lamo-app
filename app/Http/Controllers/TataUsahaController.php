<?php

namespace App\Http\Controllers;

use App\Models\TataUsaha;
use App\Models\User;
use Illuminate\Http\Request;

class TataUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tata-usaha.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tata-usaha.create');
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
        $user->nis = $request->nik;
        $user->role_id = 2;
        $user->email = $request->email;
        $user->password = bcrypt('123123123');
        $user->save();

        //input dgn ini tidak perlu dgn fillable
        $siswa = new TataUsaha;
        $siswa->hp = $request->hp;
        $siswa->user_id = $user->id;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('tata_usaha')->with('success', 'success create new TU');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TataUsaha  $tataUsaha
     * @return \Illuminate\Http\Response
     */
    public function show(TataUsaha $tataUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TataUsaha  $tataUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit(TataUsaha $tataUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TataUsaha  $tataUsaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TataUsaha $tataUsaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TataUsaha  $tataUsaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(TataUsaha $tataUsaha)
    {
        //
    }
}
