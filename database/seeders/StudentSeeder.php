<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0;$i<10;$i++)
        {
            $student = new Student();
            $student->name = 'ali';
            $student->father_name = 'abc';
            $student->contact = '2554745454';
            $student->department_id = 1;
            $student->instituation_id = 1;
            $student->save();
        }
    }
}
