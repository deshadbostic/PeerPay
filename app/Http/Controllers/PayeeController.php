<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class PayeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('payees.index');
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
        //

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Payee::class],
            'payee_accountNumber' => ['required', 'string','max:10'],
        ]);

        // $payee = Payee::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'payee_accountNumber' => $request->payee_accountNumber,
        // ]);

        $request->user()->payees()->create($validated);

       // $request->user()->chirps()->create($validated);
 
        return redirect(route('payees.index'));
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
