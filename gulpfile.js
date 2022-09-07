const { series, parallel, src, dest } = require("gulp");
const gulp = require("gulp");
const build = require("gulp-build");
const data = require("gulp-data");
const sass = require("gulp-sass")(require("sass"));
const webp = require("gulp-webp");
const minifyjs = require("gulp-uglify");
const purgecss = require("gulp-purgecss");
const browserSync = require("browser-sync").create();
const minifycss = require("gulp-clean-css");
const prefix = require("gulp-autoprefixer");

function style() {
  return gulp
    .src("assets/styles.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(prefix("last 2 versions"))
    .pipe(minifycss())
    .pipe(gulp.dest("assets"))
    .pipe(browserSync.stream());
}

function styletwo() {
  return gulp
    .src("assets/styles.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(prefix("last 2 versions"))
    .pipe(minifycss())
    .pipe(gulp.dest("dist/assets"))
    .pipe(browserSync.stream());
}

function purge() {
  return gulp
    .src("assets/styles.css")
    .pipe(
      purgecss({
        content: ["dist/**/**/*.php"],
      })
    )
    .pipe(gulp.dest("dist/assets"));
}

function js() {
  return gulp.src(["js/**/*"]).pipe(minifyjs()).pipe(gulp.dest("dist/js"));
}

function img() {
  return gulp.src("img/**/*").pipe(webp()).pipe(gulp.dest("dist/img"));
}

exports.dist = series(style, styletwo, js, img);

function watch() {
  browserSync.init({
    proxy: "localhost:8080/smaa-bisser",
  });
  gulp.watch("./scss/**/*.scss", style);
  gulp.watch("./dist/assets/*.scss", style);
  gulp.watch("./dist/**/*.php").on("change", browserSync.reload);
  gulp.watch("./*.php").on("change", browserSync.reload);
  gulp.watch("./js/**/*.js").on("change", browserSync.reload);
}

exports.watch = watch;
