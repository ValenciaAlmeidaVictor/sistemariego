<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Put extends Model
{
    use HasFactory;
    protected $table='puts';
    protected $primarykey='id';
    protected $fillable=['nombre','modelo','descripcion','alcance','tipoDispositivo','historialDispositivo'];
    protected $guarded=[];
    public $timestamps=false;
}
