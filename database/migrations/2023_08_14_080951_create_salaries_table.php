<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->decimal('basic', 50, 2)->default(0);
            $table->decimal('seniority', 50, 2)->default(0);
            $table->decimal('allowance', 50, 2)->default(0);
            $table->decimal('bonus', 50, 2)->default(0);
            $table->decimal('fine', 50, 2)->default(0);
            $table->string('user_code');
            $table->foreign('user_code')->references('code')->on('users');
            $table->string('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
};
