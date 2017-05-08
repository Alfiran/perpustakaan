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
        // // insert batch
        
        // truncate table first
        DB::table('users')->truncate();
        // generate dummy data with 100 records using Faker
        factory('App\Domain\Entities\User', 100)->create();
        
        $users = [
        ['id' => 1, 'name' => 'Alfira nur', 'email' =>'alfira@gmail.com','password'=>bcrypt('qwerty'),'class' => 'XI RPL2', 'address' => 'Kepanjen', 'phone' => '098765432', 'level' => '1', 'created_at' => \Carbon\Carbon::now()],
        ];
        
        DB::table('users')->insert($users);
    }
}