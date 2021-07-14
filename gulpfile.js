/**
 * Gulpfile.
 *
 * Gulp with WordPress.
 *
 * Implements:
 *      1. Live reloads browser with BrowserSync.
 *      2. CSS: Sass to CSS conversion, error catching, Autoprefixing, Sourcemaps,
 *         CSS minification, and Merge Media Queries.
 *      3. JS: Concatenates & uglifies Vendor and Custom JS files.
 *      4. Images: Minifies PNG, JPEG, GIF and SVG images.
 *      5. Watches files for changes in CSS or JS.
 *      6. Watches files for changes in PHP.
 *      7. Corrects the line endings.
 *      8. InjectCSS instead of browser page reload.
 *      9. Generates .pot file for i18n and l10n.
 *
 * @author craig steel
 * @version 1.0.0
 */

/**
 * Configuration.
 *
 * Project Configuration for gulp tasks.
 *
 * In paths you can add <<glob or array of globs>>. Edit the variables as per your project requirements.
 */

// START Editing Project Variables.
// Project related.
var project                 = 'fortisem'; // Project Name.
var projectURL              = 'localhost:8888';// Project URL. Could be something like localhost:8888.
var productURL              = '/'; // Theme/Plugin URL. Leave it like it is, since our gulpfile.js lives in the root folder.

// Translation related.
var text_domain             = 'fortisem'; // Your textdomain here.
var destFile                = 'fortisem.pot'; // Name of the transalation file.
var packageName             = 'fortisem'; // Package name.
var bugReport               = 'http://www.craigsteel-design.com/contact/'; // Where can users report bugs.
var lastTranslator          = 'Craig steel <craig@craigsteel-design.com>'; // Last translator Email ID.
var translatePath           = 'dist/languages'; // Where to save the translation files.

// Style related.
var styleSRC                = 'scss/main.scss'; // Path to main .scss file.
var styleDestination        = 'dist/css'; // Path to place the compiled CSS file.
var bowerDir                = 'bower_components';
// Defualt set to root folder.

// JS Vendor related.
var jsVendorSRC             = 'js/vendor/*.js'; // Path to JS vendor folder.
var jsVendorDestination     = 'dist/js'; // Path to place the compiled JS vendors file.
var jsVendorFile            = 'analyticstracking'; // Compiled JS vendors file name.
// Default set to vendors i.e. vendors.js.

// JS Custom related.
var jsCustomSRC             = 'js/custom/*.js'; // Path to JS custom scripts folder.
var jsCustomDestination     = 'dist/js'; // Path to place the compiled JS custom scripts file.
var jsCustomFile            = 'custom'; // Compiled JS custom file name.
// Default set to custom i.e. custom.js.

// Images related.
var imagesSRC               = 'img/**/*.{png,jpg,gif,svg}'; // Source folder of images which should be optimized.
var imagesDestination       = 'dist/img'; // Destination folder of optimized images. Must be different from the imagesSRC folder.

// Fontawesome
var fontawesomeSRC          = 'fonts/*.{woff2,woff,ttf,otf,svg,eot}'; // Source folder of fontawesome.

// Watch files paths.
var styleWatchFiles         = 'scss/**/*.scss'; // Path to all *.scss files inside css folder and inside them.
var vendorJSWatchFiles      = 'js/vendor/*.js'; // Path to all vendor JS files.
var customJSWatchFiles      = 'js/custom/*.js'; // Path to all custom JS files.
var projectPHPWatchFiles    = '**/*.php'; // Path to all PHP files.



// Browsers you care about for autoprefixing.
// Browserlist https://github.com/ai/browserslist
const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 9',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4',
    'bb >= 10'
  ];

// STOP Editing Project Variables.

/**
 * Load Plugins.
 *
 * Load gulp plugins and assing them semantic names.
 */
var gulp            = require('gulp'); // Gulp of-course

// Google fonts.
var googleWebFonts  = require('gulp-google-webfonts');
var options         = {
    fontsDir:     'googlefonts/',
    cssDir:       'googlecss/',
    cssFilename:  'myGoogleFonts.css'
    };

// CSS related plugins.
var sass         = require('gulp-sass'); // Gulp pluign for Sass compilation.
var minifycss    = require('gulp-uglifycss'); // Minifies CSS files.
var autoprefixer = require('autoprefixer-core');
var autoprefixer = require('gulp-autoprefixer'); // Autoprefixing magic.
var mmq          = require('gulp-merge-media-queries'); // Combine matching media queries into one media query definition.

