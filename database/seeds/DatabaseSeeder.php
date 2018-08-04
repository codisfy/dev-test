<?php

use Illuminate\Database\Seeder;
use App\Survey;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         Survey::create(['name' => 'Survey International']);
         Survey::create(['name' => 'Survey Local']);
    }
}
