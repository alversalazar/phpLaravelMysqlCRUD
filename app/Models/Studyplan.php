<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Studyplan
 *
 * @property $id
 * @property $objetive
 * @property $datestart
 * @property $datefinal
 * @property $status
 * @property $idCarrer
 * @property $idUser
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrer $carrer
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Studyplan extends Model
{
    
    static $rules = [
		'objetive' => 'required',
		'datestart' => 'required',
		'datefinal' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['objetive','datestart','datefinal','status','idCarrer','idUser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrer()
    {
        return $this->hasOne('App\Models\Carrer', 'id', 'idCarrer');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
