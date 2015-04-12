require.config({
    baseUrl: "localhost:8888/confiture/web/app",	// point this to your wp-content folder
    paths: {
        "/plugins/json-rest-api/wp-api.js": "wp-api",
        "/themes/confiture/base-classes": "base",
        "/themes/confiture/models": "models",
        "/themes/confiture/collections": "collections",
        "/themes/confiture/views": "views",
    },
    waitSeconds: 15
});