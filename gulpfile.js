"use strict";

const sass = require("gulp-sass")(require("sass"));
const gulp = require("gulp");
const gutil = require("gulp-util");
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
const rimraf = require("rimraf");
const jshint = require("gulp-jshint");
const notify = require("gulp-notify");

var path = {
  src: {
    scss: "source/scss/**/*.scss",
    js: "source/js/*.js",
  },
  build: {
    dirBuild: "./",
  },
};

// SCSS
gulp.task("scss:build", function () {
  return gulp
    .src(path.src.scss)
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        outputStyle: "expanded",
      }).on("error", sass.logError)
    )
    .pipe(autoprefixer())
    .pipe(sourcemaps.write("/"))
    .pipe(gulp.dest(path.build.dirBuild + "css/"))
});

// Javascript
gulp.task("js:build", function () {
  return gulp
    .src(path.src.js)
    .pipe(jshint("./.jshintrc"))
    .pipe(
      notify(function (file) {
        if (!file.jshint.success) {
          return (
            file.relative + " (" + file.jshint.results.length + " errors)\n"
          );
        }
      })
    )
    .pipe(jshint.reporter("jshint-stylish"))
    .on("error", gutil.log)
    .pipe(gulp.dest(path.build.dirBuild + "js/"))
});


// Watch Task
gulp.task("watch:build", function () {
  gulp.watch(path.src.scss, gulp.series("scss:build"));
 // gulp.watch(path.src.js, gulp.series("js:build"));
});

// Build Task
gulp.task(
  "build",
  gulp.series(
//    "js:build",
    "scss:build"
  )
);
