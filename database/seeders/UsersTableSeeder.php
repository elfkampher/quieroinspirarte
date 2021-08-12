<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $writerRole = Role::create(['name' => 'Writer']);

        $admin = new User;
        $admin->name = 'Juan Carlos';
        $admin->email = 'jgutierrez@quieroinspirarte.com';
        $admin->password = bcrypt('AlphaJuliet2018?*');
        $admin->save();

        $admin->assignRole($adminRole);

        $writer = new User;
        $writer->name = 'Alejandra Solvg';
        $writer->email = 'avasquez@quieroinspirarte.com';
        $writer->password = bcrypt('AlphaJuliet2018?*');
        $writer->save();

        $writer->assignRole($adminRole);

    }
}
