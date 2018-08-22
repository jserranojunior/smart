// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');


gulp.task('styles', function () {
    return gulp.src([
        './node_modules/bootstrap/dist/css/bootstrap.css',

        './resources/assets/css/fontastic.css',

        './node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
        
        './resources/assets/css/grasp_mobile_progress_circle-1.0.0.min.css', 
        './resources/assets/css/style.default.css',
       './resources/assets/css/custom.css',
        
       

    ])
      .pipe(concatCss("all.css"))
      .pipe(gulp.dest('./css/'));
  });

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});



// Default Task
gulp.task('default', ['styles']);


/*


<link rel="stylesheet" href="/css/fontastic.css">
<link rel="stylesheet" href="/css/grasp_mobile_progress_circle-1.0.0.min.css">
<link rel="stylesheet" href="/css/style.default.css" id="theme-stylesheet">
<link rel="stylesheet" href="/css/custom.css">
*/