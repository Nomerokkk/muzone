const gulp = require('gulp'),
	sass = require('gulp-sass')(require('sass')),
	browserSync = require('browser-sync').create(),
	target = './src/';

gulp.task('scss', function () {
	return gulp.src(target + 'assets/scss/**/*.scss')
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(gulp.dest(target + 'assets/css'))
		.pipe(browserSync.reload({stream: true}));
});

gulp.task('php', function() {
	return gulp.src(target + '**/*.php')
		.pipe(browserSync.reload({stream: true}));
});

gulp.task('js', function() {
	return gulp.src([target + 'assets/js/*.js'])
		.pipe(browserSync.reload({stream: true}));
})

gulp.task('watch', function() {
	browserSync.init({
        proxy: 'http://muzone:8888/',
    });
	
	gulp.watch(target + 'assets/scss/**/*.scss', gulp.series('scss'));
	gulp.watch(target + '**/*.php', gulp.series('php'));
	gulp.watch(target + 'assets/js/*.js', gulp.series('js'));
});

exports.default = gulp.series('watch');