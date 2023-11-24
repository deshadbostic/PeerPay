<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $sent = $request->get(key: 'amount');
        $payee_id = $request->get(key: 'payee');
        $user_id = auth()->user()->id;

        $user = User::find($user_id);
        $payee = User::find($payee_id);

        if($sent > $user->account)
        {
            return redirect('payees');
        }
        else
        {
            $user_amount = $user->account - $sent;
            $payee_amount = $payee->account + $sent;

            $user->account = $user_amount;
            $user->update();

            $payee->account = $payee_amount;
            $payee->update();

            Transaction::create([

                'user_id' => auth()->user()->id,
                'payee_id' => $request->get(key: 'payee'),
                'type' => "sent",
                'amount' => $request->get(key: 'amount'),
    
            ]);
    
            Transaction::create([
    
                'user_id' => $request->get(key: 'payee'),
                'payee_id' => auth()->user()->id,
                'type' => "recieved",
                'amount' => $request->get(key: 'amount'),
    
            ]);

            return redirect('history');
            

        }

        return redirect()-back()-with('message','Update Failed');


       


        // return redirect()->back();
   }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
