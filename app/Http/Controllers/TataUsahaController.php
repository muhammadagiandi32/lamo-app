<?php

namespace App\Http\Controllers;

use App\Models\TataUsaha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TataUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tu = TataUsaha::select('tata_usahas.*', 'tata_usahas.id as id_tu', 'users.*')
        ->join('users', 'tata_usahas.user_id', 'users.id')
        ->where('role_id', '=', 2)
        ->get();

        // return $tu;

        return view('admin.tata-usaha.index', compact('tu'));
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
        $user->nik = $request->nik;
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
    public function show($id)
    {
        // return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TataUsaha  $tataUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id . '&nbsp; bacot';
        // $tu = User::select('*')
        //     ->leftjoin('tata_usahas', 'tata_usahas.user_id',  'users.id')
        //     ->where('tata_usahas.user_id', '=', auth()->id())
        //     ->first();

        // return view('admin.tata-usaha.update', compact('tu'));

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
    public function destroy($id)
    {
        $data = DB::table('users')
        ->leftjoin('tata_usahas', 'tata_usahas.user_id',  'users.id')
        ->where('users.id', $id);
        DB::table('tata_usahas')->where('user_id', $id)->delete();
        $data->delete();

        return redirect()->route('tata_usaha.index')->with('delete', 'Tata Usaha has been deleted');

    }
}
