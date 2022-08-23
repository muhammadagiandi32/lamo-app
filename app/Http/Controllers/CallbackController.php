<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CallbackController extends Controller
{
    //
    public function status(Request $request)
    {

        if ($request->transaction_status == 'settlement') {
            // return $request->order_id . ' Sudah bayar';
            // $affected = DB::table('transaksis')
            //     ->where('order_id', $request->order_id)
            //     ->update(['status' => 2]);
            // $data_tagihan = DB::table('tagihans')
            //     ->where('order_id', $request->order_id)->get()->toArray();
            // // return $data_tagihan[5]->order_id;
            // if ($data_tagihan[0]->status == 1) {
            //     return 'No Order: ' . $data_tagihan[5]->order_id . ' Sudah di bayarkan';
            // } else {
            //     DB::table('tagihans')
            //         ->where('order_id', $request->order_id)
            //         ->update(['status' => 1]);
            //     return $request->order_id . ' Sudah bayar';
            // }

            $data_tagihan = DB::table('tagihans')
                ->where('order_id', $request->order_id)->get();
            if ($data_tagihan->isEmpty()) {
                // return "kosong" . $data_tagihan;
                $data_buku = DB::table('tagihan_bukus')
                    ->where('order_id', $request->order_id)->get();
                // update status buku
                DB::table('tagihan_bukus')
                    ->where('order_id', $request->order_id)
                    ->update(['status' => 1]);
                return "kosong" . $data_buku;
            } else {
                // update status spp
                DB::table('tagihans')
                    ->where('order_id', $request->order_id)
                    ->update(['status' => 1]);
                return "Ada isi" . $data_tagihan;
            }
        } else {
            return $request->order_id . 'belum bayar';
        }

        // return $request->order_id . 'belum bayar';
    }
}
