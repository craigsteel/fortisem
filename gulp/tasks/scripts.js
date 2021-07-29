const { src, dest } = require('gulp');

const uglify = require('gulp-uglify');
const livereload = require('gulp-livereload');
const concat = require('gulp-concat');
const plumber = require('gulp-plumber');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');

const SCRIPTS_PATH = 'js/**/*.js';
const DIST_PATH = 'dist/js';

// Scripts
function scriptsFn() {
  return src(SCRIPTS_PATH)
    .pipe(plumber(function (err) {
      console.log('Scripts Task Error');
      console.log(err);
      this.emit('end');
    }))
    .pipe(sourcemaps.init())
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(concat('custom.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(dest(DIST_PATH))
    .pipe(livereload());
}

exports.build = scriptsFn;
