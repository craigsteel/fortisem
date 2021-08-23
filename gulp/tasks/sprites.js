const { src, dest } = require('gulp');
const svgSprite = require('gulp-svg-sprite');


// SVG SPRITES

const SPRITE_PATH = 'images/svgs/*.svg';
const SPRITE_DIST_PATH = 'dist/images/svgs';

function svgspritesFn(cb) {
  src(SPRITE_PATH)
    .pipe(svgSprite({
      shape: {
        dimension: { // Set maximum dimensions
          maxWidth: 100,
          maxHeight: 100
        },
        spacing: { // Add padding
          padding: 10
        },
        dest: "intermediate-svg"
      },
      mode: {
        stack: {
          sprite: "../sprite.svg"
        }
      }
    }))
    .pipe(dest(SPRITE_DIST_PATH));
  cb();
}

exports.build = svgspritesFn;
