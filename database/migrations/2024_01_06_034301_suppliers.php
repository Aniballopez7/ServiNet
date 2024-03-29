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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('subname');
            $table->integer('dni');
            $table->integer('phone')->nullable();
            $table->string('img_ref')->nullable();
            $table->unsignedBigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('users');
            $table->unsignedBigInteger('verifications_id')->unsigned()->nullable();
            $table->foreign('verifications_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('verifications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
