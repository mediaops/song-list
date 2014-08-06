<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function($table){
			$table->increments('id');
			$table->integer('artist_id')->unsigned();
			$table->string('title');
			$table->timestamps();
		});
		
		Schema::table('songs', function($table){
			$table->foreign('artist_id')
				->references('id')
				->on('artists');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{		
		Schema::table('songs', function($table){
			$table->dropForeign('songs_artist_id_foreign');
		});
		
		Schema::drop('songs');
	}

}
