<?php


use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // truncate table first
        DB::table('contacts')->truncate();

        // generate dummy data with 100 records using Faker
        factory('App\Domain\Entities\Contact', 100)->create();
    }
}
