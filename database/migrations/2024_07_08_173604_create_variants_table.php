<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('model_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('features')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('variants');
    }
};