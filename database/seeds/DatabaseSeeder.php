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
        $this->call(ContactTableSeeder::class);
        $this->call(BookTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
