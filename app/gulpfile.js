var gulp = require('gulp'),
    del = require('del'),
    sass = require('gulp-sass');


gulp.task('compile-sass',['clean-css'],function () {
    return gulp
        .src('./resources/assets/sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./public/css/'));
});

gulp.task('clean-css',function () {
    del('./public/css/**/*.css');
});