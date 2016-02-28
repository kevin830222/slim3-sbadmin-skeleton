'use strict';

var gulp = require('gulp');
var bower = require('gulp-bower');
var sass = require('gulp-sass')
var composer = require('gulp-composer');
var minify = require('gulp-minify');

// bower
gulp.task('bower', function() {
    return bower('./public/lib/');
});

// sass
gulp.task('sass', function() {
    gulp.src('./app/sass/**/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(gulp.dest('./public/css'));
});
gulp.task('sass:watch', function() {
    gulp.watch('./app/sass/**/*.scss', ['sass']);
});

// composer
gulp.task('composer', function() {
    return composer({
        bin: 'composer'
    });
});

// minify
gulp.task('minify', function() {
    gulp.src('app/js/*.js')
        .pipe(minify())
        .pipe(gulp.dest('./public/js'))
});

gulp.task('watch', ['sass', 'sass:watch']);
gulp.task('default', ['bower', 'sass', 'composer', 'minify']);
