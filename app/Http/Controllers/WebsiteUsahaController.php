<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WebsiteUsahaController extends Controller
{
    # =-=-=-=-=-=-=-= WEBSITE PENGUSHA =-=-=-=-=-=-=-= #
    public function show(){
      return view('usaha.basic.show');
    }
    public function product(){
      return view('usaha.basic.product');
    }

    # =-=-=-=-=-=-=-= PENGELOLAAN USAHA =-=-=-=-=-=-=-= #
    public function get_usaha($uid) {
        // $id = DB::table('usaha')->where('id', $uid);
        $id = \App\Usaha::findOrFail($uid);
        return $id;
    }

    public function banner()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        return view('desain.banner', compact('usaha'));
    }
    public function lokasi()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        return view('desain.lokasi', compact('usaha'));
    }
    public function kontak()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        return view('desain.kontak', compact('usaha'));
    }
    public function update(Request $request)
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $input = $request->all();
        $usaha = \App\Usaha::findOrFail($usaha->id);
        if($usaha->update($input)) {
            return redirect()->back()->with('success', 'Berhasil disimpan');
        }
        return redirect()->back()->with('error', 'Kesalahan saat menyimpan');
    }

#   =-=-=-=-=-=-=-=-= Masa Aktif =-=-=-=-=-=-=-=-=
    public function check_masa_aktif()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        if ($usaha->masa_aktif->isFuture() ) {
            return true;
        }
        else{
            self::ubah_status($usaha->id, false);
            return false;
        }
    }
    public function update_masa_aktif($id, $bulan)
    {
      $date = Carbon::createFromFormat('Y.m.d', Carbon::now());
      $date = $date->addMonth($bulan);
      $usaha->update([
        'status' => "act",
        'masa_aktif' => $date,
      ]);
    }
    public function ubah_status($id, $status)
    {
        $usaha = \App\Usaha::findOrFail($id);
        if( $status ) {
            $usaha->update([
              'status' => "act",
            ]);
        }else{
            $usaha->update([
              'status' => "non",
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
