const gulp = require("gulp");
const sass = require("gulp-dart-sass");

// 動的インポートを使用して gulp-filter をインポート
const filterPromise = import("gulp-filter");

// SCSSをコンパイルするタスク
gulp.task("sass", function () {
  // '_'を含むファイルを除外するためのフィルターを作成
  return filterPromise.then(({ default: filter }) => {
    const excludeUnderscoreFiles = filter(["**", "!**/_*.scss"]);

    return gulp
      .src("./scss/**/*.scss") // 入力元のSCSSファイルのパス
      .pipe(excludeUnderscoreFiles) // '_'を含むファイルを除外
      .pipe(sass().on("error", sass.logError)) // SCSSをコンパイル
      .pipe(gulp.dest("./assets/css")); // 出力先のディレクトリ
  });
});

// ファイルの変更を監視して自動的にコンパイルするタスク
gulp.task("watch", function () {
  gulp.watch("./scss/**/*.scss", gulp.series("sass")); // 監視するファイルのパスとタスクの実行
});

// デフォルトのタスクを設定（watchタスクをデフォルトで実行）
gulp.task("default", gulp.series("watch"));
