<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class todoUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin=User::create([

            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'puesto'=>'jefe',
            'area_id'=>'200',
            'password'=>Hash::make('admin'),

        ]);

        $useradmin=User::create([

            'name'=>'area1',
            'email'=>'area1@gmail.com',
            'puesto'=>'empleado',
            'area_id'=>'AREA1',
            'password'=>Hash::make('area1'),

        ]);
        $useradmin=User::create([

            'name'=>'area2',
            'email'=>'area2@gmail.com',
            'puesto'=>'empleado2',
            'area_id'=>'AREA2',
            'password'=>Hash::make('area2'),

        ]);

        $useradmin=User::create([

            'name'=>'area3',
            'email'=>'area3@gmail.com',
            'puesto'=>'empleado3',
            'area_id'=>'AREA3',
            'password'=>Hash::make('area3'),

        ]);


    }
}
