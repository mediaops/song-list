
/*
 * Backbone View that will render a list of songs for an artist.
 * @param { collection of songs } options
 */
BBView.SongList = Backbone.View.extend({
	el: 'body',
	collection: null,
	template: _.template( "<div id='songList'><div class='list-group'><% songs.each( function( song ) { %><%= itemTemplate( song.attributes ) %><% }) %></div></div>" ),
	itemTemplate: _.template( "<span class='list-group-item'><%= title %></span>" ),
	
	initialize:  function( options ) {
		//this.$el = $( '#songList .list-group' );
		this.collection = options.collection;
					
		// bind render
		_.bindAll( this, 'render' );
	 
		// bind this view to the add and remove events of the collection!
		this.collection.bind( 'reset', this.render );
	},

	render: function( ) {
		
		var html = this.template({
			songs: this.collection,
			itemTemplate: this.itemTemplate
		});
	
		$( this.el ).prepend( html );
		
		//var that = this;
		//this.$el.empty();
		
		//this.collection.forEach( function( item ) {
		//	that.$el.append( that.template( item.attributes ) );
		//});
					 
		return this;
	}
});