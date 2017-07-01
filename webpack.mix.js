const { mix } = require('laravel-mix');

const ADMIN_PATH = 'resources/assets/template/admin/';
const ADMIN_JS_CATEGORY_PATH = 'resources/assets/admin/category/';

const USER_PATH = 'resources/assets/template/customer/';
const USER_JS_PATH = USER_PATH + 'js/';
const USER_CSS_PATH = USER_PATH + 'css/';
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

mix.js('resources/assets/js/app.js', 'public/assets/js')
   .sass('resources/assets/sass/app.scss', 'public/assets/css');
mix.copy(USER_PATH + 'images', 'public/assets/images');
mix.copy(USER_PATH + 'products-images','public/assets/images/products-images');
mix.copy(USER_PATH + 'fonts', 'public/assets/fonts');

mix.styles([
    USER_CSS_PATH + 'blogmate.css',
    USER_CSS_PATH + 'bootstrap.min.css',
    USER_CSS_PATH + 'fancybox.css',
    USER_CSS_PATH + 'owl.carousel.css',
    USER_CSS_PATH + 'owl.theme.css',
    USER_CSS_PATH + 'revslider.css',
    USER_CSS_PATH + 'font-awesome.css',
    USER_CSS_PATH + 'style.css',
], 'public/assets/css/customer.min.css');

mix.scripts([
    USER_JS_PATH + 'jquery.min.js',
    USER_JS_PATH + 'bootstrap.min.js',
    USER_JS_PATH + 'common.js',
    USER_JS_PATH + 'revslider.js',
    USER_JS_PATH + 'owl.carousel.min.js',
    USER_JS_PATH + 'cloudzoom.js',
    USER_JS_PATH + 'cloud-zoom.js',
    USER_JS_PATH + 'jquery.jcarousel.min',
], 'public/assets/js/customer.min.js');

mix.copy([
    ADMIN_PATH + 'font_awesome/fonts',
], 'public/assets/fonts');
mix.copy('resources/assets/bower/sweetalert/dist/','public/assets/sweetalert/');

mix.copy(ADMIN_PATH + 'img', 'public/assets/img');
mix.copy(ADMIN_PATH + 'css/patterns', 'public/assets/css/patterns');


mix.styles([
    ADMIN_PATH + 'css/bootstrap.min.css',
    ADMIN_PATH + 'font_awesome/css/font_awesome.css',
    ADMIN_PATH + 'css/plugins/toastr/toastr.min.css',
    ADMIN_PATH + 'js/plugins/gritter/jquery.gritter.css',
    ADMIN_PATH + 'css/animate.css',
    ADMIN_PATH + 'css/style.css',
    ADMIN_PATH + 'css/plugins/iCheck/custom.css',
    ADMIN_PATH + 'css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css',
], 'public/assets/css/admin.min.css');

mix.scripts([
    ADMIN_PATH + 'js/jquery-2.1.1.js',
    ADMIN_PATH + 'js/bootstrap.min.js',
    ADMIN_PATH + 'js/plugins/metisMenu/jquery.metisMenu.js',
    ADMIN_PATH + 'js/plugins/slimscroll/jquery.slimscroll.min.js',
    ADMIN_PATH + 'js/plugins/flot/jquery.flot.js',
    ADMIN_PATH + 'js/plugins/flot/jquery.flot.tooltip.min.js',
    ADMIN_PATH + 'js/plugins/flot/jquery.flot.spline.js',
    ADMIN_PATH + 'js/plugins/flot/jquery.flot.resize.js',
    ADMIN_PATH + 'js/plugins/flot/jquery.flot.pie.js',
    ADMIN_PATH + 'js/plugins/peity/jquery.peity.min.js',
    ADMIN_PATH + 'js/demo/peity-demo.js',
    ADMIN_PATH + 'js/inspinia.js',
    ADMIN_PATH + 'js/plugins/pace/pace.min.js',
    ADMIN_PATH + 'js/plugins/jquery-ui/jquery-ui.min.js',
    ADMIN_PATH + 'js/plugins/gritter/jquery.gritter.min.js',
    ADMIN_PATH + 'js/plugins/sparkline/jquery.sparkline.min.js',
    ADMIN_PATH + 'js/demo/sparkline-demo.js',
    ADMIN_PATH + 'js/plugins/chartJs/Chart.min.js',
    ADMIN_PATH + 'js/plugins/toastr/toastr.min.js',
], 'public/assets/js/admin.min.js');

mix.styles([
    ADMIN_JS_CATEGORY_PATH + 'app/styles/styles.css',
    ADMIN_JS_CATEGORY_PATH + 'vendor/ducksboard-gridster.js-3140374/dist/jquery.gridster.css',
], 'public/assets/css/admin/category.min.css');

mix.scripts([
    ADMIN_JS_CATEGORY_PATH + 'vendor/ducksboard-gridster.js-3140374/dist/jquery.gridster.js',
    ADMIN_JS_CATEGORY_PATH + 'app/rich-functional-list/jquery.rich-functional-list.js',
    ADMIN_JS_CATEGORY_PATH + 'app/controllers/data-access.js',
    ADMIN_JS_CATEGORY_PATH + 'app/controllers/parse-data.js',
    ADMIN_JS_CATEGORY_PATH + 'app/controllers/parse-dom.js',
    ADMIN_JS_CATEGORY_PATH + 'app/controllers/controller.js',
    ADMIN_JS_CATEGORY_PATH + 'app/view.js',
], 'public/assets/js/admin/category.min.js');

mix.copy([
    ADMIN_JS_CATEGORY_PATH + 'resources'
], 'public/assets/resources');
