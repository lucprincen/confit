require.config({
    baseUrl: Confit_Settings.scripts,
    paths: {
        jquery : 'vendors/jquery/dist/jquery',
        underscore : 'vendors/underscore/underscore',
        backbone : 'vendors/backbone/backbone',
        handlebars : 'vendors/handlebars/handlebars',
        api : Confit_Settings.api,
    },
    waitSeconds: 15
});

//setup the main file:
require( ['jquery', 'underscore', 'backbone', 'handlebars', 'main'] );