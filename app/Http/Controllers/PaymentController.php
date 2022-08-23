<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Arr;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    public function showPayment($id)
    {
        $user_id = decrypt($id);

        $query = DB::table('tagihans')->select('*', 'tagihans.id AS id_tagihan')
            ->leftJoin('siswas', 'tagihans.id_siswa', '=', 'siswas.id')
            ->leftJoin('users', 'users.id', '=', 'siswas.user_id')
            ->where('users.id', '=', $user_id)
            ->where('tagihans.status', '=', NULL)
            ->get();
        // dd($query);
        return view('siswa.index_payment', [
            'data' => $query
        ]);
    }

    public function snap_token(Request $request)
    {
        $id_transaksi = rand();

        foreach ($request->check as $data) {
            $bayar[] = [
                'order_id' => $id_transaksi,
                'tagihan_id' => $data,
                'total_bayar' => $request->total,
                'status' => 1
            ];
            // dd($data);
            DB::table('tagihans')->where('id', $data)->update(['order_id' => $id_transaksi]);
        }
        // dd($request->check);
        // dd(DB::getQueryLog());
        // dd($request->check);
        DB::table('transaksis')->insert($bayar);


        // $data_transaksi = [
        //     'tagihan_id' => $request->check,
        //     'total_bayar' => $request->total,
        //     'status' => 1
        // ];
        // DB::table('transaksis')->insert($data_transaksi);
        // return $request;
        // return count($request->check);
        \Midtrans\Config::$serverKey = 'SB-Mid-server-JpF4nsP97oaxhsFzCoagiVUG';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $total = count($request->check) * $request->total;
        $email = $request->email;
        $no_phone = $request->no_phone;
        $data_siswa = Auth::user()->name;
        $params = array(
            'transaction_details' => array(
                'order_id' => $id_transaksi,
                'gross_amount' => intval($total),
            ),
            'customer_details' => array(
                'first_name' => $data_siswa,
                'last_name' => '',
                'email' => $email[0],
                'phone' => $no_phone[0],
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return response()->json(['snaptoken' => $snapToken]);
    }



    public function statusPayment(Request $request)
    {
        $data = $request->all();

        DB::table('payment_status')->insert([
            'finish_redirect_url'   => $data['finish_redirect_url'],
            'fraud_status'          => $data['fraud_status'],
            'gross_amount'          => $data['gross_amount'],
            'order_id'              => $data['order_id'],
            'payment_type'          => $data['payment_type'],
            'status_code'           => $data['status_code'],
            'status_message'        => $data['status_message'],
            'transaction_id'        => $data['transaction_id'],
            'transaction_status'    => $data['transaction_status'],
            'transaction_time'      => $data['transaction_time']
        ]);

        return response()->json(['snaptoken' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function snaptokenBuku(Request $request)
    {
        $id_transaksi = rand();
        foreach ($request->check as $data) {
            // $bayar[] = [
            //     'order_id' => $id_transaksi,
            //     'tagihan_id' => $data,
            //    'total_bayar' => $request->total,
            //     'status' => 1
            // ]; 
            DB::table('tagihan_bukus')->where('id', $data)->update(['order_id' => $id_transaksi]);
        }

        // DB::table('tagihan_bukus')->where('id', $data)->update(['order_id' => $id_transaksi]);

        \Midtrans\Config::$serverKey = 'SB-Mid-server-JpF4nsP97oaxhsFzCoagiVUG';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $total = count($request->check) * $request->total;
        // $email = $request->email;
        // $no_phone = $request->no_phone;
        $data_siswa = Auth::user()->name;
        $params = array(
            'transaction_details' => array(
                'order_id' => $id_transaksi,
                'gross_amount' => intval($total),
            ),
            'customer_details' => array(
                'first_name' => $data_siswa,
                'last_name' => '',
                'email' => Auth::user()->email,
                'phone' => '',
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return response()->json(['snaptoken' => $snapToken]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
