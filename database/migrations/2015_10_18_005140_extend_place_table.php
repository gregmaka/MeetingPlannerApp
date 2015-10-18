<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtendPlaceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('place', function($table)
        {
            $table->string('slug');
            $table->string('website');
            $table->string('full_address');
            $table->string('vicinity');
            $table->text('notes');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function($table)
        {
            $table->dropColumn(['slug', 'website', 'full_address', 'vicinity', 'notes']);
        });
	}

}
