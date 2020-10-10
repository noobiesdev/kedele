<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $maps
 * @property string $whatsapp
 * @property string $twitter
 * @property string $instagram
 * @property string $facebook
 * @property string $marketplace
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PengajuanBahan[] $pengajuanBahans
 */
class Supplier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'supplier';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'maps', 'whatsapp', 'twitter', 'instagram', 'facebook', 'marketplace', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pengajuanBahans()
    {
        return $this->hasMany('App\PengajuanBahan', 'id_supplier');
    }
}
