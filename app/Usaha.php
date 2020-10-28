<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pengusaha
 * @property string $nama
 * @property string $slug
 * @property string $deskripsi
 * @property boolean $has_npwp
 * @property string $nama_pemilik
 * @property string $nomor_pemilik
 * @property string $bukti_pemilik
 * @property int $jumlah_bahan
 * @property string $kualitas_bahan
 * @property string $status
 * @property string $masa_aktif
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property PengajuanBahan[] $pengajuanBahans
 * @property Produk[] $produks
 * @property Website $website
 */
class Usaha extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usaha';

    /**
     * @var array
     */
    protected $fillable = ['id_pengusaha', 'nama', 'slug', 'deskripsi', 'has_npwp', 'nama_pemilik', 'nomor_pemilik', 'bukti_pemilik', 'jumlah_bahan', 'kualitas_bahan', 'status', 'masa_aktif', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_pengusaha');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pengajuanBahans()
    {
        return $this->hasMany('App\PengajuanBahan', 'id_usaha');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produks()
    {
        return $this->hasMany('App\Produk', 'id_usaha');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function website()
    {
        return $this->hasOne('App\Website', 'id');
    }
}
