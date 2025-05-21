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
            $table->string('età');
            $table->string('genere');
            $table->string('stato civile');
            $table->string('taste');
            $table->string('giornali');
            $table->string('macchina');
            $table->string('film&musica');
            $table->string('city');
            $table->string('hobbies');
            $table->string('attitudini');
            $table->string('lavoro');
            $table->boolean('is_admin')->Nullable()->default(false);
            $table->boolean('is_revisor')->Nullable()->default(false);
            $table->boolean('is_writer')->Nullable()->default(false);        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['età','genere','stato civile','taste','giornali','macchina','film&musica','city','hobbies','attitudini','lavoro']);
        });
    }
};
