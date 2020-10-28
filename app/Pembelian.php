<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pembeli
 * @property int $id_usaha
 * @property string $kode_pemesanan
 * @property int $total_harga
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property DetailPembelian[] $detailPembelians
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
    protected $fillable = ['id_pembeli', 'id_usaha', 'kode_pemesanan', 'total_harga', 'status', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_pembeli');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailPembelians()
    {
        return $this->hasMany('App\DetailPembelian', 'id_pembelian');
    }
}
