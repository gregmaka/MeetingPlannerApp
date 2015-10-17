<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingPlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meeting_place', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('meeting_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->integer('suggested_by')->unsigned();
            $table->smallInteger('status')->default(0);
			$table->timestamps();

            $table->foreign('meeting_id')->references('id')->on('meeting')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('place_id')->references('id')->on('place')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('suggested_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meeting_place');
	}

}
