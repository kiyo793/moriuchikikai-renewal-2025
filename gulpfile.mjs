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

const paths = {
  images: "src/assets/img/**/*.{jpg,jpeg,png}",
  output: "public/assets/img",
};

// libフォルダをコピー
export function copyLib() {
  return gulp
    .src("./src/assets/lib/**/*")
    .pipe(gulp.dest("./public/assets/lib/"));
}



// CSSコンパイル
export function compileSass() {
  return gulp
    .src("./src/assets/sass/**/*.scss")
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssSorter()]))
    .pipe(nmq())
    .pipe(gulp.dest("./public/assets/css/"))
    .pipe(cleanCss())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("./public/assets/css/"));
}

// JS圧縮
export function minJS() {
  return gulp
    .src("./src/assets/js/**/*.js")
    .pipe(gulp.dest("./public/assets/js/"))
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("./public/assets/js/"));
}

// HTML整形
export function formatHTML() {
  return gulp
    .src("./src/**/*.html")
    .pipe(htmlBeautify({ indent_size: 2, indent_with_tabs: true }))
    .pipe(gulp.dest("./public"));
}

// キャッシュバスティング
export function cacheBusting() {
  return gulp
    .src("./public/**/*.html")
    .pipe(replace(/\.(js|css)\?ver/g, ".$1?ver=" + hash))
    .pipe(gulp.dest("./public"));
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
      .pipe(newer("public/assets/img"))
      .pipe(gulp.dest("public/assets/img"));
  }

// ブラウザSync 初期化＆リロード
export function browserInit(done) {
  browserSync.init({
    server: { baseDir: "./public/" },
    port: 3000,
    open: false,
  });
  done();
}
export function browserReload(done) {
  browserSync.reload();
  done();
}

// ウォッチ
export function watchFiles() {
  gulp.watch("./src/assets/sass/**/*.scss", gulp.series(compileSass, browserReload));
  gulp.watch("./src/assets/js/**/*.js", gulp.series(minJS, browserReload));
  gulp.watch("./src/assets/img/**/*", gulp.series(resizeImages, browserReload));
  gulp.watch("./src/assets/img/**/*.svg", gulp.series(copySvgImages, browserReload));
  gulp.watch("./src/**/*.html", gulp.series(formatHTML, browserReload));
}

// タスク定義
const build = gulp.parallel(resizeImages, copySvgImages, compileSass, minJS, formatHTML, copyLib);
const dev = gulp.parallel(browserInit, watchFiles, copyLib);


export {
  resizeImages as minImage,
  minJS as minJs,
  formatHTML as html,
  cacheBusting as cache,
  dev, // ブラウザを立ち上げる　npx gulp dev
  build, // ビルドする　npx gulp build
};
