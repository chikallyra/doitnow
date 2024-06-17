<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_missions', function (Blueprint $table) {
            $table->timestamp('mission_complete_at')->nullable()->after('joined_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_missions', function (Blueprint $table) {
            $table->dropColumn('mission_complete_at');
        });
    }
};
