/*
 * artist namespace
 */
var Artist = { };
Artist.songs = [ [ ] ];

/**
 * Retrieves an artists song list.
 * @param { integer } artistId
 * @return { array }
 */
Artist.getSongs = function( artistId ) {
	
	// if artist songs are cached return the song list.
	if ( this.songs[ artistId ] != undefined ) {
		return this.songs[ artistId ];
	}
	
	var songs = [ ];
	
	if ( artistId ) {
		
		// make AJAX call to get new song titles
		$.ajax({
			async: false,
			dataType: "json",
			url: "/artists/songs/" + artistId, 
			success: function( data ) { songs = data; }
		});
	}
	
	// cache the artists songs
	this.songs[ artistId ] = songs;
	
	return songs;
}
