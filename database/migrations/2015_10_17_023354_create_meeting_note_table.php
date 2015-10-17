<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingNoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meeting_note', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('meeting_id')->unsigned();
            $table->integer('posted_by')->unsigned();
            $table->text('note');
            $table->smallInteger('status')->default(0);
			$table->timestamps();

            $table->foreign('meeting_id')->references('id')->on('meeting')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('posted_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meeting_note');
	}

}
