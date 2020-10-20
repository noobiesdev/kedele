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
        if( isset($input['nama']) && isset($input['slug']) ) {
            #To update Umum section
            $customMessage = [];
            $dataValidator = [];
        }else{
            #To update Kepemilikan section
            $customMessage = [];
            $dataValidator = [];
        }
        $validation = Validator::make($request->all(), $dataValidator, $customMessage);
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
