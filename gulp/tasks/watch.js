const { watch } = require('gulp');
const browserSync = require('browser-sync').create();

const stylesTask = require('./styles')
const scriptsTask = require('./scripts')
// const staticsTask = require('./statics');

// const DIST_PATH = 'dist';
const SCRIPTS_PATH = 'js/custom/**/*.js';
const STYLES_PATH = 'scss/**/*.scss';


function watchFn() {

    var files = [
      './sass/*.scss',
      './*.php'
    ];

  browserSync.init(files, {
    proxy: "http://localhost:8888/",
    notify: true
    });


  // livereload.listen();

  watch(SCRIPTS_PATH, scriptsTask.build);
  
  // gulp.watch(CSS_PATH, ['styles']);
  watch(STYLES_PATH, stylesTask.build);

}

// Watch
exports.build = watchFn;
