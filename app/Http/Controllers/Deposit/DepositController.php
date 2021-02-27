<?php

namespace App\Http\Controllers\Deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deposit;

class DepositController extends Controller
{
    public function index()
    {
        $deposits = Deposit::all();

        return view('deposit.index', compact('deposits'));
    }

    public function create()
    {

        return view('deposit.create');
    }

    public function store(Request $request)
    {
        $deposit = Deposit::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'saldo' => $request->saldo
        ]);
    
        flash()->success('Data Deposit Berhasil di tambah');
        return redirect()->back();
    }
}
