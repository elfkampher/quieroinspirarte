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
        $user->name = 'admin';
        $user->email = 'jgutierrez@stocksillustrated.com.mx';
        $user->password = bcrypt('AlphaJuliet2018?*');
        $user->save();

    }
}
