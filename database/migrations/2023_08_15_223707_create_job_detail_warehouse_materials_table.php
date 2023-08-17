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
        Schema::create('job_detail_warehouse_materials', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('job_detail_code');
            $table->foreign('job_detail_code')->references('code')->on('job_details');
            $table->string('warehouse_material_code');
            $table->foreign('warehouse_material_code')->references('code')->on('warehouse_materials');
            $table->string('handover_person_code');
            $table->foreign('handover_person_code')->references('code')->on('users');
            $table->string('receiver_code');
            $table->foreign('receiver_code')->references('code')->on('users');
            $table->decimal('total', 50, 2)->default(0);
            $table->string('unit')->nullable();
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
        Schema::dropIfExists('job_detail_warehouse_materials');
    }
};
