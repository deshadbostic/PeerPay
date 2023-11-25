<?php

namespace App\Http\Controllers;

use App\Models\Payee;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class PayeeController extends Controller
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

        
        $email = $request->get(key: 'email');
        $payee_id = $request->get(key: 'acc');
        $user_id = auth()->user()->id;
        $user_email = auth()->user()->email;
        $payee = User::where('email', $email)->first();
        if($user_email == $email)
        {
            return redirect('addemail')->with('message','You cannot add your self as a Payee');
        }

        if($user_id == $payee_id)
        {
            return redirect('addaccount')->with('message','You cannot add your self as a Payee');
        }

       
        if($payee)
        {
            Payee::create([

                'user_id' => $user_id,
                'payee_id' => $payee->id,
                
    
            ]);

            return redirect('payees');


        }
        else
        {
            return redirect('addemail')->with('message','Payee was not found.The payee email is not valid');
        }

        if(User::where('user_id', $payee_id)->first())
        {
            Payee::create([

                'user_id' => $user_id,
                'payee_id' => $payee->id,
                
    
            ]);

            return redirect('payees');
        }
        else
        {
            return redirect('addaccount')->with('message','Payee was not found. The payee id is not valid');
    }

}

    /**
     * Display the specified resource.
     */
    public function show(Payee $payee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payee $payee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payee $payee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payee $payee)
    {
        //
    }
}
