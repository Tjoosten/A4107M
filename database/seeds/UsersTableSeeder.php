<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Template: ['name' => '', 'email' => '', 'password' => ''],
            ['name' => 'Admin', 'email' => 'admin@example.tld', 'password' => bcrypt('root1995!')],
        ];

        $table = DB::table('users');
        $table->delete();
        $table->insert($data);
    }
}
