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
        Schema::create('brands_digital_actions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBiginteger('brands_id')->unsigned();
            $table->unsignedBiginteger('digitalActions_id')->unsigned();
            $table->foreign('brands_id')->references('id')
                ->on('brands')->onDelete('cascade');
            $table->foreign('digitalActions_id')->references('id')->on('digitalActions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands_digital_actions');
    }
};
