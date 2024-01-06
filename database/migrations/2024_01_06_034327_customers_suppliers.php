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
        Schema::create('customers_suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customers_id')->unsigned()->nullable();
            $table->foreign('customers_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('customers');
            $table->unsignedBigInteger('suppliers_id')->unsigned()->nullable();
            $table->foreign('suppliers_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('suppliers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_suppliers');
    }
};
