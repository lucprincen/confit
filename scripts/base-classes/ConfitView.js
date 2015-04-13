define([
	'jquery',
	'underscore',
	'backbone',
	'handlebars',	
], function( $, _, Backbone, Handlebars ){



	var ConfitBaseView = Backbone.View.extend({
	
		tagName: 'article',
		data: {},
		template: '',
	
		initialize: function(){
			
			var self = this;
			self.data = { title: 'wop' };
			
		},
	
		render: function(){
		
			var self = this;
			self.put();

		},
	
	
		make: function(){
	
			var self = this;
			var view = Handlebars.compile( self.template );

			return view( self.data );

		},
	
		put: function(){
	
			var self = this;
			$('#yield').html( self.make() );
	
		}
	
	});


	return ConfitBaseView;
});