<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        $date1 = Str::substr($request->date, 0, 10);
        $date2 = Str::substr($request->date, 13);
        $type = $request->type;

        $data =  DB::table('tagihans')->where('status', '=', $type)->whereBetween('bulan_bayar', [$date1, $date2])->get();
        // DB::enableQueryLog();
        // return dd($data);
        return response()->json(['data' => $data]);
    }
}
