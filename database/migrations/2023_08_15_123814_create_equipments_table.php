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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->decimal('purchase_price', 50, 2)->default(0);
            $table->date('purchase_date')->nullable();
            $table->string('manufacture')->nullable();
            $table->string('equipment_type_code')->nullable();
            $table->foreign('equipment_type_code')->references('code')->on('equipment_types')->onDelete('set null');
            $table->string('department_code')->nullable();
            $table->foreign('department_code')->references('code')->on('departments')->onDelete('set null');
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
        Schema::dropIfExists('equipments');
    }
};
