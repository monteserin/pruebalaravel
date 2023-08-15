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
            $table->string('url', 255);
            $table->unsignedBiginteger('brand_id')->unsigned();
            $table->unsignedBiginteger('digitalAction_id')->unsigned();
            $table->foreign('brand_id')->references('id')
                ->on('brands')->onDelete('cascade');
            $table->foreign('digitalAction_id')->references('id')->on('digital_actions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_digital_action');
    }
};
