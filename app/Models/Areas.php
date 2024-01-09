<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;
    protected $table = 'area';
    protected $fillable=['nombre','largo','ancho'];
    protected $guarded=[];
    public $timestamps=false;
}
