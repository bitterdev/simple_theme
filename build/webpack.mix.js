let mix = require('laravel-mix');
const path = require("path");

mix.webpackConfig({
    externals: {
        jquery: "jQuery",
        bootstrap: true,
        vue: "Vue",
        moment: "moment",
    }
});

mix.setResourceRoot('./');
mix.setPublicPath('../themes/simple_theme');

mix
    .copyDirectory("node_modules/@fontsource/poppins", "../themes/simple_theme/css/fonts/poppins")
    .sass('../themes/simple_theme/css/presets/default/main.scss', '../themes/simple_theme/css/skins/default.css', {
        sassOptions: {
            includePaths: [
                path.resolve(__dirname, './node_modules/')
            ]
        }
    })
    .js('assets/themes/simple_theme/js/main.js', '../themes/simple_theme/js').vue()