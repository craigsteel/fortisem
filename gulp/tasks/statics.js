/* eslint-disable no-undef */
const { src, dest, parallel } = require('gulp');
const replace = require('gulp-replace');

//File paths
const DIST_PATH = 'dist';

// // copy HTML resources
// function htmlFn() {
//   return src(SRC_PATH + "/**/*.html")
//     .pipe(replace('dist/', ''))
//     .pipe(dest(DIST_PATH));
// }

// copy the Fonts
function fontsFn() {
  return src("fonts*/**/*")
    .pipe(dest(DIST_PATH));
}

// copy the Publications
// function cvFn() {
//   return src(SRC_PATH + "/cv*/**/*")
//     .pipe(dest(DIST_PATH));
// }

// copy the Publications
// function presentationsFn() {
//   return src(SRC_PATH + "/presentations*/**/*")
//     .pipe(dest(DIST_PATH));
// }

// other static resources
// function othersFn() {
//   return src(SRC_PATH + "/LICENSE.txt")
//     .pipe(dest(DIST_PATH));
// }

// eslint-disable-next-line no-undef
staticsFn = parallel(
  fontsFn,
);

exports.build = staticsFn;
