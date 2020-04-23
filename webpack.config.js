var Encore = require('@symfony/webpack-encore');
const CopyWebpackPlugin = require('copy-webpack-plugin');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */

    //.addEntry('page1', './assets/js/page1.js')
    //.addEntry('page2', './assets/js/page2.js')
    .addStyleEntry('css/font_awesome','./assets/fonts/font_awesome/css/font-awesome.css')
    .addStyleEntry('css/animate_css','./assets/css/animate.css')
    .addStyleEntry('css/bootstrap_css','./assets/css/bootstrap.css')
    .addStyleEntry('css/categories_nav_styles','./assets/css/categories_nav_styles.css')
    .addStyleEntry('css/create_proposal','./assets/css/create-proposal.css')
    .addStyleEntry('css/croppie_css','./assets/css/croppie.css')
    .addStyleEntry('css/custom_css','./assets/css/custom.css')
    .addStyleEntry('css/desktop_proposals','./assets/css/desktop_proposals.css')
    .addStyleEntry('css/easy_autocomplete_css','./assets/css/easy-autocomplete.min.css')
    .addStyleEntry('css/emoji_css','./assets/css/emoji.css')
    .addStyleEntry('css/fontawesome_stars','./assets/css/fontawesome-stars.css')
    .addStyleEntry('css/footer_css','./assets/css/footer.css')
    .addStyleEntry('css/freelancers_css','./assets/css/freelancers.css')
    .addStyleEntry('css/freelancers_back','./assets/css/freelancersBack.css')
    .addStyleEntry('css/home_css','./assets/css/home.css')
    .addStyleEntry('css/inbox_style','./assets/css/inbox-style.css')
    .addStyleEntry('css/knowledge_bank_css','./assets/css/knowledge_bank.css')
    .addStyleEntry('css/knowledge_base_css','./assets/css/knowledge_base.css')
    .addStyleEntry('css/mobile_proposals_css','./assets/css/mobile_proposals.css')
    .addStyleEntry('css/msdropdown_css','./assets/css/msdropdown.css')
    .addStyleEntry('css/owl_carousel_css','./assets/css/owl.carousel.css')
    .addStyleEntry('css/owl_theme_default_css','./assets/css/owl.theme.default.css')
    .addStyleEntry('css/proposalStyles_css','./assets/css/proposalStyles.css')
    .addStyleEntry('css/scoped_responsive_and_nav','./assets/css/scoped_responsive_and_nav.css')
    .addStyleEntry('css/styles','./assets/css/styles.css')
    .addStyleEntry('css/sweat_alert_css','./assets/css/sweat_alert.css')
    .addStyleEntry('css/tagsinput_css','./assets/css/tagsinput.css')
    .addStyleEntry('css/user_nav_styles_','./assets/css/user_nav_styles.css')
    .addStyleEntry('css/vesta_homepage_css','./assets/css/vesta_homepage.css')
    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .copyFiles([
        {from: './node_modules/ckeditor/', to: 'ckeditor/[path][name].[ext]', pattern: /\.(js|css)$/, includeSubdirectories: false},
        {from: './node_modules/ckeditor/adapters', to: 'ckeditor/adapters/[path][name].[ext]'},
        {from: './node_modules/ckeditor/lang', to: 'ckeditor/lang/[path][name].[ext]'},
        {from: './node_modules/ckeditor/plugins', to: 'ckeditor/plugins/[path][name].[ext]'},
        {from: './node_modules/ckeditor/skins', to: 'ckeditor/skins/[path][name].[ext]'}
    ])
    .splitEntryChunks()
    .addPlugin(new CopyWebpackPlugin([
        // copies to {output}/static
        { from: './assets/images', to: 'images' },
        { from: './assets/fonts', to: 'fonts' },
        { from: './assets/admin', to: 'admin' },
        { from: './assets/js', to: 'js' }
    ]))
    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()
    .autoProvidejQuery()
    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })


    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    // uncomment if you use API Platform Admin (composer req api-admin)
    //.enableReactPreset()
    //.addEntry('admin', './assets/js/admin.js')
;

module.exports = Encore.getWebpackConfig();
