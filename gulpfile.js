var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.js',
        'js.js'
    ], 'public/assets/js/js.js');

    mix.styles([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '../../../node_modules/font-awesome/css/font-awesome.css',
        'landing-page.css'
    ], 'public/assets/css/css.css');

    mix.copy(
        'node_modules/font-awesome/fonts', 'public/assets/fonts',
        'node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/assets/fonts'
    );
    //mix.sass('app.scss');
});
