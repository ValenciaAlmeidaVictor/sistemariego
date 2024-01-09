<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=['nombre','ancho','alto','largo','material_es','material_env'];
    protected $guarded=[];
    public $timestamps=false;
}
