<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    use HasFactory;
    protected $table='sensor';
    protected $primarykey='id';
    protected $fillable=['nombre','descripcion'];

    protected $guarded=[];
    public $timestamps=false;
}
