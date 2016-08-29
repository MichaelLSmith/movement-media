var gulp = require('gulp'),
    gutil = require('gulp-util'),
//  webserver = require('gulp-webserver'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    precss = require('precss'),
//  cssnano = require('cssnano'),
    animation = require('postcss-animation'),
    browserSync = require('browser-sync').create();

  source = 'process/css/', //source css files
  dest = '.'; //build file

//gulp.task('html', function() {
//  gulp.src(dest + '*.html');
//});

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
        // server: {
        //     baseDir: 'movementmedia'
        //},
        proxy: {
                target: "http://172.18.0.2/"
        }
    })
});

gulp.task('watch', function() {
  gulp.watch(source + '**/*.css', ['css']);
//  gulp.watch(dest + '**/*.html', ['html']);
});

//gulp.task('webserver', function() {
//  gulp.src(dest)
//    .pipe(webserver({
//      livereload: true,
//      open: true
//    }));
//});

gulp.task('default', ['css', 'browserSync', 'watch']);
//'webserver', add after css
