<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pembeli
 * @property int $id_produk
 * @property int $id_supplier
 * @property int $jumlah
 * @property string $kode_pemesanan
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Produk $produk
 */
class Pembelian extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pembelian';

    /**
     * @var array
     */
    protected $fillable = ['id_pembeli', 'id_produk', 'id_supplier', 'jumlah', 'kode_pemesanan', 'status', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_pembeli');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }
}
