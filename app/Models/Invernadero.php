<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invernadero
 *
 * @property $id
 * @property $nombre
 * @property $longitud
 * @property $latitud
 * @property $ancho
 * @property $alto
 * @property $largo
 * @property $camas_id
 * @property $invernaderocol
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Cama[] $camas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Invernadero extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'longitud' => 'required',
		'latitud' => 'required',
		'ancho' => 'required',
		'alto' => 'required',
		'largo' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','longitud','latitud','ancho','alto','largo','camas_id','invernaderocol','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function camas()
    {
        return $this->hasMany('App\Models\Cama', 'invernadero_id', 'id');
    }
    

}
