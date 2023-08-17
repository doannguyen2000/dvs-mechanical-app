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
        Schema::create('warehouse_materials', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('warehouse_code');
            $table->foreign('warehouse_code')->references('code')->on('warehouses');
            $table->string('material_code');
            $table->foreign('material_code')->references('code')->on('materials');
            $table->string('supplier_code')->nullable();
            $table->foreign('supplier_code')->references('code')->on('suppliers');
            $table->integer('total')->default(0);
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
        Schema::dropIfExists('warehouse_materials');
    }
};
