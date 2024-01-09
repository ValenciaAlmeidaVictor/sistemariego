<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sara extends Model
{
    use HasFactory;
    protected $fillable=['nombre','tipoSensor','costo','cantidad'];
    protected $guarded=[];
    public $timestamps=false;
}
