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
        Schema::create('node_executions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('simulation_id')->constrained('simulations')->onDelete('cascade');
            $table->foreignId('flow_node_id')->constrained('flow_nodes')->onDelete('cascade');
            $table->string('node_label');
            $table->string('node_type');
            $table->string('status');
            $table->json('input_data')->nullable();
            $table->json('output_data')->nullable();
            $table->text('message')->nullable();
            $table->integer('duration_ms')->nullable();
            $table->timestamp('executed_at')->nullable();
            $table->text('error_message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('node_executions');
    }
};
