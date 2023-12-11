<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Viatic
 *
 * @property $id
 * @property $place
 * @property $description
 * @property $amount
 * @property $status
 * @property $idEmployee
 * @property $idUser
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee $employee
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Viatic extends Model
{
    
    static $rules = [
		'place' => 'required',
		'description' => 'required',
		'amount' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['place','description','amount','status','idEmployee','idUser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'idEmployee');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
