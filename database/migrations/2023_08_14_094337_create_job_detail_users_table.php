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
        Schema::create('job_detail_users', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('job_detail_code');
            $table->foreign('job_detail_code')->references('code')->on('job_details')->cascadeOnDelete();
            $table->string('user_code');
            $table->foreign('user_code')->references('code')->on('users')->cascadeOnDelete();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
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
        Schema::dropIfExists('job_detail_users');
    }
};
