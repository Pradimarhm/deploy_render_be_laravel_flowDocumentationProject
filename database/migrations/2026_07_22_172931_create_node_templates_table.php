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
        Schema::create('node_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('node_type');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
            $table->json('default_input_params')->nullable();
            $table->text('default_validation')->nullable();
            $table->text('default_process_logic')->nullable();
            $table->json('default_output_template')->nullable();
            $table->integer('used_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('node_templates');
    }
};
