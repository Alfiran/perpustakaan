<?php


use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        // truncate record
        DB::table('books')->truncate();

        $books = [
            ['id' => 1, 'kode_buku' => '001', 'judul' => 'perahu kertas', 'pengarang' => 'dewi lestari', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kode_buku' => '002', 'judul' => 'hujan', 'pengarang' => 'tere liye', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kode_buku' => '003', 'judul' => 'negeri 5 menara', 'pengarang' => 'dewi lestari', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kode_buku' => '004', 'judul' => 'pukat', 'pengarang' => 'tere liye', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kode_buku' => '005', 'judul' => 'rindu', 'pengarang' => 'tere liye', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'kode_buku' => '006', 'judul' => 'hafalan sholat delisa', 'pengarang' => 'tere liye', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('books')->insert($books);
    }
}
