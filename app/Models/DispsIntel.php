<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DispsIntel
 *
 * @property $id
 * @property $nombre
 * @property $modelo
 * @property $descripcion
 * @property $alcance
 * @property $topic
 * @property $tipo_disp_intel_id
 * @property $cama_id
 * @property $estado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cama $cama
 * @property Sensore $sensore
 * @property TiposDispsIntel $tiposDispsIntel
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DispsIntel extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'modelo' => 'required',
		'descripcion' => 'required',
		'alcance' => 'required',
		'topic' => 'required',
		'tipo_disp_intel_id' => 'required',
		'cama_id' => 'required',
		'estado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','modelo','descripcion','alcance','topic','tipo_disp_intel_id','cama_id','estado_id'];


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
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiposDispsIntel()
    {
        return $this->hasOne('App\Models\TiposDispsIntel', 'id', 'tipo_disp_intel_id');
    }
    public function histosDispsIntel()
    {
        return $this->hasMany(HistosDispsIntel::class, 'disp_intel_id', 'id');
    }

}
