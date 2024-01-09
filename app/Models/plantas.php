<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plantas extends Model
{
    use HasFactory;
    protected $table='plantas';
    protected $primarykey='id';
    protected $fillable=['nombre','idTipo','max_humedad','max_luminusidad'];

    protected $guarded=[];
    public $timestamps=false;
}
