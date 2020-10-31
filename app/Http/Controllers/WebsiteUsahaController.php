<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Helpers\PhoneHelper as phone;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Session;

class WebsiteUsahaController extends Controller
{
    public function get_usaha($uid)
    {
        $id = \App\Usaha::findOrFail($uid);
        return $id;
    }

    public function get_usaha_byslug($slug)
    {
        $usaha = \App\Usaha::where('slug',$slug)->first();
        if($usaha == null){
            return false;
        }
        return $usaha;
    }

    # =-=-=-=-=-=-=-= PENGELOLAAN USAHA =-=-=-=-=-=-=-= #
    public function banner()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $usaha = $usaha->website()->first();
        return view('desain.banner', compact('usaha'));
    }
    public function lokasi()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $usaha = $usaha->website()->first();
        return view('desain.lokasi', compact('usaha'));
    }
    public function kontak()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $usaha = $usaha->website()->first();
        return view('desain.kontak', compact('usaha'));
    }
    public function update(Request $request)
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $input = $request->all();
        $usaha = \App\Usaha::findOrFail($usaha->id);
        # validation start
        if ( isset($input['whatsapp']) ){
          $input['whatsapp'] = phone::validate($input['whatsapp']);
        }
        $dataValidator = [
            'whatsapp' => 'numeric|digits_between:10,14',
            'facebook' => 'max:32',
            'twitter' => 'max:32',
            'instagram' => 'max:32',
            'marketplace' => 'max:64',
            'gambar_jumbotron' => 'mimes:jpeg,jpg,png|dimensions:min_width=500,max_width=1500',
        ];
        $validator = Validator::make($input,$dataValidator);
        if($validator->fails()){
            return redirect()->back()->with('error', 'Kesalahan saat menyimpan! '.$validator->errors()->first());
        }
        #validation end
        unset($input['_token'], $input['files']);
        if($usaha->website()->update($input)) {
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
