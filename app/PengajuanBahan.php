<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_usaha
 * @property int $id_supplier
 * @property int $kategori_kedelai
 * @property int $harga_beli
 * @property string $id_kode_pemesanan
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Usaha $usaha
 * @property Supplier $supplier
 * @property KategoriKedelai $kategoriKedelai
 */
class PengajuanBahan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengajuan_bahan';

    /**
     * @var array
     */
    protected $fillable = ['id_usaha', 'id_supplier', 'kategori_kedelai', 'harga_beli', 'id_kode_pemesanan', 'status', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usaha()
    {
        return $this->belongsTo('App\Usaha', 'id_usaha');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'id_supplier');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategoriKedelai()
    {
        return $this->belongsTo('App\KategoriKedelai', 'kategori_kedelai');
    }
}
