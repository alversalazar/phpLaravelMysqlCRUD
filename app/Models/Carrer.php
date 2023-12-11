<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrer
 *
 * @property $id
 * @property $name
 * @property $duration
 * @property $description
 * @property $status
 * @property $idUser
 * @property $created_at
 * @property $updated_at
 *
 * @property Studyplan[] $studyplans
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrer extends Model
{
    
    static $rules = [
		'name' => 'required',
		'duration' => 'required',
		'description' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','duration','description','status','idUser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studyplans()
    {
        return $this->hasMany('App\Models\Studyplan', 'idCarrer', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
