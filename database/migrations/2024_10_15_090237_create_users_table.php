<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 50)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('username', 50)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('password', 255)->collation('utf8mb4_general_ci')->nullable(false);
            $table->string('email', 255)->collation('utf8mb4_general_ci')->nullable(false)->unique();
            $table->string('phone', 20)->collation('utf8mb4_general_ci')->nullable(false);
            $table->integer('role')->collation('utf8mb4_general_ci')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
