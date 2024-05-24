<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        "name",
        "apellidos"
    ];
    public function module(){

        return $this->belongsTo('App\Models\Module');
    }
}
