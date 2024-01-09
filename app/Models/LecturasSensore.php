<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LecturasSensore
 *
 * @property $id
 * @property $fecha_inicio
 * @property $hora_lectura
 * @property $valor
 * @property $sensor_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Sensore $sensore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LecturasSensore extends Model
{
    
    static $rules = [
		'fecha_inicio' => 'required',
		'hora_lectura' => 'required',
		'valor' => 'required',
		'sensor_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_inicio','hora_lectura','valor','sensor_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sensore()
    {
        return $this->hasOne('App\Models\Sensore', 'id', 'sensor_id');
    }
    

}
