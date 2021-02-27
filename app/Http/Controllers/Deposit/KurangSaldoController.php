<?php

namespace App\Http\Controllers\Deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deposit;
use App\KurangSaldo;
use App\TambahSaldo;

class KurangSaldoController extends Controller
{
    public function create($id)
    {
       $deposit = Deposit::findOrFail($id);

        return view('deposit.kurangsaldo', compact('deposit'));
    }
    public function update(Request $request, $id)
    {
        $deposit = Deposit::findOrFail($id);

        $hitung = $deposit->saldo - $request->saldo;
        $deposit->update([
            'saldo' => $hitung,
        ]);
        flash()->success('Saldo  berhasil di kurang');

        return redirect()->back();
     
       }
}
