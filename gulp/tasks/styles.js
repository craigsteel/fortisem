const { src, dest } = require('gulp');

// const minifyCss = require('gulp-minify-css');
const autoprefixer = require('gulp-autoprefixer');
const plumber = require('gulp-plumber');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
// var reload = browserSync.reload;


const SCSS_PATH = 'scss/main.scss';
const DIST_PATH = 'dist';

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
    .pipe(reload({stream:true}));
}

exports.build = stylesFn;
