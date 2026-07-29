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
        Schema::create('flow_connections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flow_id')->constrained('flows')->onDelete('cascade');
            $table->foreignId('source_node_id')->constrained('flow_nodes')->onDelete('cascade');
            $table->foreignId('target_node_id')->constrained('flow_nodes')->onDelete('cascade');
            $table->string('branch_label')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flow_connections');
    }
};
