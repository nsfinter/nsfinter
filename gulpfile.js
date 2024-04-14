//----------------------------------------------------------------------
//  モード
//----------------------------------------------------------------------
"use strict";

//----------------------------------------------------------------------
//  モジュール読み込み
//----------------------------------------------------------------------
const gulp = require("gulp");
const { src, dest, series, parallel, watch, tree } = require("gulp");
const bs = require("browser-sync");
const sass = require("gulp-sass")(require("sass"));

//----------------------------------------------------------------------
//  関数定義
//----------------------------------------------------------------------
function bsInit(done) {
  bs.init({
    proxy: "localhost:8090",        // ローカルにある「Site Domain」に合わせる
    notify: false,                  // ブラウザ更新時に出てくる通知を非表示にする
    open: "external",               // ローカルIPアドレスでサーバを立ち上げる
  });

  done();
}

function bsReload(done) {
  bs.reload();                      // ブラウザのリロード

  done();
}

function sassTask(done) {
  src("./sass/**/*.scss")                   // コンパイルするソース
  .pipe(sass({outputStyle: "expanded"}))    // Sassのコンパイルを実行
  .pipe(dest("."));                         // 保存する場所 

  done();
}

function watchTask(done) {
  watch([
    "./*.php",
    "!./node_modules/**",
  ],
  series(bsReload));
}

function watchSass(done) {
  watch([
    "./sass/**/*.scss",
  ],
  series(sassTask, bsReload));
}

//----------------------------------------------------------------------
//  タスク定義
//----------------------------------------------------------------------
exports.bs = series(bsInit, bsReload, parallel(watchTask, watchSass));
exports.sa = series(sassTask);

/************************************************************************/
/*  END OF FILE                                                         */
/************************************************************************/