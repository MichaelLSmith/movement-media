var gulp = require('gulp'),
    gutil = require('gulp-util'),
//  webserver = require('gulp-webserver'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    precss = require('precss'),
//  cssnano = require('cssnano'),
    animation = require('postcss-animation'),
    browserSync = require('browser-sync').create(),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify'),

    source = 'process/css/', //source css files
    dest = '.'; //build file
    jsFiles = 'js/custom/**/*.js'
    jsDest = 'js';

gulp.task('scripts', function(){
    return gulp.src(jsFiles)
        .pipe(concat('custom_script.js'))
        .pipe(gulp.dest(jsDest));
})

gulp.task('css', function() {
  gulp.src(source + 'style.css')
  .pipe(postcss([
    precss(),
    animation(),
    autoprefixer(),
//    cssnano()
  ]))
  .on('error', gutil.log)
  .pipe(gulp.dest(dest))
  .pipe(browserSync.reload({
      stream: true
  }))
});

gulp.task('browserSync', function(){
    browserSync.init({
        proxy: {
                target: "http://172.18.0.2/"
        }
    })
});

gulp.task('watch', function() {
  gulp.watch(source + '**/*.css', ['css']);
  gulp.watch(jsFiles, ['scripts']);
});

gulp.task('default', ['scripts', 'css', 'browserSync', 'watch']);
//'webserver', add after css
