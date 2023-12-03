const gulp = require("gulp")
const sass = require("gulp-sass")(require("sass"));
const notify = require("gulp-notify");   
const plumber = require("gulp-plumber");  
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer")
const cssSorter = require("css-declaration-sorter");
const mmq = require("gulp-merge-media-queries");
const browserSync =require("browser-sync");
const cleanCss = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename"); 
const htmlBeautify = require("gulp-html-beautify");
function test(done){
    console.log("hello gulp");
    done();
}

function compileSass(){
    return gulp.src("./src/assets/sass/**/*.scss")
    //コンパイルの処理を記録する
    .pipe(plumber({errorHandler: notify.onError('Error:<%= error.message %>')}))
    .pipe(sass())
    .pipe(postcss([autoprefixer(),cssSorter()]))
    .pipe(mmq())
    .pipe(gulp.dest("./public/assets/css/"))
    .pipe(cleanCss())
    .pipe(rename({
        suffix:".min"
    }))
    .pipe(gulp.dest("./public/assets/css/"))
    .pipe(notify({
        message: 'Sassをコンパイルしました！',
        onLast: true}))
}

function watch() {
    gulp.watch("./src/assets/sass/**/*.scss",gulp.series(compileSass,browserReload));
    gulp.watch("./src/assets/css/**/*.css",gulp.series(minCss,browserReload));
    gulp.watch("./src/assets/js/**/*.js",gulp.series(minJs,browserReload));
    gulp.watch("./src/assets/img/**/*",gulp.series(copyImage,browserReload));
    gulp.watch("./src/**/*.html",gulp.series(formatHTML,browserReload));
}
function browserInit(done) {
    browserSync.init({
        server:{
            baseDir:"./public"
        }
    });
    done();
}

function browserReload(done) {
    browserSync.reload();
    done();
}

function minCss() {
    return gulp.src("./src/assets/css/**/*.css")
    .pipe(gulp.dest("./public/assets/css/"))
    .pipe(cleanCss())
    .pipe(rename({
        suffix:".min"
    }))
    .pipe(gulp.dest("./public/assets/css/"))
}
function minJs() {
    return gulp.src("./src/assets/js/**/*.js")
    .pipe(gulp.dest("./public/assets/js/"))
    .pipe(uglify())
    .pipe(rename({
        suffix:".min"
    }))
    .pipe(gulp.dest("./public/assets/js/"))
}

function formatHTML() {
    return gulp.src("./src/**/*.html")
    .pipe(htmlBeautify({
        indent_size:2,
        indent_with_tabs:true,
    }))
    .pipe(gulp.dest("./public"))
}

function copyImage() {
    return gulp.src("./src/assets/img/**/*")
    .pipe(gulp.dest("./public/assets/img/"))
}

exports.test = test;
exports.compileSass = compileSass;
exports.watch = watch;
exports.browserInit = browserInit;
exports.dev = gulp.parallel(browserInit,watch);
exports.minCss = minCss;
exports.minJs = minJs;
exports.formatHTML = formatHTML;
exports.build = gulp.parallel(formatHTML,minCss,minJs,compileSass,copyImage);
