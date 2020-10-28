<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property float $persentase
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property TpmKriterium[] $tpmKriterias
 */
class tpm_aspek extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tpm_aspek';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'persentase', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tpmKriterias()
    {
        return $this->hasMany('App\TpmKriterium', 'id_aspek');
    }
}
