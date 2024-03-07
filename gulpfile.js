var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var header = require('gulp-header');
var replace = require('gulp-replace');
var notifier = require('node-notifier');
var plumber = require('gulp-plumber');
var gnotify = require('gulp-notify');

var paths = {
  'scss': 'css/scss/',
  'css': 'css/'
}

gulp.task('scss', function(){
  var processors = [
    cssnext(),
  ];
  return gulp.src(paths.scss + '**/*.scss')
    .pipe(plumber({
      errorHandler: gnotify.onError("Error: <%= error.message %>")
    }))
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(replace(/@charset "UTF-8";/g, ''))
    .pipe(header('@charset "UTF-8";\n\n'))
    .pipe(postcss(processors))
    .pipe(gulp.dest(paths.css));
});

gulp.task('end',['scss'], function(){
  notifier.notify('完了');
});

gulp.task('watch',function(){
  gulp.watch(paths.scss + '**/*.scss', ['end']);
});

gulp.task('default', ['scss']);
