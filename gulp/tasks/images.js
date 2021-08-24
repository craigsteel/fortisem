const { src, dest } = require('gulp');

// Image Compression
const imagemin = require('gulp-imagemin');
const imageminPngquant = require('imagemin-pngquant');
const imageminJpegRecompress = require('imagemin-jpeg-recompress');

//File paths
const DIST_PATH = 'dist';
const IMAGES_PATH = 'images/png-jpg/*.{png,jpeg,jpg,svg,gif,ico,,webp,xml,jason}';

// Images
function imagesFn() {
  return src(IMAGES_PATH)
    .pipe(imagemin(
      [
        imagemin.gifsicle(),
        imagemin.mozjpeg(),
        imagemin.optipng(),
        imagemin.svgo(),
        imageminPngquant(),
        imageminJpegRecompress()
      ]
    ))
<<<<<<< HEAD
    .pipe(dest(DIST_PATH + '/images'));
=======
    .pipe(dest(DIST_PATH + '/img'));
>>>>>>> d43664848778fac873d11a5a235359460d4c7a33
}

exports.build = imagesFn;
