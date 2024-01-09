<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cultivo
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $min_humedad
 * @property $max_humedad
 * @property $min_luminosidad
 * @property $max_luminosidad
 * @property $min_temperatura
 * @property $max_temperatura
 * @property $tiempo_crecimiento
 * @property $tiempo_vida
 * @property $tipo_sembrado
 * @property $imagen
 * @property $tipo_cultivo_id
 * @property $created_at
 * @property $updated_at
 *
 * @property CultivosCama[] $cultivosCamas
 * @property TiposCultivo $tiposCultivo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cultivo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'min_humedad' => 'required',
		'max_humedad' => 'required',
		'min_luminosidad' => 'required',
		'max_luminosidad' => 'required',
		'min_temperatura' => 'required',
		'max_temperatura' => 'required',
		'tiempo_crecimiento' => 'required',
		'tiempo_vida' => 'required',
		'tipo_sembrado' => 'required',
		'imagen' => 'required',
		'tipo_cultivo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','min_humedad','max_humedad','min_luminosidad','max_luminosidad','min_temperatura','max_temperatura','tiempo_crecimiento','tiempo_vida','tipo_sembrado','imagen','tipo_cultivo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cultivosCamas()
    {
        return $this->hasMany('App\Models\CultivosCama', 'cultivo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiposCultivo()
    {
        return $this->hasOne('App\Models\TiposCultivo', 'id', 'tipo_cultivo_id');
    }
    

}
