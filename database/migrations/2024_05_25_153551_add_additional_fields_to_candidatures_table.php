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
        Schema::table('candidatures', function (Blueprint $table) {
            $table->string('cand_school_lvl')->nullable();
            $table->integer('cand_work_exp')->nullable();
            $table->text('cand_motiv_message')->nullable();            
            $table->text('cand_notes_admin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('candidatures', function (Blueprint $table) {
            $table->dropColumn('cand_school_lvl');
            $table->dropColumn('cand_work_exp');
            $table->dropColumn('cand_motiv_message');
            $table->dropColumn('cand_notes_admin');
        });
    }
};
