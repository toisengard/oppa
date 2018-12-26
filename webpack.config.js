// TODO: PurifyCSS

let path 			   = require('path');

let assetsDirectory    = './wp-content/themes/opa/assets';

let assets 			   = {
	app: [
		assetsDirectory + '/js/app.js',
		assetsDirectory + '/sass/app.scss'
	],

	vendor: ['vue', 'axios']
};

let ExtractTextPlugin  = require("extract-text-webpack-plugin");

let CleanWebpackPlugin = require('clean-webpack-plugin');


module.exports = {
	entry: assets,

	output: {
		path: path.resolve(__dirname, assetsDirectory + '/dist'),
		filename: 'js/[name].js'
	},

	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: [
					'jshint-loader',

					{
						loader: 'babel-loader',
						options: {
							presets: ['@babel/preset-env']
						}
					}
				]
			},

			{
				test: /\.css$/,
				use: ExtractTextPlugin.extract({
					use: 'css-loader',
					fallback: 'style-loader'
		        })
			},
			
			{
				test: /\.scss$/,
				use: ExtractTextPlugin.extract({
					use: [
						{
							loader: 'css-loader',
							options: { url: false }
						},

						'sass-loader'
					],

					fallback: 'style-loader'
				})
			},

			{
				test: /\.vue$/,
				loader: 'vue-loader'
			}
		]
	},

	resolve: {
		alias: {
			'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
		}
	},

	plugins: [
		new CleanWebpackPlugin([assetsDirectory + '/dist'], {
			root:     __dirname,
			verbose:  true,
			dry:      false
		}),

		new ExtractTextPlugin('css/[name].css')
	],

	watch: true
};
