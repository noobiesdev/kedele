<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsahaController extends Controller
{
    public function get_usaha($uid) {
        // $id = DB::table('usaha')->where('id', $uid);
        $id = \App\Usaha::findOrFail($uid);
        return $id;
    }

    public function index()
    {
        $usaha = self::get_usaha(Auth::user()->id);
        return view('usaha.index', compact('usaha'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $usaha = self::get_usaha(Auth::user()->id);
        $input = $request->all();
        $usaha = \App\Usaha::findOrFail($usaha->id);
        if(substr(trim ($input['slug']), 0, 5) != 'toko-') {
            $input['slug'] = 'toko-'.$input['slug'];
        }
        if( isset($input['nama']) && isset($input['slug']) ) {
            #To update Umum section
            $dataValidator = [
              'nama' => 'required|string|min:5|max:16',
              'slug' => 'required|string|alpha_dash|max:64|unique:usaha,slug,'.$usaha->id,
              'deskripsi' => 'string',
            ];
        }else{
            #To update Kepemilikan section
            $dataValidator = [
              'nama_pemilik' => 'required|string|max:128',
              'nomor_pemilik' => 'required|string|min:12|max:32',
              'bukti_pemilik' => 'mimes:jpeg,jpg,png',
            ];
        }
        $validation = Validator::make($request->all(), $dataValidator);
        if ($validation->fails()) {
            return redirect()->back()->with('error', 'Gagal memperbarui informasi usaha')
                        ->withErrors($validation)
                        ->withInput();
        }

        if(isset($input['has_npwp'])) {
            $input['has_npwp'] = ($input['has_npwp'] == 'on')? 1:0;
        }
        if ($request->hasFile('bukti')) {
            $uploadFile = $request->file('bukti');
            $destinationPath = 'uploads/ktp_pengusaha/';// upload path
            $fileName = date('YmdHis'). '-' . Str::random(25) . "_ktp.".$uploadFile->getClientOriginalExtension();
            $uploadFile->move($destinationPath, $fileName);
            $fileName = $destinationPath.$fileName;
            $input['bukti_pemilik'] = $fileName;
        }
        if($usaha->update($input)) {
            return redirect()->back()->with('success', 'Berhasil disimpan');
        }
        return redirect()->back()->with('error', 'Kesalahan saat menyimpan');
    }

    public function destroy($id)
    {
        //
    }
}
