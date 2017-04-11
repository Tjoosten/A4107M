<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class GroupTableSeeder
 */
class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // ['selector' => '', 'title' => ''],
            ['selector' => 'kapoenen', 'title' => 'De Kapoenen'],
            ['selector' => 'welpen', 'title' => 'De Welpen'],
            ['selector' => 'jong-givers', 'title' => 'De Jong-Givers'],
            ['selector' => 'givers', 'title' => 'De Givers'],
            ['selector' => 'jins', 'title' => 'De Jins'],
            ['selector' => 'leiding', 'title' => 'De Leiding'],
        ];

        $table = DB::table('groups');
        $table->delete();
        $table->insert($data);
    }
}
