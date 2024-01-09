<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposDispsIntel
 *
 * @property $id
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property DispsIntel[] $dispsIntels
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposDispsIntel extends Model
{
    
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
    public function dispsIntels()
    {
        return $this->hasMany('App\\Models\DispsIntel', 'tipo_disp_intel_id', 'id');
    }
    

}
