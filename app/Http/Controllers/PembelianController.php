<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    public function get_usaha($uid) {
        // $id = DB::table('usaha')->where('id', $uid);
        $id = \App\Usaha::where('id_pengusaha',$uid)->first();
        return $id;
    }
    # =-=-=-=-=-= PENGUSAHA =-=-=-=-=-=
    public function index()
    {
        $edit = '';
        $orders = [];
        $usaha = self::get_usaha(Auth::user()->id);
        $orders = \App\Pembelian::where('id_usaha',$usaha->id)->get();
        // dd($orders);
        // foreach ($usaha->produks as $produk) {
        //     $pembelian = $produk->pembelians;
        //     #Order by status
        //     if( isset($request->status) && !is_null($request->status) ){
        //         $status = $request->status;
        //         $pembelian->where('status', $status);
        //     }
        //     #Edit
        //     if( isset($request->pesanan) && !is_null($request->pesanan) && $pembelian->kode_pemesanan == $request->pesanan){
        //         $edit = $pembelian;
        //     }
        //     array_push($orders, $pembelian);
        // }
        return view('pembelian.index', compact('orders', 'edit'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function setstatus($id, $status){
        $usaha = self::get_usaha(Auth::user()->id);
        $order = \App\Pembelian::where('kode_pemesanan',$id)->first();
        if (is_null($order) or $order->id_usaha != $usaha->id){
          return redirect()->route('pembelian.index')->with('error', 'Pembelian tidak ditemukan');
        }
        $order->update([
          'status'      => $status
        ]);
        if ($status == 'batal') {
          return redirect()->route('pembelian.index')->with('success', 'Berhasil membatalkan pengajuan bahan');
        }
        return redirect()->route('pembelian.index')->with('success', 'Status pesanan berhasil diperbarui');
    }

    public function destroy($id)
    {
        //
    }
}
