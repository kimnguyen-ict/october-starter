let mix = require('laravel-mix');
let path = require('path')

require('dotenv').config({
    silent: true,
})

const publicPath = path.normalize('./themes/tokyo-tower/assets/builds');
const srcPath = path.normalize('./src');

mix.setPublicPath(publicPath)
    .setResourceRoot(srcPath)
    .js(`${srcPath}/js/app.js`, 'dist/js')
    .sass(`${srcPath}/sass/app.scss`, 'dist/css')

if (process.env.BROWSER_SYNC === 'true') {
    const syncHost = process.env.BROWSER_SYNC_HOST || 'localhost'
    const syncPort = process.env.BROWSER_SYNC_PORT || 3000
    const proxyTarget = process.env.APP_PORT == 80
        ? process.env.APP_DOMAIN
        : `${process.env.APP_DOMAIN}:${process.env.APP_PORT}`

    mix.browserSync({
        host: syncHost,
        port: syncPort,
        proxy: { target: proxyTarget },
        notify: false,
        files: [
            "themes/tokyo-tower/assets/dist/css/*.css",
            "themes/tokyo-tower/**/*.htm",
            "themes/tokyo-tower/assets/dist/js/*.js",
        ]
    })
}

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.less(src, output);
// mix.stylus(src, output);
// mix.browserSync('my-site.dev');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them
// touched. purifyCss: false, // Remove unused CSS selectors. uglify: {}, // Uglify-specific options.
// https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin postCss: [] // Post-CSS options:
// https://github.com/postcss/postcss/blob/master/docs/plugins.md });
