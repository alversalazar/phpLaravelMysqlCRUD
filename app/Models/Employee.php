<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $name
 * @property $firstname
 * @property $lastname
 * @property $gender
 * @property $phone
 * @property $email
 * @property $address
 * @property $socialsegurity
 * @property $dateofhire
 * @property $status
 * @property $idUser
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Viatic[] $viatics
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'name' => 'required',
		'firstname' => 'required',
		'lastname' => 'required',
		'gender' => 'required',
		'phone' => 'required',
		'email' => 'required',
		'address' => 'required',
		'socialsegurity' => 'required',
		'dateofhire' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','firstname','lastname','gender','phone','email','address','socialsegurity','dateofhire','status','idUser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viatics()
    {
        return $this->hasMany('App\Models\Viatic', 'idEmployee', 'id');
    }
    

}
