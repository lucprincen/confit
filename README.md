Confiture - Theme
===========================

Confiture is a modern WordPress theme running almost completely on javascript. It uses [Backbone](http://backbonejs.org/) for structure, [Handlebars](http://handlebarsjs.com/) for templating and uses the [JSON REST API](https://wordpress.org/plugins/json-rest-api/) which will be part of WP core very soon.


---

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| grunt >= 0.44   | `grunt -v`   | `npm install -g grunt` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |


## Features

* No more [WordPress template hierarchy](https://codex.wordpress.org/Template_Hierarchy), but a clear-cut Javascript powered template engine based on [Handlebars](http://handlebarsjs.com/).
* Seperate frontend from backend-development and keep things clean.
* [Bourbon Neat](http://neat.bourbon.io/) as our Sass-powered grid-system.
* [BrowserSync](http://www.browsersync.io/) for keeping browsers and devices synchronised while testing
* [GruntJS](http://gruntjs.com/) linting and buildscripts for Javascript & CSS


## Installing

Clone the git repo - `git clone https://github.com/chefduweb/confit.git` and then rename the directory to the name of your theme or website, or install with composer:

`composer require chefduweb/confit`

If you install using composer, Confiture will use [WPackagist](http://wpackagist.org/) to load in in the [JSON REST API](https://wordpress.org/plugins/json-rest-api/) as a dependency.

After you have all the files you need to let NPM and bower install the other packages:

1. navigate to the confit folder using your command line tool
2. type `npm install` to install the workflow packages.
3. type `bower install` to install all frontend dependencies.

After installing all dependencies you need to change one Url in `package.json`:
change the `appUrl` variable to the url of your WordPress site (BrowserSync uses this variable to create proxies).



### Development

The theme was created by [Luc Princen](http://www.chefduweb.nl), who continues to lead the development.

### Contributing to Confiture

All issues and pull requests should be filled on the [chefduweb/confit](https://github.com/chefduweb/confit/issues) repository.

### License

The Confiture Theme is open-source software licensed under [GPL-2+ license](http://www.gnu.org/licenses/gpl-2.0.html).