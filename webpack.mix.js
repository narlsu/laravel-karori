const { mix } = require('laravel-mix');
const path = require('path');
const glob = require('glob');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const PurifyCSSPlugin = require('purifycss-webpack');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/bin/materialize.js', 'public/js')

   .sass('resources/assets/sass/app.scss', 'public/css/app.css');
   		

module.exports = {
  entry: '/public/css/app.css',
  output: '/public/css/appurify.css',

  module: {
    rules: [
      {
        // test: /\.css$/,
        loader: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: 'css-loader'
        })
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin('/public/css/app.css'),
    // Make sure this is after ExtractTextPlugin!
    new PurifyCSSPlugin({
      // Give paths to parse for rules. These should be absolute!
      paths: glob.sync(path.join(__dirname, 'resources/views/**/*.blade.php')),
    })
  ]
};

