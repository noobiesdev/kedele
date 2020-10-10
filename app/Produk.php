<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_usaha
 * @property string $nama
 * @property string $deskripsi
 * @property int $harga
 * @property string $slug
 * @property string $gambar
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Usaha $usaha
 * @property Pembelian[] $pembelians
 */
class Produk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'produk';

    /**
     * @var array
     */
    protected $fillable = ['id_usaha', 'nama', 'deskripsi', 'harga', 'slug', 'gambar', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usaha()
    {
        return $this->belongsTo('App\Usaha', 'id_usaha');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pembelians()
    {
        return $this->hasMany('App\Pembelian', 'id_produk');
    }
}
