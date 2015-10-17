<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participant', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('meeting_id')->unsigned();
            $table->integer('participant_id')->unsigned();
            $table->integer('invited_by')->unsigned();
            $table->integer('status')->default(0);
			$table->timestamps();

            $table->foreign('meeting_id')->references('id')->on('meeting')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('participant_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('invited_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participant');
	}

}
