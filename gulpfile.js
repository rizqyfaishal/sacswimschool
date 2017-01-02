var gulp = require('gulp'),
    del = require('del'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');


gulp.task('sass', function () {
    del('./public/css/app.css').then(function () {
        return gulp
            .src('./resources/assets/sass/**/*.scss')
            .pipe(sass({outputStyle: 'compressed'}).on('error',sass.logError))
            .pipe(gulp.dest('./public/css/'));
    });
});

gulp.task('js',function () {
    del('./build/js/**/*.js').then(function () {
        return gulp
            .src(['./resources/assets/js/module.js','./resources/assets/js/app.js'])
            .pipe(concat('app.js'))
            .pipe(rename('app.min.js'))
            .pipe(uglify())
            .pipe(gulp.dest('./public/js/'));
    });
});