requirejs.config({
    baseUrl: Confit_Settings.scripts,
    paths: {
        jquery : 'vendors/jquery/dist/jquery',
        underscore : 'vendors/underscore/underscore',
        backbone : 'vendors/backbone/backbone',
        handlebars : 'vendors/handlebars/handlebars',
        text : 'vendors/requirejs-text/text',
        api : Confit_Settings.api,
    }
});

//setup the main file:
require( ['jquery', 'underscore', 'backbone', 'handlebars', 'routes']);