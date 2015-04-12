require( ['api'], function(){

	var post = new wp.api.models.Post( { ID: 1 } );

	console.log( post );	
	console.log( 'api calls work!' );

});