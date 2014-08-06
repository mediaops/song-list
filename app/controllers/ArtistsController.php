<?php

class ArtistsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Artists Controller
	|--------------------------------------------------------------------------
	|	|
	*/
	
	public function getIndex( )
	{
		return $this->getKoArtists( );
	}
	
	public function getKo( )
	{
		return View::make( 'koartists.index' )
			->with( 'title', 'Artist Song List' )
			->with( 'artists', Artist::orderBy( 'name' )->get( ) );
	}
	
	public function getBB( )
	{
		return View::make( 'bbartists.index' )
			->with( 'title', 'Artist Song List' )
			->with( 'artists', Artist::orderBy( 'name' )->get( ) );
	}

	public function getSongs( $artistId ){
		
		return Song::where( 'artist_id', '=', $artistId )
			->orderBy( 'title' )
			->get( )
			->toJson( );
	}
}
