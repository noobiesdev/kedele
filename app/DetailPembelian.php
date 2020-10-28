<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pembelian
 * @property int $id_produk
 * @property int $jumlah
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Pembelian $pembelian
 * @property Produk $produk
 */
class DetailPembelian extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'detail_pembelian';

    /**
     * @var array
     */
    protected $fillable = ['id_pembelian', 'id_produk', 'jumlah', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pembelian()
    {
        return $this->belongsTo('App\Pembelian', 'id_pembelian');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }
}
