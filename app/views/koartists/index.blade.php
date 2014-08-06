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
	
	<div id="songList">
		<div class="list-group" data-bind="template: { name: 'songItem', foreach: songs }"></div>
	</div>
	<script type="text/html" id="songItem">
		<span class="list-group-item" data-bind="text: title"></span>
	</script>
@stop

@section('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="{{ asset( 'js/bootstrap.js' ) }}"></script>
	<script src="{{ asset( 'js/knockout-3.1.0.js' ) }}"></script>
	<script src="{{ asset( 'js/bootstrapHelper.js' ) }}"></script>
	<script src="{{ asset( 'js/artist.js' ) }}"></script>
	<script>
	<!--
	
		$( document ).ready( function( ) {
		
			var viewModel = { songs: ko.observableArray( [ { 'title': '' } ] ) };
			ko.applyBindings( viewModel );
		
			$( "#artistList a.list-group-item" ).popover({
				trigger: 'focus',
				html: true,
				container: "body",
				content: function() {
				
					BootstrapHelper.toggleItem( $( this ) );
					
					var artistId = $( this ).data( "id" );
					viewModel.songs( Artist.getSongs( artistId ) );
					
					return $( '#songList' ).html( );
				}
			});
		});
		
	// -->	
	</script>
@stop
	