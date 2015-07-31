var gulp        = require('gulp');
var copy        = require('gulp-copy');
var modernizr   = require('gulp-modernizr');
var uglify      = require('gulp-uglify');

var baseUrl = 'node_modules/';
var js = {};
js.vendor = {};
js.vendor.outputPath = 'public/js/vendor';
js.vendor.files = [
    baseUrl + 'bootstrap/dist/js/bootstrap.min.js',         // => 0
    baseUrl + 'dropzone/dist/min/dropzone.min.js',          // => 1
    baseUrl + 'jquery/dist/jquery.min.js',                  // => 2
    baseUrl + 'gulp-modernizr/build/modernizr-custom.js',   // => 3
];
var css = {};
css.vendor = {};
css.vendor.outputPath = 'public/css/vendor';
css.vendor.files = [
    baseUrl + 'bootstrap/dist/css/bootstrap.min.css',
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
});