'use strict';

// REQUIREMENTS - INSTALL WITH COMMAND 'npm i [packages name] --save-dev'
var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    sourcemaps  = require('gulp-sourcemaps'),
    cleanCSS    = require('gulp-clean-css'),
    prefixer    = require('gulp-autoprefixer'),
    uglify      = require('gulp-uglify'),
    concat      = require('gulp-concat'),
    plumber     = require('gulp-plumber'),
    notify      = require('gulp-notify');

    sass.compiler = require('node-sass');

// ERROR-HANDLING
var error = function(err) {
  notify.onError({
    title:    "Gulp",
    subtitle: "Gulp-failure!",
    sound:    "Sosumi"
  })(err);
  this.emit('end');
};

// SASS-PREPROCESSING, AUTOPREFIXING, SOURCEMAPPING AND MINIFYING FOR PRODUCTION
gulp.task('styles', function() {
  return gulp.src('sass/**/*.scss')
    .pipe(plumber({errorHandler: error}))
    .pipe(sourcemaps.init())
    .pipe(sass()) // SASS-PREPROCESSING
    .pipe(prefixer()) // AUTOPREFIXING
    .pipe(cleanCSS()) // MINIFYING
    .pipe(concat('style.min.css'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./'));
})

// MINIFYING JS TO PRODUCTION
gulp.task('scripts', function() {
  return gulp.src('js/**/*.js')
    .pipe(plumber({errorHandler: error}))
    .pipe(sourcemaps.init())
    .pipe(uglify()) // MINIFYING
    .pipe(concat('script.min.js'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./'));
});

gulp.watch('sass/**/*.scss', gulp.series('styles'));
gulp.watch('js/**/*.js', gulp.series('scripts'));

gulp.task('default', gulp.series('styles', 'scripts')); 
