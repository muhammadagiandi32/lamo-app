<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\TagihanBuku;
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
        $siswas = Siswa::select('siswas.*', 'siswas.id as id_siswa', 'users.*')
            ->join('users', 'siswas.user_id', 'users.id')
            ->where('role_id', '=', 3)
            ->get();

        // return $siswas;

        return view('admin.siswa.index', compact('siswas'));
    }


    public function tagihanBuku(Request $request)
    {
        // $validator = Validator::make($request->all(), ['name' => 'required']);
        $arr = [];
        foreach ($request->id_siswa as $data) {
            $arr[] = [
                'id_siswa' => $data,
                'nama_tagihan' => $request->nama_tagihan,
                'total' => $request->total,
                'order_id' => 0,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        $return = TagihanBuku::insert($arr);
        if ($return) {
            return response()->json($arr);
        } else {
            return response()->json('gagal');
        }
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
        $user->password = bcrypt('123123123');
        $user->save();

        //input dgn ini tidak perlu dgn fillable
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
        request()->validate([
            'name' => 'required',
            'alamat' => 'required',
        ]);

        // $siswa->update($request->all());

        // return $siswa;

        $user = User::find($siswa->id);
        $user->name = $request->name;
        $user->nis = $request->nis;
        $user->role_id = 3;
        $user->email = $request->email;


        $siswa = Siswa::find($siswa->user_id);
        
        $siswa->hp = $request->hp;
        $siswa->user_id = $request->id;
        $siswa->nama_orangtua = $request->ortu;
        $siswa->alamat = $request->alamat;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        $user->save();

        return  redirect('dashboard.siswa')->with('success', 'Siswa updated');
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
