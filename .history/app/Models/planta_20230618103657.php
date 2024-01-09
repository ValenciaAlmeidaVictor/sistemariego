<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planta extends Model
{
    use HasFactory;
    protected $table ='planta';
    protected $primarykey= "id";
    protected $fillable=['nombre','descripción'];
    protected $guarded=[];
    public $timestamps=false;
}