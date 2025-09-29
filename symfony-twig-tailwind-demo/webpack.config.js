const Encore = require('@symfony/webpack-encore');
const path = require('path');

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('app', './assets/styles/app.css')
  .cleanupOutputBeforeBuild()
  .enableSingleRuntimeChunk()
  .enablePostCssLoader()
;

module.exports = Encore.getWebpackConfig();
