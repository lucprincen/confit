define([
	'views/HomeView',
	//'views/PostView',
	//'views/PostsView',
	//'views/PageView',
	//'models/PostModel',
	//'models/PageModel',
	//'collections/PostCollection',

], function( HomeView, PostView, PostsView, PageView, PostModel, PageModel, PostCollection ){



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
			var homeView = new HomeView();
			homeView.render();
		},

		paged: function(page_id) {
			new homeView().fetchPosts(page_id);
		}

	});

	var App = new AppRouter();
	Backbone.history.start();

	return App;

});