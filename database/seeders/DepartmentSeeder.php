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
        for($i=0;$i<20;$i++)
        {
            $department = new Department();
            $department->name = 'abc';
            $department->save();
        }
    }
}
