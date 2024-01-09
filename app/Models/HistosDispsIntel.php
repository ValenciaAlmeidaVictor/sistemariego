<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistosDispsIntel
 *
 * @property $id
 * @property $fecha_inicio
 * @property $hora
 * @property $valor
 * @property $disp_intel_id
 * @property $created_at
 * @property $updated_at
 *
 * @property DispsIntel $dispsIntel
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistosDispsIntel extends Model
{
    
    static $rules = [
		'fecha_inicio' => 'required',
		'hora' => 'required',
		'valor' => 'required',
		'disp_intel_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_inicio','hora','valor','disp_intel_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dispsIntel()
    {
        return $this->belongsTo(DispsIntel::class, 'disp_intel_id', 'id');
    }
    

}
