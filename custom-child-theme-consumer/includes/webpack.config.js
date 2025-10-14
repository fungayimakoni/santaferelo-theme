const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
    // const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const WebpackNotifierPlugin = require("webpack-notifier")

let mode = "development"
let target = "web"
let devtool = "source-map"
if (process.env.NODE_ENV === 'production') {
    mode = "production"
    target = "browserslist",
        devtool = ""
}

module.exports = {
    mode: mode,
    target: target,
    output: {
        assetModuleFilename: "images/[name][ext][query]",
    },
    entry: {
        main: [
            path.resolve(__dirname, './src/js/app.js'),
            path.resolve(__dirname, './src/scss/app.scss')
        ],
        // vendor: path.resolve(__dirname, "/src/js/vendor.js")
    },
    module: {
        rules: [

            {
                test: /\.(png|jpe?g|gif|svg)$/i,
                exclude: /node_modules/,
                type: "asset/resource"
            },

            {
                test: /\.(s[ac]|c)ss$/i,
                exclude: /node_modules/,
                use: [

                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            publicPath: "",
                        }
                    },
                    'css-loader',
                    'postcss-loader',
                    'sass-loader',
                ],
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader"
                }
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/,
                loader: "file-loader",
                options: {
                  outputPath: "../fonts",
                }
            },
        ]
    },
    plugins: [
        new MiniCssExtractPlugin(),
        new WebpackNotifierPlugin({
            title: 'Compiling..., fool!',
            excludeWarnings: false,
            alwaysNotify: true,
            // contentImage: path.join(__dirname, 'wp-logo.png')
        }),
    ],
    devtool: devtool,
    cache: {
        type: "filesystem"
    },
    devServer: {
        hot: true,
    },
    stats: {
        children: true,
    }


}