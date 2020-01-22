const mix = require('laravel-mix');

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

mix   .js([
            'resources/js/multi/jquery-ui.min.js',
            'resources/js/multi/bootstrap.min.js',


            'resources/js/multi/custom.js',

            'resources/js/jquery.formalist.js',
            'resources/js/formulario.js',

            ], 'public/js/uane-js.js')
      .js('resources/js/app.js', 'public/js')
      .less('resources/less/style-main.less', 'public/css/style-main.css');

      // .styles([

      //       'resources/css/bootstrap.min.css',
      //       'resources/css/jquery-ui.min.css',
      //       'resources/css/animate.css',
      //       'resources/css/css-plugin-collections.css',

      //       'resources/css/menuzord-skins/menuzord-rounded-boxed.css',

      //       //Import clases and style main from theme
      //       // 'resources/css/font-awesome.min.css',
      //       // 'resources/css/font-awesome-animation.min.css',
      //       // 'resources/css/pe-icon-7-stroke.css',
      //       // 'resources/css/utility-classes.css',
      //       'resources/css/style-main.css',

            
      //       'resources/css/preloader.css',
      //       'resources/css/custom-bootstrap-margin-padding.css',
      //       'resources/css/responsive.css',


      //       // //Slider Revolution
      //       'resources/js/multi/revolution-slider/css/settings.css',
      //       'resources/js/multi/revolution-slider/css/layers.css',
      //       'resources/js/multi/revolution-slider/css/navigation.css',

      //       // //Theme color
      //       'resources/css/colors/style-uane.css',


      // ], 'public/css/uane-style.css');

