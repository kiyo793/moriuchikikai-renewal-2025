import gulp from "gulp";
import gulpSass from "gulp-sass";
import dartSass from "sass";
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import cssSorter from "css-declaration-sorter";
import nmq from "gulp-merge-media-queries";
import browserSyncModule from "browser-sync";
import cleanCss from "gulp-clean-css";
import uglify from "gulp-uglify";
import crypto from "crypto";
import replace from "gulp-replace";
import sharp from "sharp";
import rename from "gulp-rename";
import through2 from "through2";
import newer from "gulp-newer";
import path from "path";

const browserSync = browserSyncModule.create();
const sass = gulpSass(dartSass);
const hash = crypto.randomBytes(8).toString("hex");

const paths = {
  images: "src/assets/img/**/*.{jpg,jpeg,png}",
  output: "assets/img",
  sass: "src/assets/sass/**/*.scss",
  sassOutput: "assets/css/",
  js: "src/assets/js/**/*.js",
  jsOutput: "assets/js/",
  lib: "src/assets/lib/**/*",
  libOutput: "assets/lib/"
};

// libフォルダ
export function copyLib() {
  return gulp
    .src(paths.lib)
    .pipe(gulp.dest(paths.libOutput));
}

// CSSコンパイル
export function compileSass() {
  return gulp
    .src(paths.sass)
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssSorter()]))
    .pipe(nmq())
    .pipe(gulp.dest(paths.sassOutput))
    .pipe(cleanCss())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(paths.sassOutput));
}

// JS圧縮
export function minJS() {
  return gulp
    .src(paths.js)
    .pipe(gulp.dest(paths.jsOutput))
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(paths.jsOutput));
}


export function watchPHP() {
  return gulp.watch("./**/*.php", browserReload);
}

// キャッシュバスティング
export function cacheBusting() {
  return gulp
    .src("./**/*.php")
    .pipe(replace(/\.(js|css)\?ver/g, ".$1?ver=" + hash))
    .pipe(gulp.dest("./"));
}

// 画像リサイズ
export function resizeImages() {
  return gulp
    .src(paths.images, { encoding: false })
    .pipe(newer(paths.output))
    .pipe(
      through2.obj(function (file, _, cb) {
        if (file.isBuffer()) {
          const ext = path.extname(file.path);
          const basename = path.basename(file.path, ext);
          const newPath = path.join(path.dirname(file.path), `${basename}.webp`);
          sharp(file.contents)
            .resize(1920, 1920, {
              fit: "inside",
            })
            .toFormat("webp", { quality: 80 })
            .toBuffer()
            .then((data) => {
              file.contents = data;
              file.path = newPath;
              cb(null, file);
            })
            .catch((err) => {
              console.error("sharpエラー:", err);
              cb(null, file);
            });
        } else {
          cb(null, file);
        }
      })
    )
    .pipe(gulp.dest(paths.output));
}

// SVG画像をそのままコピー
export function copySvgImages() {
    return gulp
      .src("src/assets/img/**/*.svg")
      .pipe(newer(paths.output))
      .pipe(gulp.dest(paths.output));
}

// ブラウザSync
export function browserInit(done) {
  browserSync.init({
    proxy: "http://localhost/your-wp-site", // WordPressのローカル環境URLに変更
    // または以下のようにポート指定
    // proxy: "localhost:8080", // MAMPやXAMPPのポート番号に合わせる
    port: 3001,
    open: false,
    notify: false
  });
  done();
}

export function browserReload(done) {
  browserSync.reload();
  done();
}

// ウォッチ
export function watchFiles() {
  gulp.watch(paths.sass, gulp.series(compileSass, browserReload));
  gulp.watch(paths.js, gulp.series(minJS, browserReload));
  gulp.watch("./src/assets/img/**/*", gulp.series(resizeImages, browserReload));
  gulp.watch("./src/assets/img/**/*.svg", gulp.series(copySvgImages, browserReload));
  gulp.watch("./**/*.php", browserReload);
  gulp.watch("./style.css", browserReload);
}

const build = gulp.parallel(resizeImages, copySvgImages, compileSass, minJS, copyLib);
const dev = gulp.series(build, gulp.parallel(browserInit, watchFiles));

export {
  resizeImages as minImage,
  minJS as minJs,
  cacheBusting as cache,
  dev,
  build,
};