<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $nama
 * @property string $username
 * @property string $email
 * @property string $no_hp
 * @property string $password
 * @property string $level
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Pembelian[] $pembelians
 * @property Usaha[] $usahas
 */
class User extends Authenticatable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    use Notifiable, HasRoles, SoftDeletes;
    protected $table = 'user';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'username', 'email', 'no_hp', 'password', 'level', 'alamat', 'created_at', 'updated_at', 'deleted_at'];
    protected $hidden = [
        'password'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pembelians()
    {
        return $this->hasMany('App\Pembelian', 'id_pembeli');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usahas()
    {
        return $this->hasMany('App\Usaha', 'id_pengusaha');
    }
}
