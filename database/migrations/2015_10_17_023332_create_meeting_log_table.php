<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meeting_log', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('meeting_id')->unsigned();
            $table->integer('action');
            $table->integer('actor_id')->unsigned();
            $table->integer('item_id');
            $table->integer('extra_id');
			$table->timestamps();

            $table->foreign('meeting_id')->references('id')->on('meeting')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('actor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meeting_log');
	}

}
