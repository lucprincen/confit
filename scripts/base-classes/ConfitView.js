
var ConfitBaseView = Backbone.View.extend({

	tagName: 'article',
	data: {},
	template: 'main',

	initialize: function(){
		
		var self = this;

		self.data = { title: 'wop' };
		self.put();

	},

	render: function(){
	
	},


	make: function(){

		var self = this;
		console.log( window );
		var template = Handlebars.compile( $( '#'+self.template ).html(), self.data );

		return template;

	},

	put: function(){

		var self = this;
		$('#yield').html( self.make() );

	}

});