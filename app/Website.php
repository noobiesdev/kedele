<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_usaha
 * @property string $gambar_jumbotron
 * @property string $judul_jumbotron
 * @property string $teks_jumbotron
 * @property string $maps
 * @property string $whatsapp
 * @property string $twitter
 * @property string $instagram
 * @property string $facebook
 * @property string $marketplace
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Usaha $usaha
 */
class Website extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'website';

    /**
     * @var array
     */
    protected $fillable = ['id_usaha', 'gambar_jumbotron', 'judul_jumbotron', 'teks_jumbotron', 'maps', 'whatsapp', 'twitter', 'instagram', 'facebook', 'marketplace', 'created_at', 'updated_at', 'deleted_at'];
    protected $guarded  = ['id', '_token'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usaha()
    {
        return $this->belongsTo('App\Usaha', 'id');
    }
}
