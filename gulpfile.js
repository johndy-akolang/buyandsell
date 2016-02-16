'use strict';

var gulp    = require('gulp');
var elixir  = require('laravel-elixir');

var chalk   = require('./task/chalk');
var config  = require('./task/config');

elixir(function(mix) {
  var cssApp = config.css.app;
  var cssVendor = config.css.vendor;
  var fontVendor = config.font;
  var jsApp = config.js.app;
  var jsVendor = config.js.vendor;

  if (config.env == "local") {
    mix
      .copy(jsVendor.files.dev, jsVendor.path)
      .copy(cssVendor.files.dev, cssVendor.path)
      .copy(fontVendor.files, fontVendor.path);
  } else if (config.env == "prod") {
    mix
      .scripts(jsVendor.files.prod, jsVendor.path + 'vendor.min.js')
      .scripts(jsApp.files, jsApp.path + 'app.min.js')
      .styles(cssVendor.files.prod, cssVendor.path + 'vendor.min.css')
      .styles(cssApp.files, cssApp.path + 'app.min.css')
      .copy(fontVendor.files, fontVendor.path);
  } else {
    chalk.error('Invalid environment.');
  }

});

/*var gulp        = require('gulp');
var copy        = require('gulp-copy');
var uglify      = require('gulp-uglify');

var baseUrl = 'node_modules/';
var js = {};
js.vendor = {};
js.vendor.outputPath = 'public/js/vendor';
js.vendor.files = [
    baseUrl + 'bootstrap/dist/js/bootstrap.min.js',         // => 0
    baseUrl + 'dropzone/dist/dropzone.js',                  // => 1
    baseUrl + 'dropzone/dist/min/dropzone.min.js',          // => 2
    baseUrl + 'jquery/dist/jquery.min.js',                  // => 3
    baseUrl + 'gulp-modernizr/build/modernizr-custom.js',   // => 4
];
var css = {};
css.vendor = {};
css.vendor.outputPath = 'public/css/vendor';
css.vendor.files = [
    baseUrl + 'bootstrap/dist/css/bootstrap.min.css',
    baseUrl + 'dropzone/dist/dropzone.css',
    baseUrl + 'dropzone/dist/min/dropzone.min.css',
    baseUrl + 'font-awesome/css/font-awesome.min.css',
    baseUrl + 'font-awesome/fonts/fontawesome-webfont.eot',
    baseUrl + 'font-awesome/fonts/fontawesome-webfont.svg',
    baseUrl + 'font-awesome/fonts/fontawesome-webfont.ttf',
    baseUrl + 'font-awesome/fonts/fontawesome-webfont.woff',
    baseUrl + 'font-awesome/fonts/fontawesome-webfont.woff2',
    baseUrl + 'font-awesome/fonts/fontawesome.otf'
];

// copy js vendor files
gulp.task('copy-js-vendor', function() {
    gulp.src(js.vendor.files)
        .pipe(copy(js.vendor.outputPath, {
                'prefix': 4
            }
        ));
});

// copy css vendor files
gulp.task('copy-css-vendor', function () {
    gulp.src(css.vendor.files)
        .pipe(copy(css.vendor.outputPath, {
                'prefix': 4
            }
        ));
});

// run 'copy-js-vendor' and 'copy-css-vendor' tasks
gulp.task('copy-vendor', ['copy-js-vendor', 'copy-css-vendor']);

// uglify modernizr
gulp.task('uglify-modernizr', function() {
    gulp.src(baseUrl + 'gulp-modernizr/build/modernizr-custom.js')
        .pipe(uglify())
        .pipe(gulp.dest(baseUrl + 'gulp-modernizr/build'));
});*/
