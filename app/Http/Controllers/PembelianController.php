<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    public function get_usaha($uid) {
        // $id = DB::table('usaha')->where('id', $uid);
        $id = \App\Usaha::findOrFail($uid);
        return $id;
    }
    # =-=-=-=-=-= PENGUSAHA =-=-=-=-=-=
    public function index()
    {
        $edit = '';
        $orders = [];
        $usaha = self::get_usaha(Auth::user()->id);
        foreach ($usaha->produks as $produk) {
            $pembelian = $produk->pembelians;
            #Order by status
            if( isset($request->status) && !is_null($request->status) ){
                $status = $request->status;
                $pembelian->where('status', $status);
            }
            #Edit
            if( isset($request->pesanan) && !is_null($request->pesanan) && $pembelian->kode_pemesanan == $request->pesanan){
                $edit = $pembelian;
            }
            array_push($orders, $pembelian);
        }
        dd($orders);
        return view('pembelian.index', compact('orders', 'edit'));
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
