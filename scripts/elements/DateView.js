define([
	'text!../../templates/elements/date.handlebars',
	
	'base-classes/ConfitView'

], function( TemplateFile, BaseView ){


	var DateView = BaseView.extend({

		template: TemplateFile,

		initialize: function( _d ){

			var self = this;

			if( _d === undefined || _d === null )
				_d = new Date();
			
			var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

			self.data = {

				day: _d.getDate(),
				month: monthNames[ _d.getMonth() ],
				fullDate: _d.getDate()+' '+ ( _d.getMonth() + 1 )+' '+ _d.getYear()
			}

		}

	})


	return DateView;
});
