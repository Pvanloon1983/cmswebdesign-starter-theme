# Wordpress starter theme

This is a simple WordPress starter theme including:
* Bootstrap 5
* Tailwind CSS support
* Laravel-mix support
* Sass support
* 2 NPM run scripts to watch, build and minify Tailwind CSS, Sass and JavaScript files.

npm run watch-tailwind & npm run watch-mix

Both scripts can be run at the same time. 

Tailwind CSS will be minified from ./tailwind.css into ./style.css.
Sass and JavaScript files will be minified from the ./src/scss and ./src/js into ./dist/css and ./dist/js.

Via functions.php you can choose whether you want to enable bootstrap 5 of tailwind css.