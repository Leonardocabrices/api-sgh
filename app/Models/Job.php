<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'waiting_employees',
        'departament_id'
    ];

    public function departament (){
        return $this->belongsTo(Departament::class);
    }

    
    public function employees(){
        return $this->hasMany(Employee::class);
    }
        
}
