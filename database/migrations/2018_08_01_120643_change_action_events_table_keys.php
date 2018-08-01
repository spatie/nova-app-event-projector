<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeActionEventsTableKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('action_events', function(Blueprint $table) {
            $table->string('user_id')->change();
            $table->string('actionable_id')->change();
            $table->string('target_id')->change();
            $table->string('model_id')->change();
        });
    }
}
