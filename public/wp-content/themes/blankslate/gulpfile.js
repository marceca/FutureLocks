const gulp = require('gulp');
const concat = require('gulp-concat');
const minifyCSS = require('gulp-minify-css');
const autoprefixer = require('gulp-autoprefixer');

exports.default = function() {
  return gulp.src('assets/css/**/*.css')
            .pipe(minifyCSS())
            .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
            .pipe(concat('style.css'))
            .pipe(gulp.dest('.'))
}