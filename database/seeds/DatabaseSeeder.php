<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedTranslationTable::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(LeaseStatusSeeder::class);
        $this->call(LeaseTranslationSeeder::class);
    }
}
