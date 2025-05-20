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
        Schema::table('users', function (Blueprint $table) {
            $table->string('age');
            $table->string('gender');
            $table->string('marital status');
            $table->string('taste');
            $table->string('newspapers');
            $table->string('car');
            $table->string('movie&music');
            $table->string('city');
            $table->string('hobbies');
            $table->string('attitudes');
            $table->string('job');
                  });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['age','gender','marital status','taste','newspapers','car','movie&music','city','hobbies','attitudes','job']);
        });
    }
};
