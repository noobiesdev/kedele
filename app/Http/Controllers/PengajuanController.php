<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function get_usaha($uid) {
        // $id = DB::table('usaha')->where('id', $uid);
        $id = \App\Usaha::findOrFail($uid);
        return $id;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pengajuan = \App\PengajuanBahan::all();
      return view('pengajuan.index',['pengajuan' => $pengajuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $request->validate([
      //   'nama_lengkap' => 'required',
      //   'username' => 'required',
      //   'email' => 'required',
      // ]);
      $input = $request->all();
      $sid = 1;
      $supplier = \App\Supplier::find($sid);
      $usaha = self::get_usaha(Auth::user()->id);

      $produk = \App\PengajuanBahan::create([
        'id_usaha'          => $usaha->id,
        'id_supplier'       => $supplier->id,
        'kategori_kedelai'  => $input['kualitas_bahan'],
        'jumlah_bahan'      => $input['jumlah_bahan'],
        'id_kode_pemesanan' => str_random(12),
        'status'            => 'mencari',
      ]);
      // $pengajuan = new \App\PengajuanBahan;
      // $pengajuan->id_usaha = $usaha->id;
      // $pengajuan->jumlah_bahan = $request->jumlah_bahan;
      // $pengajuan->kualitas_bahan = $request->kualitas_bahan;
      // $pengajuan->status = 'mencari';
      // $pengajuan->id_kode_pemesanan = str_random(12);
      // $pengajuan->save();

      //insert ke tabel karyawan
      // $request->request->add(['user_id' => $user->id]);
      // $karyawan = \App\Karyawan::create($request->all());
      return redirect('produk.index')->with('status','Pengajuan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
