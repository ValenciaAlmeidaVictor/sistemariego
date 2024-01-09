<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Sensore[] $sensores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
{
    
    static $rules = [
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sensores()
    {
        return $this->hasMany('App\Models\Sensore', 'estado_id', 'id');
    }
    public function dispsIntels()
    {
        return $this->hasMany('App\\Models\DispsIntel', 'tipo_disp_intel_id', 'id');
    }
    

}
