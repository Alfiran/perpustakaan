<?php


use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // truncate record
        // DB::table('users')->truncate();
        
        // $users = [
        //     ['id' => 1, 'name' => 'Alfira nur', 'class' => 'XI RPL2', 'address' => 'Kepanjen', 'phone' => '098765432', 'level' => '1', 'created_at' => \Carbon\Carbon::now()],
        //     ['id' => 2, 'name' => 'Alfira nur', 'class' => 'XI RPL2', 'address' => 'Kepanjen', 'phone' => '098765432', 'level' => '1', 'created_at' => \Carbon\Carbon::now()],
        //     ['id' => 3, 'name' => 'Alfira nur', 'class' => 'XI RPL2', 'address' => 'Kepanjen', 'phone' => '098765432', 'level' => '1', 'created_at' => \Carbon\Carbon::now()],
        //     ['id' => 4, 'name' => 'Alfira nur', 'class' => 'XI RPL2', 'address' => 'Kepanjen', 'phone' => '098765432', 'level' => '1', 'created_at' => \Carbon\Carbon::now()],
        //     ['id' => 5, 'name' => 'Alfira nur', 'class' => 'XI RPL2', 'address' => 'Kepanjen', 'phone' => '098765432', 'level' => '1', 'created_at' => \Carbon\Carbon::now()],
        //     ['id' => 6, 'name' => 'Alfira nur', 'class' => 'XI RPL2', 'address' => 'Kepanjen', 'phone' => '098765432', 'level' => '1', 'created_at' => \Carbon\Carbon::now()],
        // ];
        
        // // insert batch
        // DB::table('users')->insert($users);
        // truncate table first
        DB::table('users')->truncate();
        // generate dummy data with 100 records using Faker
        factory('App\Domain\Entities\User', 100)->create();
    }
}