// JS related plugins.
var concat       = require('gulp-concat'); // Concatenates JS files.
var uglify       = require('gulp-uglify'); // Minifies JS files.
var babel        = require('gulp-babel');  // Babel for transforming ES2015 and JSX into boring old JavaScript.

// Image Compression
var imagemin                = require('gulp-imagemin'); // Minify PNG, JPEG, GIF and SVG images with imagemin.
var imageminPngquant        = require('imagemin-pngquant');
var imageminJpegRecompress  = require('imagemin-jpeg-recompress');

// Utility related plugins.
var bower        = require('gulp-bower'); // 
var rename       = require('gulp-rename'); // Renames files E.g. style.css -> style.min.css
// var uncss        = require('gulp-uncss');
var lineec       = require('gulp-line-ending-corrector'); // Consistent Line Endings for non UNIX systems. Gulp Plugin for Line Ending Corrector (A utility that makes sure your files have consistent line endings)
var filter       = require('gulp-filter'); // Enables you to work on a subset of the original files by filtering them using globbing.
var sourcemaps   = require('gulp-sourcemaps'); // Maps code in a compressed file (E.g. style.css) back to it’s original position in a source file (E.g. structure.scss, which was later combined with other css files to generate style.css)
var notify       = require('gulp-notify'); // Sends message notification to you
var browserSync  = require('browser-sync').create(); // Reloads browser and injects CSS. Time-saving synchronised browser testing.
var reload       = browserSync.reload; // For manual browser reload.
var wpPot        = require('gulp-wp-pot'); // For generating the .pot file.
var sort         = require('gulp-sort'); // Recommended to prevent unnecessary changes in pot-file.
var zip          = require('gulp-zip');
var del          = require('del');


 // gulp.task('clean', function () {
 //   return del.sync([
 //     'dist',
 //      ]);
 //  });

/**
 * Task: `browser-sync`.
 *
 * Live Reloads, CSS injections, Localhost tunneling.
 *
 * This task does the following:
 *    1. Sets the project URL
 *    2. Sets inject CSS
 *    3. You may define a custom port
 *    4. You may want to stop the browser from openning automatically
 */

gulp.task( 'browser-sync', function() {
  browserSync.init( {

    // For more options
    // @link http://www.browsersync.io/docs/options/

    // Project URL.
    proxy: projectURL,

    // `true` Automatically open the browser with BrowserSync live server.
    // `false` Stop the browser from automatically opening.
    open: true,

    // Inject CSS changes.
    // Commnet it to reload browser for every CSS change.
    injectChanges: true,

    // Use a specific port (instead of the one auto-detected by Browsersync).
    // port: 8888,

  } );
});


 gulp.task('bower', function() { 
    return bower()
     .pipe(gulp.dest(bowerDir)) ;
});


 gulp.task('fonts', function () {
  return gulp.src('./fonts.list')
    .pipe(googleWebFonts(options))
    .pipe(gulp.dest('./googlefonts'))

    .pipe( notify( { message: 'TASK: "fonts" Completed! 💯', onLast: true } ) );
  });

