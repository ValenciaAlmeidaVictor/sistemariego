<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cama
 *
 * @property $id
 * @property $nombre
 * @property $largo
 * @property $ancho
 * @property $invernadero_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Invernadero $invernadero
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cama extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'largo' => 'required',
		'ancho' => 'required',
		'invernadero_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','largo','ancho','invernadero_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invernadero()
    {
        return $this->belongsTo('App\Models\Invernadero', 'invernadero_id','id');
    }
    public function cultivos()
    {
        return $this->belongsToMany(Cultivo::class, 'cultivos_camas');
    }
   

}
