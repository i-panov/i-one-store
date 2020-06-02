let path = require('path');
let MiniCssExtractPlugin = require('mini-css-extract-plugin');
let conf = {
	entry: './web/index.js',
	output: {
		path: path.resolve(__dirname, './web/dist'),
		filename: 'main.js',
		publicPath: 'dist/'
	},
	devServer: {
		overlay: true,
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: "[name].css",
		})
	],
	module: {
		rules: [
			{
				test: /\.js$/,
				loader: 'babel-loader',
				exclude: '/node_modules/',
			},
			{
        		// Fonts
		        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
		        loader: "file-loader",
		        options: {
		          name: "[name].[ext]"
		        }
		    },
			{
				test: /\.(s*)css$/,
				use: [
					'style-loader',
					 MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {sourceMap:true}
					}, {
						loader: 'postcss-loader',
						options: {sourceMap:true, config:{path: 'config/postcss.config.js'}}
					}, {
						loader: 'sass-loader',
						options: {sourceMap:true}
					},
				],
				// exclude: '/node_modules/',
			}
		],
	},
};

module.exports = conf;
