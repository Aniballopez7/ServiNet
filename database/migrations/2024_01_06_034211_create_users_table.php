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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); //siempre que un campo quede vacio hay qie ponerle nullable
            $table->string('password');
            $table->unsignedBigInteger('rols_id')->unsigned()->nullable();
            $table->foreign('rols_id')
            ->cascadeOnDelete()
            ->cascadeOnUpdate()
            ->references('id')->on('rols');
            $table->rememberToken();
            $table->timestamps(); //cada vez que se introduzca un registro se guardara y si se modifica tambien
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
