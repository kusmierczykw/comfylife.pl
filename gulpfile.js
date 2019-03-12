var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer');


// Config section
sass.compiler = require('node-sass');

// Consts
const paths = {
    styles: {
        src: './sass/**/*.scss',
        dest: './css'
    },
    php: {
        src: './**/*.php',
    },
    js: {
        src: './**/*.js',
    }
};

// Config methods
function styles() {
    return gulp.src(paths.styles.src)
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(autoprefixer({
            browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9'],
            cascade: false,
        }))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

function initLiveReload() {
    connect.server({}, function () {
        browserSync.init({
            proxy: 'localhost/comfy-life.com/',
            port: 8080,
        });
    });
}

// Watchers
function watch() {
    gulp.watch(paths.styles.src, styles);

    initLiveReload();
    gulp.watch(paths.php.src).on('change', function () {
        browserSync.reload();
    });

    gulp.watch(paths.js.src).on('change', function () {
        browserSync.reload();
    });
}

const build = gulp.series(gulp.parallel(styles));

exports.watch = watch;
exports.default = build;
