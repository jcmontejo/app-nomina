<?php

namespace Database\Seeders;

use App\Models\Security\Catalogs\CatTypeUser;
use Illuminate\Database\Seeder;

class InsertTypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = CatTypeUser::updateOrCreate(
            ['strTypeUser' => 'Administrador General']
        );

        $insert = CatTypeUser::updateOrCreate(
            ['strTypeUser' => 'Encargado Centro']
        );
    }
}
