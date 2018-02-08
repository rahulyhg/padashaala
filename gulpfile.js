// --------------------------------------------------------------------
// Plugins
// --------------------------------------------------------------------
"use strict";
var gulp = require("gulp"),
    sass = require("gulp-sass"),
    concat = require("gulp-concat"),
    minify_css = require("gulp-minify-css"),
    watch = require("gulp-watch"),
    plumber = require("gulp-plumber"),
    uglify = require("gulp-uglify"),
    sourcemaps = require("gulp-sourcemaps"),
    imagemin = require("gulp-imagemin"),
    jshint = require("gulp-jshint"),
    autoprefixer = require("gulp-autoprefixer"),
    pngquant = require("imagemin-pngquant"),
    browserSync = require("browser-sync"),
    render = require('gulp-nunjucks-render');
    // fontz = require('gulp-font2css');
    // babel=require('gulp-babel');sdfsd




// --------------------------------------------------------------------
// Settings
// --------------------------------------------------------------------

var src = {
    sass: "src/sass/**/**/*.scss",
    js: "src/js/**/*.js",
    img: "src/img/*",
    html: "src/html/**/*.njk",
    fonts:"src/fonts/**/*.{otf,ttf,woff,woff2}"
};

var output = {
    js: "output/js",
    css: "output/css",
    img: "output/img",
    html: "output/**/*.html",
    min_css: "app.min.css",
    min_js: "app.min.js",
    fonts:"output/fonts"
};

// --------------------------------------------------------------------
// error handler
// --------------------------------------------------------------------

var onError = function(err) {
    console.log(err);
    this.emit('end');
};
// --------------------------------------------------------------------
// Task: font
// --------------------------------------------------------------------
// gulp.task('fo',function(){
//    return gulp.src(src.fonts)
//        .pipe(fontz())
//        // .pipe(concat('fonts.css'))
//        .pipe(gulp.dest('output'));
// });

// --------------------------------------------------------------------
// Task: Sass
// --------------------------------------------------------------------

gulp.task('sass', function() {

    return gulp.src(src.sass)
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concat(output.min_css))
        // .pipe(minify_css())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(output.css))
        .pipe(browserSync.reload({ stream: true }));
});


// --------------------------------------------------------------------
// Task: JS
// --------------------------------------------------------------------
gulp.task('js', function() {

    return gulp.src(src.js)
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(sourcemaps.init())
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(uglify())
        .pipe(concat(output.min_js))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(output.js))
        .pipe(browserSync.reload({ stream: true }));

});


// --------------------------------------------------------------------
// Task: bower component inject to html
// --------------------------------------------------------------------
// gulp.task('bower', function () {
//     gulp.src(src.html)
//         .pipe(wiredep({
//             optional: 'configuration',
//             goes: 'here'
//         }))
//         .pipe(gulp.dest(output.html));
// });

// --------------------------------------------------------------------
// Task: Image
// --------------------------------------------------------------------

gulp.task('img', function() {

    return gulp.src(src.img)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{ removeViewBox: false }],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(output.img));

});
// --------------------------------------------------------------------
// Task: html
// --------------------------------------------------------------------

gulp.task('nunjucks', function() {
    return gulp.src('src/html/pages/**/*.+(njk)')
        .pipe(render({
            path: ['src/html/templates/partials/',
                'src/html/templates/macro/',
                'src/html/templates/macro/index/',
                'src/html/templates/macro/category/']
        }))
        .pipe(gulp.dest('output'))
        .pipe(browserSync.reload({ stream: true }));
});

// --------------------------------------------------------------------
// Task: Watch
// --------------------------------------------------------------------

gulp.task('watches', function() {
    browserSync.init({
        // proxy: config.browser_proxy,
        server: './output'
    });
    gulp.watch(src.js, ['js']);
    gulp.watch(src.fonts, ['font']);
    gulp.watch(src.sass, ['sass']);
    gulp.watch(src.img, ['img']);
    gulp.watch(src.html, ['nunjucks']);
    gulp.watch(output.html).on('change', browserSync.reload);
});

// --------------------------------------------------------------------
// Task: Default
// --------------------------------------------------------------------

gulp.task('default', ['watches', 'sass', 'js', 'img', 'nunjucks']);
