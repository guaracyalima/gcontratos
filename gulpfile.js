var elixir = require('laravel-elixir'),
    liveReload = require('gulp-livereload'),
    clean = require('gulp-clean'),
    gulp = require('gulp');


var config = {
    assets_path: './resources/assets',
    build_path: './public/build'
};

//global
config.bower_path = config.assets_path + '/../bower_components';


//js
config.build_path_js = config.build_path + '/js';

config.build_vendor_path_js = config.build_path_js + '/vendor';

config.vendor_path_js = [
    config.bower_path + '/jquery/dist/jquery.min.js',
    config.bower_path + '/bootstrap/dist/bootstrap.min.js',
    config.bower_path + '/angular/angular.min.js',
    config.bower_path + '/angular-route/angular-route.min.js',
    config.bower_path + '/angular-resource/angular-resource.min.js',
    config.bower_path + '/angular-animate/angular-animate.min.js',
    config.bower_path + '/angular-messages/angular-messages.min.js',
    config.bower_path + '/angular-bootstrap/ui-boostrap.min.js',
    config.bower_path + '/angular-strap/dist/modules/navbar.min.js',
];



//css

config.build_path_css = config.build_path + '/css';

config.build_vendor_path_css = config.build_path_css + '/vendor';

config.vendor_path_css = [

    config.bower_path + '/bootstrap/dist/bootstrap.min.css',
    config.bower_path + '/bootstrap/dist/bootstrap-theme.min.css',
];

//tarefas

gulp.task('copy-styles', function () {
    //locais
    gulp.src([
        config.assets_path + '/css/**/*.css'
    ])
        .pipe(gulp.dest(config.build_path_css))
        .pipe(liveReload());

    //de terceiros
    gulp.src([
        config.vendor_path_css + '/css/**/*.css'
    ])
        .pipe(gulp.dest(config.build_vendor_path_css))
        .pipe(liveReload());
});

gulp.task('copy-scripts', function () {
    gulp.src([
        config.assets_path + '/js/**/*.js'
    ])
        .pipe(gulp.dest(config.build_path_js))
        .pipe(liveReload());

    gulp.src([
        config.vendor_path_js + '/js/**/*.js'
    ])
        .pipe(gulp.dest(config.build_vendor_path_js))
        .pipe(liveReload());
});



gulp.task('watch-dev', function () {
    liveReload.listen();
   gulp.start('copy-styles', 'copy-scripts');
    gulp.watch(config.assets_path + '/**', ['copy-styles', 'copy-scripts']);
});
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
});
