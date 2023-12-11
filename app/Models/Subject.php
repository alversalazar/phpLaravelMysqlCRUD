<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subject
 *
 * @property $id
 * @property $name
 * @property $credit
 * @property $unit
 * @property $characteristic
 * @property $keymatter
 * @property $status
 * @property $idUser
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subject extends Model
{
    
    static $rules = [
		'name' => 'required',
		'credit' => 'required',
		'unit' => 'required',
		'characteristic' => 'required',
		'keymatter' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','credit','unit','characteristic','keymatter','status','idUser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
