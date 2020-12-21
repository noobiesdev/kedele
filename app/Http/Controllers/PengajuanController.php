<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function get_usaha($uid) {
        $id = \App\Usaha::where('id_pengusaha',$uid)->first();
        return $id;
    }

    public function index() //role produsen
    {
      $usaha = self::get_usaha(Auth::user()->id);
      $pengajuan = \App\PengajuanBahan::all()->where('id_usaha', $usaha->id);
      // dd($pengajuan);
      return view('pengajuan.index', compact('pengajuan'));
    }

    public function index2(Request $request) //role admin
    {
      $pop ='';
      $data_supplier = \App\Supplier::all();
      $pengajuan = \App\PengajuanBahan::all();
      if( isset($request->pop) && !is_null($request->pop) ){
          $pop = $request->pop;
          $pop = \App\PengajuanBahan::where('id',$pop)->first();
      }
      // dd($pengajuan);
      return view('pengajuan.index', compact('pengajuan', 'data_supplier', 'pop'));
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
      $request->validate([
        'jumlah_bahan' => 'required',
      //   'username' => 'required',
      //   'email' => 'required',
      ]);
      $input = $request->all();
      $usaha = self::get_usaha(Auth::user()->id);
      $usaha_id = $usaha->id;
      $produk = \App\PengajuanBahan::create([
        'id_usaha'          => $usaha_id,
        // 'id_supplier'       => $supplier->id,
        'kategori_kedelai'  => $input['kategori'],
        'jumlah_bahan'      => $input['jumlah_bahan'],
        'id_kode_pemesanan' => 'REQ'.str_random(3),
        'status'            => 'mencari',
      ]);
      return redirect()->route('pengajuan-bahan.index')->with('success', 'Berhasil menambahkan pengajuan bahan');
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
    public function edit(Request $request, $id) //role admin edit supplier di pengajuan bahan
    {
        $pesanan = \App\PengajuanBahan::findOrFail($id);
        $data_supplier = \App\Supplier::where('nama',$request['supplier'])->first();
        if($pesanan->update(['id_supplier' =>$data_supplier['id']])){
          return redirect()->route('pengajuan-bahan.index2')->with('success', 'Data berhasil diperbarui');
        }
        return redirect()->route('pengajuan-bahan.index2')->with('error', 'Data gagal diperbarui');
    }

    public function setstatus($id, $status){    //set status dan pembatalan role admin
            $pesanan = \App\PengajuanBahan::findOrFail($id);
            // if( $status == "belumbayar"){
            //     $status = 'belum bayar';
            // }
            $pesanan->update([
              'status'      => $status
            ]);
            if ($status == 'batal') {
              $pesanan->delete();
              return redirect()->route('pengajuan-bahan.index2')->with('success', 'Berhasil membatalkan pengajuan bahan');
            }
            return redirect()->route('pengajuan-bahan.index2')->with('success', 'Status pesanan berhasil diperbarui');
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
    public function destroy($id) //pembatalan order untuk role produsen
    {
      $status = 'batal';
      $pesanan = \App\PengajuanBahan::findOrFail($id);
      // if( $status == "belumbayar"){
      //     $status = 'belum bayar';
      // }
      $pesanan->update([
        'status'      => $status
      ]);
        $pesanan->delete();
        return redirect()->route('pengajuan-bahan.index')->with('success', 'Berhasil membatalkan pengajuan bahan');
    }
}
