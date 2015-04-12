require( ['api', 'base-classes/ConfitView'], function(){

//	var post = new wp.api.models.Post( { ID: 1 } );

//	console.log( post );	
//	console.log( 'api calls work!' );

	var AppRouter = Backbone.Router.extend({
	
		routes: {
		    '/': 'home',
		    'posts/:id/*slug': 'singlePost',
		    'page/:id/*slug': 'singlePage',
		    'page/:id/*slug/*slug': 'singlePage',
		    'p/:id': 'paged',
		    '*actions': 'home'
		},

		singlePost: function(post_id, slug) {
		//	new singlePostView().fetchPost(post_id, 'post');
		//	new CommentView();
		},

		singlePage: function(post_id) {
		//	new singlePostView().fetchPost(post_id, 'page');
		},

		home: function() {
			new ConfitBaseView();
		},

		paged: function(page_id) {
			new homeView().fetchPosts(page_id);
		}

	});

	var App = new AppRouter();
	Backbone.history.start();

});