<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id'); // primary key + auto increment
            $table->integer('book_id', false);
            $table->integer('user_id', false);
            $table->string('petugas');
            $table->string('status');
            $table->string('kode');
            $table->date('expired_at');
            $table->timestamps(); // created_at + updated_at
            $table->softDeletes(); // deleted_at
             $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}

