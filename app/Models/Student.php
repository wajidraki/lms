<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

//relation
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function instituation(){
        return $this->belongsTo(Instituation::class);
    }





}
