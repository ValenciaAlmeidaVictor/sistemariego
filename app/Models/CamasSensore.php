<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CamasSensore
 *
 * @property $id
 * @property $fecha_instalacion
 * @property $camas_id
 * @property $sensor_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cama $cama
 * @property Sensore $sensore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CamasSensore extends Model
{
    
    static $rules = [
		'fecha_instalacion' => 'required',
		'cama_id' => 'required',
		'sensor_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_instalacion','cama_id','sensor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cama()
    {
        return $this->hasOne('App\Models\Cama', 'id', 'cama_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sensore()
    {
        return $this->hasOne('App\Models\Sensore', 'id', 'sensor_id');
    }
    

}
