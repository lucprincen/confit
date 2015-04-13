define([
	'base-classes/ConfitView',

	'text!../../templates/layouts/main.html',
], function( BaseView, TemplateFile ){


	var AppView = BaseView.extend({

		tagName: 'div',
		template: TemplateFile,

		initialize: function(){

			var self = this;

			self.data = {
				title: "Jaap"
			}

		}


	});

	return AppView

});