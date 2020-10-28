<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $id_usaha
 * @property string $nama
 * @property string $deskripsi
 * @property float $kebutuhan_bahan
 * @property int $harga
 * @property string $slug
 * @property string $gambar
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Usaha $usaha
 * @property DetailPembelian[] $detailPembelians
 */
class Produk extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'produk';
     protected $dates = ['deleted_at'];
    /**
     * @var array
     */
    protected $fillable = ['id_usaha', 'nama', 'deskripsi', 'kebutuhan_bahan', 'harga', 'slug', 'gambar', 'created_at', 'updated_at', 'deleted_at'];

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
    public function detailPembelians()
    {
        return $this->hasMany('App\DetailPembelian', 'id_produk');
    }
}
