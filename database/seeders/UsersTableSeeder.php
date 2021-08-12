<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = 'Alejandra Vasquez';
        $user->email = 'avasquez@quieroinspirarte.com';
        $user->password = bcrypt('AlphaJuliet2018?*');
        $user->save();

        $user = new User;
        $user->name = 'Juan Gutierrez';
        $user->email = 'jgutierrez@quieroinspirarte.com';
        $user->password = bcrypt('AlphaJuliet2018?*');
        $user->save();

    }
}
