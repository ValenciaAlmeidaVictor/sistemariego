<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposCultivo
 *
 * @property $id
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cultivo[] $cultivos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposCultivo extends Model
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
    public function cultivos()
    {
        return $this->hasMany('App\Models\Cultivo', 'tipo_cultivo_id', 'id');
    }
    

}
