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
        Schema::create('flow_nodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flow_id')->constrained('flows')->onDelete('cascade');
            $table->foreignId('template_id')->nullable()->constrained('node_templates')->onDelete('set null');
            $table->string('label');
            $table->string('node_type');
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
            $table->float('pos_x')->default(0);
            $table->float('pos_y')->default(0);
            $table->json('input_params')->nullable();
            $table->text('validation_rules')->nullable();
            $table->text('process_logic')->nullable();
            $table->json('output_template')->nullable();
            $table->text('condition_expression')->nullable();
            $table->integer('order_index')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flow_nodes');
    }
};
