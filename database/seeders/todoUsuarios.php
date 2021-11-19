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
            'area_id'=>'ADMINISTRADOR',
            'password'=>Hash::make('admin'),

        ]);

        $useradmin=User::create([

            'name'=>'area1',
            'email'=>'area1@gmail.com',
            'puesto'=>'empleado',
            'area_id'=>'RECURSOS HUMANOS',
            'password'=>Hash::make('area1'),

        ]);
        $useradmin=User::create([

            'name'=>'area2',
            'email'=>'area2@gmail.com',
            'puesto'=>'empleado2',
            'area_id'=>'RECURSOS MATERIALES',
            'password'=>Hash::make('area2'),

        ]);

        $useradmin=User::create([

            'name'=>'area3',
            'email'=>'area3@gmail.com',
            'puesto'=>'empleado3',
            'area_id'=>'VINCULACION',
            'password'=>Hash::make('area3'),

        ]);

        $useradmin=User::create([

            'name'=>'area4',
            'email'=>'area4@gmail.com',
            'puesto'=>'empleado4',
            'area_id'=>'AREA4',
            'password'=>Hash::make('area4'),

        ]);


    }
}
