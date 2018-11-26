<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\PurchaseDetails;


class PurchaseController extends Controller
{
    public function index()
    {
        $cart = \Session::get('cart');
        return view('purchase.index',['cart'=> $cart]);
    }

    protected function create()
    {
        $user = \Auth::user();
        $cart = \Session::get('cart');   

        \DB::beginTransaction();
        try {
            $purch = Purchase::create([
                'user_id' => $user->id,
                'transaction_date' => date('Y-m-d'),
                'tax' => 21,
                'charge' => 1000,
            ]);

            foreach ($cart as $item) {
                $detail = PurchaseDetails::create([
                    'product_id' => $item->id,
                    'purcharse_id' => $purch->id,
                    'quantity' => $item->quantity,
                    // 'quantity' => request()->input('quantity'.$item->id),
                    'tax' => 21,
                    'unit_price' => $item->price,
                ]);
            }

            \DB::commit();
            $success = true;

        } catch (\Exception $e) {
            $success = false;
            \DB::rollback();
            return redirect('/home');
        }

        if ($success) {
            return redirect('/purchase/index');
        }

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
        //
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
        //
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
