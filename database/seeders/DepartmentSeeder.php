<?php

namespace Database\Seeders;
use Psy\Util\Str;
use App\Models\Department;
use Illuminate\Database\Seeder;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   $departmens = ['computer Sciences','physics','chemsiry'];

   foreach($departmens as $depart){
       $department = new Department();
       $department->name = $depart;
       $department->save();
   }
    }
}
