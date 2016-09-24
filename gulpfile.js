var gulp = require('gulp'),
   watch = require('gulp-watch'),
   prefixer = require('gulp-autoprefixer'),
   uglify = require('gulp-uglify'),
   sass = require('gulp-sass'),
   rigger = require('gulp-rigger'),
   sourcemaps = require('gulp-sourcemaps'),
   cssmin = require('gulp-cssnano'),
   imagemin = require('gulp-imagemin'),
   pngquant = require('imagemin-pngquant'),
   rimraf = require('rimraf'),
   browserSync = require("browser-sync"),
   concat = require('gulp-concat'),
   stripDebug = require('gulp-strip-debug'),
   spritesmith = require('gulp.spritesmith'),
   reload = browserSync.reload;




var path = {
   build: {
      php: 'dist/',
      js: 'dist/js/',
      css: 'dist/css/',
      img: 'dist/images/',
      uploads: 'dist/uploads/',
      fonts: 'dist/fonts/',
      sprite: 'dist/images/',
      spriteScss: 'src/style/'
   },
   src: {
      php: 'src/php/*.php',
      js: [
         'src/js/main.js',
         'bower_components/jquery/dist/jquery.js',
         'bower_components/bootstrap/dist/js/bootstrap.js',
         'bower_components/Swiper/dist/js/swiper.js',
         'bower_components/masonry/dist/masonry.pkgd.js',
         'bower_components/social-likes/dist/social-likes.min.js',
         'bower_components/slick-carousel/slick/slick.js'
      ],
      style: 'src/style/styles.scss',
      img: 'src/images/**/*.*',
      uploads: 'src/uploads/**/*.*',
      fonts: 'src/fonts/**/*.*',
      // fontsAwesome: 'bower_components/components-font-awesome/fonts/*.*',
      Ionicons: 'bower_components/Ionicons/fonts/*.*',
      sprite: 'src/sprite/*.*'
   },
   watch: {
      php: 'src/php/*.php',
      js: 'src/js/**/*.js',
      style: 'src/style/**/*.scss',
      img: 'src/img/**/*.*',
      fonts: 'src/fonts/**/*.*',
      sprite: 'src/sprite/*.*'
   },
   clean: './dist/'
};



// tasks
gulp.task('sprites', function() {
   var spriteData =
      gulp.src(path.src.sprite)
      .pipe(spritesmith({
         imgName: 'sprite.png',
         cssName: 'sprite.scss',
         algorithm: 'top-down',

      }));
   spriteData.css.pipe(gulp.dest(path.build.spriteScss));
   spriteData.img.pipe(gulp.dest(path.build.sprite));

});



// task php
gulp.task('php:build', function() {
   gulp.src(path.src.php)
      .pipe(gulp.dest(path.build.php))
      .pipe(reload({
         stream: true
      }));
});



gulp.task('js:build', function() {
   gulp.src(path.src.js)
      .pipe(concat('main.js'))
      .pipe(stripDebug())
      .pipe(uglify())
      .pipe(gulp.dest(path.build.js))
      .pipe(reload({
         stream: true
      }));
});



gulp.task('style:build', function() {
   gulp.src(path.src.style)
      //.pipe(sourcemaps.init())
      .pipe(concat('styles.css'))
      .pipe(sass().on('error', sass.logError))
      .pipe(prefixer('last 40 versions', '> 5%', 'ie 8', 'ie 7', 'Firefox ESR'))
      .pipe(cssmin())
      //.pipe(sourcemaps.write())
      .pipe(gulp.dest(path.build.css))
      .pipe(reload({
         stream: true
      }));
});



gulp.task('image:build', function() {
   gulp.src(path.src.img)
      .pipe(imagemin({
         progressive: true,
         svgoPlugins: [{
            removeViewBox: false
         }],
         use: [pngquant()],
         interlaced: true
      }))
      .pipe(gulp.dest(path.build.img));
   gulp.src(path.src.uploads)
      .pipe(gulp.dest(path.build.uploads))
      .pipe(reload({
         stream: true
      }));
});



gulp.task('fonts:build', function() {

   gulp.src(path.src.fontsAwesome)
      .pipe(gulp.dest(path.build.fonts));

   gulp.src(path.src.Ionicons)
      .pipe(gulp.dest(path.build.fonts));

   return gulp.src(path.src.fonts)
      .pipe(gulp.dest(path.build.fonts));
});



gulp.task('build', [
   //'sprites',
   'php:build',
   'js:build',
   'style:build',
   'fonts:build',
   'image:build'
]);



gulp.task('watch', function() {
   watch([path.watch.php], function(event, cb) {
      gulp.start('php:build');
   });
   watch([path.watch.style], function(event, cb) {
      gulp.start('style:build');
   });
   watch([path.watch.js], function(event, cb) {
      gulp.start('js:build');
   });
   watch([path.watch.img], function(event, cb) {
      gulp.start('image:build');
   });
   watch([path.watch.fonts], function(event, cb) {
      gulp.start('fonts:build');
   });
   //  watch([path.watch.sprite], function(event, cb) {
   //      gulp.start('sprites');
   //  });
});



gulp.task('webserver', function() {
   browserSync({
      proxy: "devs.template/dist",
      notify: false
   });
});


gulp.task('clean', function(cb) {
   rimraf(path.clean, cb);
});

gulp.task('default', [
   'build',
   'webserver',
   'watch'
]);
