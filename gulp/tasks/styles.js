const { src, dest } = require('gulp');

// const minifyCss = require('gulp-minify-css');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
<<<<<<< HEAD
// var reload = browserSync.reload;


const SCSS_PATH = 'scss/main.scss';
const DIST_PATH = 'dist';
=======
const livereload = require('gulp-livereload');


const SCSS_PATH = 'scss/main.scss';
const DIST_PATH = 'dist/css';
>>>>>>> d43664848778fac873d11a5a235359460d4c7a33

// Styles For SCSS
function stylesFn() {
  return src(SCSS_PATH)
    .pipe(plumber(function (err) {
      console.log('Styles Task Error');
      console.log(err);
      this.emit('end');
    }))
    .pipe(sourcemaps.init())
    .pipe(autoprefixer())
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(sourcemaps.write())
    .pipe(dest(DIST_PATH))
<<<<<<< HEAD
    .pipe(reload({stream:true}));
=======
    .pipe(livereload());
>>>>>>> d43664848778fac873d11a5a235359460d4c7a33
}

exports.build = stylesFn;
