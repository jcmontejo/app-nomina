<?php

namespace Database\Seeders;

use App\Models\Security\Catalogs\CatBranch;
use Illuminate\Database\Seeder;

class InsertBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = CatBranch::updateOrCreate(
            ['strBranch' => 'San Cristobal']
        );

        $insert = CatBranch::updateOrCreate(
            ['strBranch' => 'San Fernando']
        );

        $insert = CatBranch::updateOrCreate(
            ['strBranch' => 'Tuxtla Gutiérrez']
        );

        $insert = CatBranch::updateOrCreate(
            ['strBranch' => 'Chiapa de Corzo']
        );
    }
}
