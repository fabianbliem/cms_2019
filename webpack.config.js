const path = require("path");
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const globImporter = require('node-sass-glob-importer');

module.exports = {
  entry: "./src/index.js",
  output: {
    filename: "main.js",
    path: path.resolve(__dirname, "dist")
  },
  
  devServer: {
    contentBase: './dist'
  },

  module: {
    rules: [

      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },

      {
        test: /\.s[ac]ss$/i,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,        
            options: {
              hmr: process.env.NODE_ENV === 'development',
            },
          },
          'css-loader',
          {
            loader : 'sass-loader',
            options: {
              sassOptions: {
                importer: globImporter()
              }
            }
          },
        ],
      },

      {
        test: /\_.*\.html$/,
        include: [path.resolve(__dirname, 'src/partials')],
        use: [{
          loader: 'html-loader'
        }]
      },

      {
        test: /\.(png|jpe?g|svg|jpg)$/i,
        use:{
          loader: 'file-loader',
          options: {
            name: './[name].[hash].[ext]',
            outputPath: 'images'
          },
        }
      },

    ]
  },

  resolve: {
    alias: {
      'imagesImg': path.resolve(__dirname, 'src/assets/images')
    }
  },
  
  plugins: [
    new CleanWebpackPlugin(),

    new MiniCssExtractPlugin({
      filename: '[name].[hash].css',
      chunkFilename: '[id].[hash].css',
    }),

    new HtmlWebpackPlugin({
      template: "./src/index.html",
      inject: true,
      hash: true,
    }),

    new HtmlWebpackPlugin({
      template: "./src/about.html",
      filename: "about.html",
      inject: true,
      hash: true,
    }),

    
  ]
};