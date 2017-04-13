<?php


use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
        // truncate record
        DB::table('transactions')->truncate();

        $transactions = [
            ['id' => 1, 'book_id' => '001', 'user_id' => '0001', 'petugas' => 'Alfira', 'status' => 'Belum', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'book_id' => '002', 'user_id' => '0002', 'petugas' => 'Alfira', 'status' => 'Belum', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'book_id' => '003', 'user_id' => '0003', 'petugas' => 'Alfira', 'status' => 'Sudah', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'book_id' => '004', 'user_id' => '0004', 'petugas' => 'Alfira', 'status' => 'Sudah', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'book_id' => '005', 'user_id' => '0005', 'petugas' => 'Alfira', 'status' => 'Hilang','expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'book_id' => '006', 'user_id' => '0006', 'petugas' => 'Alfira', 'status' => 'Hilang','expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('transactions')->insert($transactions);
    }
}
