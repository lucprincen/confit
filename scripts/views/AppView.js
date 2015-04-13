define([
	'text!../../templates/layouts/main.handlebars',

	'base-classes/ConfitView',
	'elements/DateView'

], function( TemplateFile, BaseView, DateView ){


	var HomeView = BaseView.extend({

		template: TemplateFile,

		initialize: function(){

			var self = this;
			var _date = new DateView().make();

			self.data = {
				title: "Hello World!",
				date: _date
			}

		}


	});

	return HomeView

});