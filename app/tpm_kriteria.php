<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_aspek
 * @property string $nama
 * @property int $nilai
 * @property boolean $factor
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property TpmAspek $tpmAspek
 * @property TpmProfile[] $tpmProfiles
 */
class tpm_kriteria extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tpm_kriteria';

    /**
     * @var array
     */
    protected $fillable = ['id_aspek', 'nama', 'nilai', 'factor', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tpmAspek()
    {
        return $this->belongsTo('App\TpmAspek', 'id_aspek');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tpmProfiles()
    {
        return $this->hasMany('App\TpmProfile', 'id_kriteria');
    }
}
