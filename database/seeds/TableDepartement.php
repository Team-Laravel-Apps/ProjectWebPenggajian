<?php

use Illuminate\Database\Seeder;
use App\Models\Master\Departement;

class TableDepartement extends Seeder
{
    public function run()
    {
        $departement = [
            ['name'=>'Customer Service Officer'],
            ['name'=>'Customer Technical Service Officer'],
            ['name'=>'HelpDesk Operation Admin'],
            ['name'=>'Technician Maintenance'],
            ['name'=>'Technicin Fiber Optic'],
        ];
        foreach($departement as $row)
        {
            Departement::create($row);
        }
    }
}
