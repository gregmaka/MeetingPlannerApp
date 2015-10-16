<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->smallInteger('place_type');
            $table->smallInteger('status');
            $table->string('google_place_id');
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
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
		Schema::drop('place');
	}

}
