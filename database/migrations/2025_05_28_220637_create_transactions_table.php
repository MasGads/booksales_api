<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // relasi ke tabel users
            $table->foreignId('book_id')->constrained()->onDelete('cascade'); // relasi ke tabel books
            $table->integer('quantity');
            $table->date('transaction_date');
            $table->timestamps();
        });
    }
};
