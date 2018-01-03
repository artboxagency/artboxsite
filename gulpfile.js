// Require Gulp as a dependencies
var gulp = require('gulp');
    watch = require('gulp-watch');
    concat = require('gulp-concat');

// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

// Variables de chemins
var source = './src'; // dossier de travail
var destination = './dist'; // dossier à livrer

gulp.task('sass', function () {
  return gulp.src(source + '/assets/css/sass/booter.scss')
    .pipe(plugins.sass())
    .pipe(concat('style.css')) // Concatenate to single file
    .pipe(gulp.dest(destination + '/assets/css/'));
});

// Minify css, from destination to destination
// compiled-css --> minifies-compiled-css
gulp.task('minify', function () {
  return gulp.src(destination + '/assets/css/*.css')
    .pipe(plugins.csso())
    .pipe(plugins.rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(destination + '/assets/css/'));
});


gulp.task('df', function() {

    console.log("watch");
})
