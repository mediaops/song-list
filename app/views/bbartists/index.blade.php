@extends('layouts.default')

@section('styles')

	<!-- Bootstrap -->
	<link href="{{ asset( 'css/bootstrap.min.css' ) }}" rel="stylesheet">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>	
		#songList{ display:none; }
	</style>
	
@stop

@section('content')
	<div id="artistList" class="row">
		<div class="col-sm-4">
			<div class="list-group">
				@foreach( $artists as $artist )
				<a href="#" class="list-group-item" data-id="{{ $artist->id }}" data-toggle="popover" title="{{ $artist->name }}">{{ $artist->name }}</a>
				@endforeach
			</div>
		</div>
	</div>
	
@stop

@section('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://documentcloud.github.com/underscore/underscore-min.js"></script> 
	<script src="http://documentcloud.github.com/backbone/backbone-min.js"></script> 
	<script src="{{ asset( 'js/bootstrap.min.js' ) }}"></script>
	<script src="{{ asset( 'js/bootstrapHelper.js' ) }}"></script>
	<script src="{{ asset( 'js/bbview/bbview.js' ) }}"></script>
	<script src="{{ asset( 'js/bbview/songList.js' ) }}"></script>
	<script src="{{ asset( 'js/artist.js' ) }}"></script>
	<script>
	<!--
		var Model = { };
		Model.Song = Backbone.Model.extend({
			defaults: { title: '' }
		});
		
		Model.Songs = Backbone.Collection.extend( { model: Model.Song } );
		
		$( document ).ready( function( ) {
		
			var songs = new Model.Songs( [ { title: "" } ] );
			var songList = new BBView.SongList( { collection: songs } );
			songList.render( );
			
			// initialize bootstrap pop-over
			$( "#artistList a.list-group-item" ).popover({
				trigger: 'focus',
				html: true,
				container: "body",
				content: function( ) { 
					
					BootstrapHelper.toggleItem( $( this ) );
					
					var artistId = $( this ).data( "id" );
					songs.reset( Artist.getSongs( artistId ) );
					
					return $( '#songList' ).html( );
				}
			});
			
		});
		
	// -->	
	</script>
@stop
	