<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ArtistTableSeeder');
		$this->call('SongTableSeeder');
	}

}

class ArtistTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('artists')->insert(array(
			'name' => 'Diplo',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
	}
}

class SongTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('songs')->insert(array(
			'title' => 'Crown',
			'artist_id' => 1,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Pick Your Poison',
			'artist_id' => 1,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Revolution',
			'artist_id' => 1,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Express Yourself',
			'artist_id' => 1,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Boy Oh Boy',
			'artist_id' => 1,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
	}
}