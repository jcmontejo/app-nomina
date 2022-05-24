<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InsertUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert = User::updateOrCreate(
            ['name' => 'Juan Carlos'],
            [
                'email' => 'juancarlos.montejo@mex.com',
                'password' => Hash::make('secret')
            ]
        );
    }
}
