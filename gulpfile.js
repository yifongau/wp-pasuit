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
    plugins: "source/plugins/**/*.*",
    js: "source/js/*.js",
    scss: "scss/**/*.scss",
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
    .pipe(gulp.dest(path.build.dirDev + "css/"))
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
    .pipe(gulp.dest(path.build.dirDev + "js/"))
    .pipe(
      bs.reload({
        stream: true,
      })
    );
});

// fonts
gulp.task("fonts:build", function () {
  return gulp
    .src(path.src.fonts)
    .pipe(gulp.dest(path.build.dirDev + "fonts/"))
    .pipe(
      bs.reload({
        stream: true,
      })
    );
});

// Plugins
gulp.task("plugins:build", function () {
  return gulp
    .src(path.src.plugins)
    .pipe(gulp.dest(path.build.dirDev + "plugins/"))
    .pipe(
      bs.reload({
        stream: true,
      })
    );
});

// Clean Build Folder
gulp.task("clean", function (cb) {
  rimraf("./theme", cb);
});

// Error Message Show
function customPlumber(errTitle) {
  return plumber({
    errorHandler: notify.onError({
      // Customizing error title
      title: errTitle || "Error running Gulp",
      message: "Error: <%= error.message %>",
      sound: "Glass",
    }),
  });
}

// Watch Task
gulp.task("watch:build", function () {
  gulp.watch(path.src.html, gulp.series("html:build"));
  gulp.watch(path.src.htminc, gulp.series("html:build"));
  gulp.watch(path.src.scss, gulp.series("scss:build"));
  gulp.watch(path.src.js, gulp.series("js:build"));
  gulp.watch(path.src.images, gulp.series("images:build"));
  gulp.watch(path.src.fonts, gulp.series("fonts:build"));
  gulp.watch(path.src.plugins, gulp.series("plugins:build"));
});

// Build Task
gulp.task(
  "build",
  gulp.series(
    "html:build",
    "js:build",
    "scss:build",
    "images:build",
    "fonts:build",
    "plugins:build"
  )
);
