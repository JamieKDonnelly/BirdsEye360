var gulp = require('gulp');

var concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    minifyCSS = require('gulp-minify-css'),
    rename = require('gulp-rename');

//////
// JSHint
gulp.task('jslint', function () {
    gulp.src('scripts/5-siteFunctions.js') // path to your files
    .pipe(jshint())
    .pipe(jshint.reporter()); // Dump results
});

//////
// scripts
gulp.task('scripts', function() {
    gulp.src(['scripts/*.js'])
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(rename('app.min.js'))
        .pipe(gulp.dest('dist'))
});

//////
// styles
gulp.task('styles', function () {
    gulp.src('scss/app.scss')
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(rename('app.min.css'))
        .pipe(gulp.dest('dist'))
});

//////
// Watch
gulp.task('watch', function() {
    gulp.watch('scripts/*.js', ['jslint', 'scripts']);
    gulp.watch('scss/*.scss', ['styles']);
});

// Default Task
gulp.task('default', ['jslint', 'scripts', 'styles', 'watch']);
