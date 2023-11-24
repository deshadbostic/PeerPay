<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payee;
use App\Models\Transaction;



class UserController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $users = User::all();
        $payees = Payee::all();
        return view('index', compact('users'), compact('payees'));
    }

    public function history()
    {
        $user_id = auth()->user()->id;
        $users = User::all();
        $transfers = Transaction::all();
        return view('history', compact('users'), compact('transfers'));
    }

    public function edit($payee_id)
    {
        $users = User::find($payee_id);
        return view('edit', compact('users'));
    }
}
