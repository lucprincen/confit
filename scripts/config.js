require.config({
    baseUrl: "{YOUR WP-CONTENT URL HERE}",	// point this to your wp-content folder
    paths: {
        "/plugins/json-rest-api/wp-api.js": "wp-api",
        "/themes/confiture/base-classes": "base",
        "/themes/confiture/models": "models",
        "/themes/confiture/collections": "collections",
        "/themes/confiture/views": "views",
    },
    waitSeconds: 15
});