/**
 * Task: `styles`.
 *
 * Compiles Sass, Autoprefixes it and Minifies CSS.
 *
 * This task does the following:
 *    1. Gets the source scss file
 *    2. Compiles Sass to CSS
 *    3. Writes Sourcemaps for it
 *    4. Autoprefixes it and generates style.css
 *    5. Renames the CSS file with suffix .min.css
 *    6. Minifies the CSS file and generates style.min.css
 *    7. Injects CSS or reloads the browser via browserSync
 */
 gulp.task('styles', function () {
    gulp.src( styleSRC )
    .pipe( sourcemaps.init() )
    .pipe( sass( {
      errLogToConsole: true,
      //  outputStyle: 'compact',
          outputStyle: 'compressed',
      //  outputStyle: 'nested',
      //  outputStyle: 'expanded',
      precision: 10
    } ) )
    .on('error', console.error.bind(console))
    .pipe( sourcemaps.write( { includeContent: false } ) )
    .pipe( sourcemaps.init( { loadMaps: true } ) )
    .pipe( autoprefixer( AUTOPREFIXER_BROWSERS ) )

    .pipe( sourcemaps.write ( styleDestination ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( styleDestination ) )

    .pipe( filter( '**/*.css' ) ) // Filtering stream to only css files
    .pipe( mmq( { log: true } ) ) // Merge Media Queries only for .min.css version.

    .pipe( browserSync.stream() ) // Reloads style.css if that is enqueued.

    .pipe( rename( { suffix: '.min' } ) )
    .pipe( minifycss( {
      maxLineLen: 30
    }))
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( styleDestination ) )

    .pipe( filter( '**/*.css' ) ) // Filtering stream to only css files
    .pipe( browserSync.stream() )// Reloads style.min.css if that is enqueued.

    .pipe( notify( { message: 'TASK: "styles" Completed! 💯', onLast: true } ) );
 });

 /**
  * Task: `vendorJS`.
  *
  * Concatenate and uglify vendor JS scripts.
  *
  * This task does the following:
  *     1. Gets the source folder for JS vendor files
  *     2. Concatenates all the files and generates vendors.js
  *     3. Renames the JS file with suffix .min.js
  *     4. Uglifes/Minifies the JS file and generates vendors.min.js
  *     5. Writes Sourcemaps for it
  */

 gulp.task( 'vendorsJs', function() {
  gulp.src( jsVendorSRC )
    .pipe( concat( jsVendorFile + '.js' ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsVendorDestination ) )
    .pipe( rename( {
      basename: jsVendorFile,
      suffix: '.min'
    }))
    .pipe(sourcemaps.init() )
  		.pipe(babel({
  			presets: ['es2015']
  		}))
  	.pipe(uglify() )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe(sourcemaps.write())
    .pipe( gulp.dest( jsVendorDestination ) )

    .pipe( notify( { message: 'TASK: "vendorsJs" Completed! 💯', onLast: true } ) );
 });

 /**
  * Task: `customJS`.
  *
  * Concatenate and uglify custom JS scripts.
  *
  * This task does the following:
  *     1. Gets the source folder for JS custom files
  *     2. Concatenates all the files and generates custom.js
  *     3. Renames the JS file with suffix .min.js
  *     4. Uglifes/Minifies the JS file and generates custom.min.js
  *     5. Writes Sourcemaps for it
  */

 gulp.task( 'customJS', function() {
    gulp.src( jsCustomSRC )
    .pipe( concat( jsCustomFile + '.js' ) )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe( gulp.dest( jsCustomDestination ) )
    .pipe( rename( {
      basename: jsCustomFile,
      suffix: '.min'
    }))
    .pipe(sourcemaps.init() )
  		.pipe(babel({
  			presets: ['es2015']
  		}))
    .pipe( uglify() )
    .pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
    .pipe(sourcemaps.write())
    .pipe( gulp.dest( jsCustomDestination ) )

    .pipe( notify( { message: 'TASK: "customJs" Completed! 💯', onLast: true } ) );
 });

 /**
  * Task: `images`.
  *
  * Minifies PNG, JPEG, GIF and SVG images.
  *
  * This task does the following:
  *     1. Gets the source of images raw folder
  *     2. Minifies PNG, JPEG, GIF and SVG images
  *     3. Generates and saves the optimized images
  *
  * This task will run only once, if you want to run it
  * again, do it with the command `gulp images`.
  */

 gulp.task( 'images', function() {
  return gulp.src( imagesSRC )
    .pipe( imagemin(
      [
  			imagemin.gifsicle(),
  			imagemin.jpegtran(),
  			imagemin.optipng(),
  			imagemin.svgo(),
  			imageminPngquant(),
  			imageminJpegRecompress()
  		]
    ))
    .pipe(gulp.dest( imagesDestination ))

    .pipe( notify( { message: 'TASK: "images" Completed! 💯', onLast: true } ) );
 });

 /**
  * WP POT Translation File Generator.
  *
  * * This task does the following:
  *     1. Gets the source of all the PHP files
  *     2. Sort files in stream by path or any custom sort comparator
  *     3. Applies wpPot with the variable set at the top of this file
  *     4. Generate a .pot file of i18n that can be used for l10n to build .mo file
  */

 gulp.task( 'translate', function () {
     return gulp.src( projectPHPWatchFiles )
.pipe(sort())
        .pipe(wpPot( {
            domain: 'domain',
            destFile:'file.pot',
            package: 'package_name',
            bugReport: 'http://example.com',
            lastTranslator: 'John Doe <mail@example.com>',
            team: 'Team Team <mail@example.com>'
         } ))
        .pipe(gulp.dest(translatePath))
      
    .pipe( notify( { message: 'TASK: "translate" Completed! 💯', onLast: true } ) );
 });

 gulp.task('copyvideo', function() {
   gulp.src('img/video/*')
   .pipe(gulp.dest('dist/img/video'))

   .pipe( notify( { message: 'TASK: "copyvideo" Completed! 💯', onLast: true } ) );
});

 gulp.task('movelatofonts', function() {
   gulp.src( 'googlefonts/googlefonts/*' )
   .pipe(gulp.dest('dist/fonts'))

   .pipe( notify( { message: 'TASK: "movelatofonts" Completed! 💯', onLast: true } ) );
});


 gulp.task('movefonts', function() {
   gulp.src( fontawesomeSRC )
   .pipe(gulp.dest('dist/fonts'))

   .pipe( notify( { message: 'TASK: "fonts" Completed! 💯', onLast: true } ) );
});

 gulp.task('export', function () {
 	return gulp.src('dist/**/*')
 		.pipe(zip('waters-productions-wp.zip'))
 		.pipe(gulp.dest('./'))
    
    .pipe( notify( { message: 'TASK: "export" Completed! 💯', onLast: true } ) );
 });

