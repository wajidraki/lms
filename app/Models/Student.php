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

    public function instuate(){
        return $this->belongsTo(Instituation::class);
    }


    //scope
    public function ScopeIsActive($query){
        return $query->where('is_active',1);
    }
    public function ScopeIstuate($query){
        return $query->where('name',NULL);
    }
}
