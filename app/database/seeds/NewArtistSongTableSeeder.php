<?php

class NewArtistSongTableSeeder extends Seeder{
	
	public function run()
	{
		DB::table('artists')->insert(array(
			'name' => 'Deorro',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('artists')->insert(array(
			'name' => 'Chuckie',
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
	
		DB::table('songs')->insert(array(
			'title' => 'Freak',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Hype',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Super Hot Fire',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Dechorro',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Get Down',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Crank It Up',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Rambo',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Bootie In Your Face',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Lose It',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Yee',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Get Down',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Unspoiled Perfection',
			'artist_id' => 2,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Guess What',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Aftershock (Can\'t Fight The Feeling)',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'What Love Is This',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Dirty Funkin\' Beats',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Together',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'What Happens In Vegas',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Who Is Ready To Jump',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Skydive',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Make Some Noise',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Electro Dude',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Move It 2 The Drum',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Breaking Up',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Toys Are Nuts',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => ' 1234',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'Let The Bass Kick Part 2',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'We Can\'t Hear Anybody',
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
		
		DB::table('songs')->insert(array(
			'title' => 'The Partycrasher' ,
			'artist_id' => 3,
			'created_at' => date('Y-m-d H:m:s'),
			'updated_at' => date('Y-m-d H:m:s')
		));
	}
}