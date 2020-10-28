<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_kedelai
 * @property int $id_kriteria
 * @property int $nilai
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property TpmKriterium $tpmKriterium
 * @property KategoriKedelai $kategoriKedelai
 */
class tpm_profile extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tpm_profile';

    /**
     * @var array
     */
    protected $fillable = ['id_kedelai', 'id_kriteria', 'nilai', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tpmKriterium()
    {
        return $this->belongsTo('App\TpmKriterium', 'id_kriteria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategoriKedelai()
    {
        return $this->belongsTo('App\KategoriKedelai', 'id_kedelai');
    }
}
