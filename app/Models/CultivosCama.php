<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CultivosCama
 *
 * @property $id
 * @property $fecha_siembra
 * @property $fecha_cosecha
 * @property $ubicacion_cama
 * @property $cultivo_id
 * @property $cama_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cama $cama
 * @property Cultivo $cultivo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CultivosCama extends Model
{
    
    static $rules = [
		'fecha_siembra' => 'required',
		'fecha_cosecha' => 'required',
		'ubicacion_cama' => 'required',
		'cultivo_id' => 'required',
		'cama_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_siembra','fecha_cosecha','ubicacion_cama','cultivo_id','cama_id'];


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
    public function cultivo()
    {
        return $this->hasOne('App\Models\Cultivo', 'id', 'cultivo_id');
    }
    

}
