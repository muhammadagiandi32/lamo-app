<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $query = DB::table('tagihans')
            ->leftJoin('siswas', 'tagihans.id_siswa', '=', 'siswas.id')
            ->leftJoin('users', 'users.id', '=', 'siswas.user_id')->get();
        // dd($query);
        return view('siswa.index_payment', [
            'data' => $query
        ]);
    }

    public function snap_token(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-JpF4nsP97oaxhsFzCoagiVUG';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $total = array_sum($request->check);
        $email = $request->email;
        $no_phone = $request->no_phone;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => intval($total),
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
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
