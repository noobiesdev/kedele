<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BelanjaController extends Controller
{

    public function index()
    {
        $uid = Auth::user()->id;
        $orders = \App\Pembelian::where('id_pembeli',$uid)->where('status','<>', 'batal')->get();
        return view('belanja.index', compact('orders'));
    }

    public function setstatus($id, $status){
        $uid = Auth::user()->id;
        $order = \App\Pembelian::where('kode_pemesanan',$id)->first();
        if (is_null($order) or $order->id_pembeli != $uid){
          return redirect()->route('belanja.index')->with('error', 'Pembelian tidak ditemukan');
        }
        $order->update([
          'status'      => $status
        ]);
        return redirect()->route('belanja.index')->with('success', 'Berhasil membatalkan pengajuan bahan');
    }

    public function arsip()
    {
        $uid = Auth::user()->id;
        $orders = \App\Pembelian::where('id_pembeli',$uid)->where('status', 'batal')->get();
        return view('belanja.arsip', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