//Uncss task
// gulp.task('uncss', function() {

// gulp.src('dist/css/main.min.css')
// .pipe(uncss({
// html: ["http:\/\/localhost:8888","http:\/\/localhost:8888\/testimonials\/jo\/","http:\/\/localhost:8888\/testimonials\/rav-atwel\/","http:\/\/localhost:8888\/testimonials\/carmen-coyne\/","http:\/\/localhost:8888\/testimonials\/layla-oleary\/","http:\/\/localhost:8888\/testimonials\/tanya-gardiner\/","http:\/\/localhost:8888\/advertising\/another-test-post-2\/","http:\/\/localhost:8888\/advertising\/another-test-post\/","http:\/\/localhost:8888\/legal\/","http:\/\/localhost:8888\/catering\/iod-lets-talk-big-business\/","http:\/\/localhost:8888\/public-relations\/city-informally-known-capital\/","http:\/\/localhost:8888\/projects\/","http:\/\/localhost:8888\/about\/","http:\/\/localhost:8888\/contact\/","http:\/\/localhost:8888\/services\/","http:\/\/localhost:8888\/","http:\/\/localhost:8888\/author\/craig_steel_admin\/","http:\/\/localhost:8888\/category\/advertising\/","http:\/\/localhost:8888\/tag\/build\/","http:\/\/localhost:8888\/category\/catering\/","http:\/\/localhost:8888\/category\/consumer-goods\/","http:\/\/localhost:8888\/category\/corporate\/","http:\/\/localhost:8888\/tag\/corporate\/","http:\/\/localhost:8888\/tag\/design\/","http:\/\/localhost:8888\/tag\/projects\/","http:\/\/localhost:8888\/category\/public-relations\/","http:\/\/localhost:8888\/category\/telecoms\/","http:\/\/localhost:8888\/2016\/11\/","http:\/\/localhost:8888\/?s=.","http:\/\/localhost:8888\/?s=asdfasdfasdfasdf","http:\/\/localhost:8888\/asdfasdfasdfasdf"]
// }))
// .pipe(rename({suffix: '.clean'}))

// .pipe(gulp.dest('dist/css/'))

//     .pipe( notify( { message: 'TASK: "uncss" Completed! 💯', onLast: true } ) );
//  });

 /**
  * Watch Tasks.
  *
  * Watches for file changes and runs specific tasks.
  */
 gulp.task( 'default', ['bower', 'styles', 'translate', 'vendorsJs', 'customJS', 'images', 'copyvideo', 'browser-sync', 'fonts', 'movelatofonts', 'movefonts' ], function () {
  gulp.watch( projectPHPWatchFiles, reload ); // Reload on PHP file changes.
  gulp.watch( styleWatchFiles, [ 'styles' ] ); // Reload on SCSS file changes.
  gulp.watch( vendorJSWatchFiles, [ 'vendorsJs', reload ] ); // Reload on vendorsJs file changes.
  gulp.watch( customJSWatchFiles, [ 'customJS', reload ] ); // Reload on customJS file changes.
 });