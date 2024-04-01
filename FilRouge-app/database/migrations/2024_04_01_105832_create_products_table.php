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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->time('time');
            $table->decimal('price');
            $table->integer('product_nbr');
            $table->text('description');
            $table->enum('softdelete', ['sold_out', 'available']);
            $table->string('image');
            $table->unsignedBigInteger('category');

            $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
