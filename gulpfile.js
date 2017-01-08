var gulp = require('gulp'),
    del = require('del'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');


gulp.task('sass', function () {
    del('./public/css/app.css').then(function () {
        return gulp
            .src('./resources/assets/sass/app.scss')
            .pipe(sass({outputStyle: 'compressed'}).on('error',sass.logError))
            .pipe(gulp.dest('./public/css/'));
    });
});

gulp.task('shop', function () {
    del('./public/css/shop.css').then(function () {
        return gulp
            .src('./resources/assets/sass/shop/shop.scss')
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

gulp.task('angular', function () {
    del('./build/js/**/*.js').then(function () {
        return gulp
            .src(['./resources/assets/js/angular.min.js','./resources/assets/js/angular-ui-router.min.js','./resources/assets/js/shop.js'])
            .pipe(concat('app.shop.js'))
            .pipe(rename('app.shop.min.js'))
            .pipe(uglify())
            .pipe(gulp.dest('./public/js/'));
    });
});