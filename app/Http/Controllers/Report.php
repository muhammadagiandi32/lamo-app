<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Report extends Controller
{
    //
    public function index()
    {

        $siswas = DB::table('siswas')->select('*', 'siswas.id as id_siswa')
            ->leftjoin('users', 'siswas.user_id', 'users.id')
            ->paginate(15);
        // ->get();

        // return $siswas;

        return view('report.spp', compact('siswas'));
    }

    public function getDataReport(Request $request)
    {
        return response()->json(['snaptoken' => $request]);
    }
}
