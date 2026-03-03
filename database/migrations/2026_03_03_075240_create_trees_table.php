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
        Schema::create('trees', function (Blueprint $table) {
            $table->id();                          // 1
            $table->string('tree_code')->unique(); // 2
            $table->string('name');                // 3
            $table->string('scientific_name');     // 4
            $table->string('type');                // 5
            $table->integer('height');             // 6 (cm)
            $table->integer('age');                // 7 (years)
            $table->decimal('price', 10, 2);       // 8
            $table->string('status');              // 9
            $table->date('plant_date');            // 10
            $table->string('location');            // 11
            $table->string('soil_type');           // 12
            $table->boolean('is_fruit_tree');      // 13
            $table->text('description')->nullable(); // 14
            $table->timestamps();                  // 15 (created_at, updated_at)
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trees');
    }
};
