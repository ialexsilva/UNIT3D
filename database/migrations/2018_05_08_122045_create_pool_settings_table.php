<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoolSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poolSettings', function (Blueprint $table) {
            $table->increments('id');
            $table->float('pot')->default(100.00);
            $table->boolean('complete')->default(false);
            $table->timestamp('creation_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('completion_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poolSettings');
    }
}
