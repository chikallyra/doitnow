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
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->morphs('notifiable');
            $table->text('data');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            $table->timestamp('expires_at')->nullable();

            // Menambahkan kolom foreign key
            $table->unsignedBigInteger('mission_id')->nullable();
            $table->unsignedBigInteger('user_mission_id')->nullable();
            $table->unsignedBigInteger('user_reward_id')->nullable();

            // Menambahkan foreign key constraint
            $table->foreign('mission_id')->references('id')->on('missions')->onDelete('cascade');
            $table->foreign('user_mission_id')->references('id')->on('user_missions')->onDelete('cascade');
            $table->foreign('user_reward_id')->references('id')->on('user_rewards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['mission_id']);
            $table->dropForeign(['user_mission_id']);
            $table->dropForeign(['user_reward_id']);
        });

        Schema::dropIfExists('notifications');
        
    }
};
