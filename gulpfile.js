const gulp = require("gulp");
const concat = require("gulp-concat");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify-es").default;
const obfuscator = require("gulp-javascript-obfuscator");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");

/** função para compilar SASS */
function compilaSASS() {
  return gulp
    .src("resources/sass/*.scss")
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .pipe(
      autoprefixer({
        browsers: ["last 2 versions"],
        cascade: false,
      })
    )
    .pipe(gulp.dest("public/css/"));
}

/** tarefa para iniciar a função compilaSASS */
gulp.task("sass", compilaSASS);

function pluginsCSS() {
  return gulp
    .src([
      "node_modules/uikit/dist/css/uikit.css",
      "node_modules/nouislider/distribute/nouislider.css",
    ])
    .pipe(concat("plugins.min.css"))
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .pipe(
      autoprefixer({
        browsers: ["last 2 versions"],
        cascade: false,
      })
    )
    .pipe(gulp.dest("public/css/"));
}

/** tarefa para iniciar a função pluginsCSS */
gulp.task("pluginscss", pluginsCSS);

/** função para compilar os scripts JS */
function compilaScriptsJS() {
  return gulp
    .src("resources/js/scripts/*.js")
    .pipe(concat("app.js"))
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(obfuscator())
    .pipe(uglify())
    .pipe(gulp.dest("public/js/"));
}

/** tarefa para iniciar a função compilaScriptsJS */
gulp.task("scriptsjs", compilaScriptsJS);

/** função para compilar o plugin Paho MQTT */
function compilaPahoMQTT() {
  return gulp
    .src("node_modules/paho-mqtt/paho-mqtt.js")
    .pipe(concat("paho-mqtt.min.js"))
    .pipe(obfuscator())
    .pipe(uglify())
    .pipe(gulp.dest("public/js/"));
}

/** tarefa para iniciar a função compilaPahoMQTT */
gulp.task("pahomqtt", compilaPahoMQTT);

/** função para compilar os scripts JS de conexão com a nuvem */
function compilaConexaoNuvemJS() {
  return gulp
    .src("resources/js/conexao-nuvem/*.js")
    .pipe(concat("gerenciamento-nuvem.js"))
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(obfuscator())
    .pipe(uglify())
    .pipe(gulp.dest("public/js/"));
}

/** tarefa para iniciar a função compilaScriptsJS */
gulp.task("conexaonuvemjs", compilaConexaoNuvemJS);

/** função para compilar os plugins JS */
function pluginsJS() {
  return gulp
    .src([
      "node_modules/jquery/dist/jquery.js",
      "node_modules/uikit/dist/js/uikit.js",
      "node_modules/uikit/dist/js/uikit-icons.js",
      "node_modules/nouislider/distribute/nouislider.js",
      "node_modules/wnumb/wNumb.js",
    ])
    .pipe(concat("plugins.min.js"))
    .pipe(uglify())
    .pipe(obfuscator())
    .pipe(gulp.dest("public/js/"));
}

/** tarefa para iniciar a função pluginJS */
gulp.task("pluginsjs", pluginsJS);

/** função de watch do gulp */
function watch() {
  gulp.watch("resources/sass/*.scss", compilaSASS);
  gulp.watch(
    [
      "node_modules/uikit/dist/uikit.css",
      "node_modules/nouislider/distribute/nouislider.css",
    ],
    pluginsCSS
  );
  gulp.watch("resources/js/scripts/*.js", compilaScriptsJS);
  gulp.watch("resources/js/plugins/mqttws31.js", compilaPahoMQTT);
  gulp.watch("resources/js/conexao-nuvem/*.js", compilaConexaoNuvemJS);
  gulp.watch(
    [
      "node_modules/jquery/dist/jquery.js",
      "node_modules/uikit/dist/js/uikit.js",
      "node_modules/uikit/dist/js/uikit-icons.js",
      "node_modules/nouislider/distribute/nouislider.js",
      "node_modules/wnumb/wNumb.js",
    ],
    pluginsJS
  );
}

/** tarefa para iniciar a função watch */
gulp.task("watch", watch);

/** inicia todas as tarefas */
gulp.task(
  "default",
  gulp.parallel(
    "watch",
    "sass",
    "pluginscss",
    "scriptsjs",
    "pahomqtt",
    "conexaonuvemjs",
    "pluginsjs"
  )
);
