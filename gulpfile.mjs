import gulp from "gulp";
import gulpSass from "gulp-sass";
import dartSass from "sass";
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import cssSorter from "css-declaration-sorter";
import nmq from "gulp-merge-media-queries";
import browserSyncModule from "browser-sync";
import htmlBeautify from "gulp-html-beautify";
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

// WordPress用のパス設定
const paths = {
  images: "src/assets/img/**/*.{jpg,jpeg,png}",
  output: "assets/img", // WordPressテーマのassetsフォルダ
  sass: "src/assets/sass/**/*.scss",
  sassOutput: "assets/css/",
  js: "src/assets/js/**/*.js",
  jsOutput: "assets/js/",
  lib: "src/assets/lib/**/*",
  libOutput: "assets/lib/"
};

// libフォルダをコピー
export function copyLib() {
  return gulp
    .src(paths.lib)
    .pipe(gulp.dest(paths.libOutput));
}

// CSSコンパイル（WordPress用）
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

// JS圧縮（WordPress用）
export function minJS() {
  return gulp
    .src(paths.js)
    .pipe(gulp.dest(paths.jsOutput))
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest(paths.jsOutput));
}

// HTML整形（WordPressでは通常不要なのでコメントアウト）
// export function formatHTML() {
//   return gulp
//     .src("./src/**/*.html")
//     .pipe(htmlBeautify({ indent_size: 2, indent_with_tabs: true }))
//     .pipe(gulp.dest("./public"));
// }

// WordPress用 - PHPファイルの監視とリロード
export function watchPHP() {
  return gulp.watch("./**/*.php", browserReload);
}

// キャッシュバスティング（WordPress用 - PHPファイル対象）
export function cacheBusting() {
  return gulp
    .src("./**/*.php")
    .pipe(replace(/\.(js|css)\?ver/g, ".$1?ver=" + hash))
    .pipe(gulp.dest("./"));
}

// 画像リサイズ（WordPress用パス）
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

// SVG画像をそのままコピー（WordPress用パス）
export function copySvgImages() {
    return gulp
      .src("src/assets/img/**/*.svg")
      .pipe(newer(paths.output))
      .pipe(gulp.dest(paths.output));
}

// ブラウザSync 初期化＆リロード（WordPress用）
export function browserInit(done) {
  browserSync.init({
    proxy: "http://localhost/your-wp-site", // WordPressのローカル環境URLに変更
    // または以下のようにポート指定
    // proxy: "localhost:8080", // MAMPやXAMPPのポート番号に合わせる
    port: 3001, // BrowserSyncのポート（WordPressと被らないように）
    open: false,
    notify: false
  });
  done();
}

export function browserReload(done) {
  browserSync.reload();
  done();
}

// ウォッチ（WordPress用 - HTMLの代わりにPHPを監視）
export function watchFiles() {
  gulp.watch(paths.sass, gulp.series(compileSass, browserReload));
  gulp.watch(paths.js, gulp.series(minJS, browserReload));
  gulp.watch("./src/assets/img/**/*", gulp.series(resizeImages, browserReload));
  gulp.watch("./src/assets/img/**/*.svg", gulp.series(copySvgImages, browserReload));
  gulp.watch("./**/*.php", browserReload); // PHPファイルの変更を監視
  gulp.watch("./style.css", browserReload); // WordPressのstyle.cssも監視
}

// タスク定義（WordPress用 - HTMLタスクを除外）
const build = gulp.parallel(resizeImages, copySvgImages, compileSass, minJS, copyLib);
const dev = gulp.series(build, gulp.parallel(browserInit, watchFiles));

export {
  resizeImages as minImage,
  minJS as minJs,
  // formatHTML as html, // WordPress用にコメントアウト
  cacheBusting as cache,
  dev, // ブラウザを立ち上げる　npx gulp dev
  build, // ビルドする　npx gulp build
};