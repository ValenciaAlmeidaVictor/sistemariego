<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sensore
 *
 * @property $id
 * @property $nombre
 * @property $numero_serie
 * @property $modelo
 * @property $descripcion
 * @property $topic
 * @property $tipo
 * @property $tipo_sensor_id
 * @property $estado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property CamasSensore[] $camasSensores
 * @property Estado $estado
 * @property TipoSensore $tipoSensore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sensore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'numero_serie' => 'required',
		'modelo' => 'required',
		'descripcion' => 'required',
		'topic' => 'required',
		'tipo_sensor_id' => 'required',
		'estado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','numero_serie','modelo','descripcion','topic','tipo','tipo_sensor_id','estado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function camasSensores()
    {
        return $this->hasMany('App\Models\CamasSensore', 'sensor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoSensore()
    {
        return $this->hasOne('App\Models\TipoSensore', 'id', 'tipo_sensor_id');
    }
    

}
