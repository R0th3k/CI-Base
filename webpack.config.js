const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const {VueLoaderPlugin} = require('vue-loader')
const CopyWebpackPlugin = require('copy-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
    output: {
        //publicPath: '',
        path: path.resolve(__dirname, './'),
        filename: "assets/js/app.js"
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js'
        },
        extensions: ['*', '.js', '.vue', '.json']
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader', {
                        loader: 'sass-loader',
                        options: {
                            implementation: require('sass'),
                            sassOptions: {
                                indentWidth: 4
                            }
                        }
                    }

                ]
            }, {
                test: /\.css$/i,
                use: [
                    'style-loader', {
                        loader: "file-loader",
                        options: {
                            name: "assets/css/[name].css"
                        }
                    },
                    'css-loader'
                ]
            }, {
                test: [
                    /\.js$/, /\.jsx$/
                ],
                exclude: /(node_modules)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [
                            '@vue/babel-preset-app', '@babel/preset-env'
                        ],
                        plugins: ['@babel/plugin-proposal-optional-chaining']
                    }
                }
            }, {
                test: /\.vue$/,
                loader: 'vue-loader'
            }, {
                test: /\.(svg|png|jpe?g|gif)$/i,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            publicPath: '../images',
                            outputPath: 'assets/images',
                            name: '[name].[ext]'
                        }
                    }
                ]
            }, {
                test: /\.svg$/,
                loader: ['svg-inline-loader', 'svg-url-loader']
            }
        ]
    },

    plugins: [
        new VueLoaderPlugin(),
        new MiniCssExtractPlugin({filename: 'assets/css/app.css'}),
        new CopyWebpackPlugin([
            {
                from: 'src/images',
                to: 'assets/images'
            }
        ]),
        new BrowserSyncPlugin({
            open: false,
            host: '127.1.1.0',
            port: 3000,
            proxy: 'http://localhost:8888',
            files: [
                {
                    match: [
                        '*.php', '**/*.php', 'assets/**/*.css', 'src/**/*.vue', '**/*.js'

                    ],
                    fn: function (event, file) {
                        if (event === "change") {
                            const bs = require('browser-sync').get('bs-webpack-plugin');
                            bs.reload();
                        }
                    }
                }
            ]
        }, {
            reload: true,
            name: 'bs-webpack-plugin'
        })
    ]
}
