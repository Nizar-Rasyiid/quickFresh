<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('idOrder'); // Primary key custom
            $table->unsignedBigInteger('idDriver'); // Foreign key kolom
            $table->unsignedBigInteger('idPelanggan'); // Foreign key kolom
            $table->unsignedBigInteger('idToko')->nullable(); // Foreign key kolom
            $table->unsignedBigInteger('idProduk')->nullable(); // Foreign key kolom
            $table->date('date');
            $table->float('totalOrder');
            $table->enum('status', ['Pending', 'In Progress', 'Completed'])->default('Pending');
            $table->timestamps();
        
            // Foreign key definitions
            $table->foreign('idDriver')->references('idDriver')->on('drivers')->onDelete('cascade');
            $table->foreign('idPelanggan')->references('idPelanggan')->on('pelanggans')->onDelete('cascade');
            $table->foreign('idToko')->references('idToko')->on('tokos')->onDelete('set null');
            $table->foreign('idProduk')->references('idProduk')->on('products')->onDelete('set null'); 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
