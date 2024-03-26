const gulp = require("gulp");
const sass = require("gulp-dart-sass");

// SCSSをコンパイルするタスク
gulp.task("sass", function () {
  return gulp
    .src("./src/scss/**/*.scss") // 入力元のSCSSファイルのパス
    .pipe(sass().on("error", sass.logError)) // SCSSをコンパイル
    .pipe(gulp.dest("./assets/css")); // 出力先のディレクトリ
});

// ファイルの変更を監視して自動的にコンパイルするタスク
gulp.task("watch", function () {
  gulp.watch("./src/scss/**/*.scss", gulp.series("sass")); // 監視するファイルのパスとタスクの実行
});

// デフォルトのタスクを設定（watchタスクをデフォルトで実行）
gulp.task("default", gulp.series("watch"));
