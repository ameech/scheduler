<?php

use Illuminate\Database\Migrations\Migration;

class CreateRemindersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('reminders', function($table)
        {
            // Columns
            $table->increments('id');
            $table->integer('user_id');
            $table->string('description');
            $table->string('date');
            $table->string('time');
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
        Schema::drop('reminders');
	}
}
