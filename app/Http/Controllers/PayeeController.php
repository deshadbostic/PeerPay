<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payee;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class PayeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payees = auth()->user()->payees;

        return view('payees.index', [
            'payees' => $payees,
        ]);
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

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:payees'],
            'payee_accountNumber' => ['required', 'string', 'max:10'],
        ]);
    
        $user = $request->user();
    
        // Check if the user is adding themselves
        if ($user->email === $request->input('email')) {
            return redirect()->route('payees.index')->with('error', 'You cannot add yourself as a payee.');
        }
    
        $payee = User::where('email', $request->input('email'))->first();
    
        if (!$payee || !$payee->authorized) {
            return redirect()->route('payees.index')->with('error', 'The user you are trying to add is not authorized.');
        }
    
        $existingPayee = Payee::where('email', $request->input('email'))->first();
    
        if ($existingPayee) {
            return redirect()->route('payees.index')->with('error', 'The user is already added as a payee.');
        }
    
        // Create the payee
        $payee = $user->payees()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'payee_accountNumber' => $request->input('payee_accountNumber'),
        ]);
    
        return redirect()->route('payees.index')->with('success', 'Payee added successfully.');
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
    public function destroy(Payee $payee): RedirectResponse
    {
        //
        $this->authorize('delete', $payee);

        $payee->delete();

        return redirect(route('payee.index'));
    }
}
