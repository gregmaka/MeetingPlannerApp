<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meeting', function(Blueprint $table)
		{
            $table->increments('id');
            $table->smallInteger('meeting_type');
            $table->text('message');
            $table->smallInteger('status');
            $table->timestamps();
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meeting');
	}

}
