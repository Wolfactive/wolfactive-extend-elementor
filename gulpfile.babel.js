import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import browserSync from "browser-sync";
import license  from "gulp-header-license";
const PRODUCTION = yargs.argv.prod;
const server = browserSync.create();
export const serve = done => {
  server.init({
    proxy: "http://localhost/ella-theme" // put your local website link here
  });
  done();
};

export const styles = () => {
  var year = (new Date()).getFullYear();
  return src('src/css/main.scss')
  .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
  .pipe(sass().on('error', sass.logError))
  .pipe(gulpif(PRODUCTION, postcss([ autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4')])))
  .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
  .pipe(license('/* Copyright (c) ${year}, Ella Theme - Halosoft - Wolfactive */', {year: year}))
  .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
  .pipe(dest('dist/css'))
  .pipe(server.stream());
}

export const images = () => {
  return src('src/images/**/*.{jpg,jpeg,png,svg,gif,webp}')
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(dest('dist/images'));
}

export const scripts = () => {
  var year = (new Date()).getFullYear();
  return src(['src/js/root.js'])
  .pipe(named())
  .pipe(webpack({
    module: {
      rules: [
        {
          test: /\.js$/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        }
      ]
    },
    mode: PRODUCTION ? 'production' : 'development',
    devtool: !PRODUCTION ? 'inline-source-map' : false,
    output: {
      filename: '[name].js'
    },
  }))
  .pipe(license('/* Copyright (c) ${year}, Ella Theme - Halosoft - Wolfactive */', {year: year}))
  .pipe(dest(['dist/js']));
}

export const copy = () => {
  return src(['src/**/*','!src/{images,js,css}','!src/{images,js,css}/**/*'])
    .pipe(dest('dist'));
}

export const reload = done => {
  server.reload();
  done();
};

export const watchForChanges = () => {
  watch('src/css/**/*.scss',series(styles));
  watch('src/images/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
  watch(['src/**/*','!src/{images,js,css}','!src/{images,js,css}/**/*'], series(copy, reload));
  watch('src/js/**/*.js', series(scripts, reload));
  watch("**/*.php", series(reload));
}

export const clean = () => del(['dist/js','dist/css/main.scss','dist/css/admin.scss','dist/css/rtl.scss','dist/images']);

export const dev = series(clean, parallel(styles, images, copy, scripts), serve, watchForChanges);
export const build = series(clean, parallel(styles, images, copy, scripts,));
export default dev;
