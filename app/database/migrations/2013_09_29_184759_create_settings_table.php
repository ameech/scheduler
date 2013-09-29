<?php

use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('settings', function($table)
        {
            // Columns
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('value');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('settings');
	}
}