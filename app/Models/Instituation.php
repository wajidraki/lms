<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituation extends Model
{
    use HasFactory;


    public function students(){
        return $this->hasMany(Student::class);
    }



    //SCOPE
    public function scopeNoStudentsInstitutes($query){
        return $query->whereHas('students');
    }

        public function scopeIstuate($query){
            return $query->whereDoesntHave('students');
        }


}
