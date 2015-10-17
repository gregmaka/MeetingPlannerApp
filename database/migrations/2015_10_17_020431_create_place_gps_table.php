<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceGpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('place_gps', function(Blueprint $table)
		{
            $table->engine = 'MyISAM';

			$table->increments('id');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->integer('place_id')->unsigned();
            $table->foreign('place_id')->references('id')->on('place');
		});

        /*Espatial Column*/
        DB::statement('ALTER TABLE place_gps ADD gps POINT NOT NULL' );
        /*Espatial index (MYISAM only)*/
        DB::statement( 'ALTER TABLE place_gps ADD SPATIAL INDEX index_point(gps)' );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('place_gps');
	}

}
