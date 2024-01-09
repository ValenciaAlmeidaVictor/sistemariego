<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoSensore
 *
 * @property $id
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Sensore[] $sensores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoSensore extends Model
{
  protected $table = 'tipos_sensores';

    static $rules = [
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sensores()
    {
        return $this->hasMany('App\Models\Sensore', 'tipo_sensor_id', 'id');
    }
    

}
