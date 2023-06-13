<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_dashboard', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subname');
            $table->enum('category', ['app', 'story', 'hacking', 'tool', 'socmed', 'selfdev']);
            $table->enum('sub_category', ['web', 'mobile', 'iot', 'cracker'])->nullable();
            $table->float('effort_level')->default('1.0');
            $table->integer('percentage')->default('0');
            $table->enum('status', ['rencana', 'proses', 'selesai']);
            $table->text('description');
            $table->date('started_at')->nullable();
            $table->date('finished_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_dashboard');
    }
};