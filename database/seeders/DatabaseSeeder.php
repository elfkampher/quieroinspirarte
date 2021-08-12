<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        
        $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        Schema::enableForeignKeyConstraints();
        
    }
}
