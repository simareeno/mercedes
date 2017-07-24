const gulp = require('gulp'),
	path = require('path'),
	less = require('gulp-less'),
	autoPrefixer = require('autoprefixer'),
	minify = require('cssnano'),
	sourceMaps = require('gulp-sourcemaps'),
	concat = require('gulp-concat'),
	plumber = require('gulp-plumber'),
	notify = require('gulp-notify'),
	cache = require('gulp-cache'),
	util = require('gulp-util'),
	uglify = require('gulp-uglify'),
	postCss = require('gulp-postcss'),
	imageMin = require('imagemin'),
	browserSync = require('browser-sync').create(),
	rollup = require('gulp-rollup'),
	babel = require('rollup-plugin-babel'),
	useref = require('gulp-useref'),
	runSequence = require('run-sequence'),
	webpack = require('webpack-stream'),
	del = require('del'),
	argv   = require('minimist')(process.argv);
	gulpif = require('gulp-if');
	prompt = require('gulp-prompt');
	rsync  = require('gulp-rsync');
	join = path.join;


const DEST = 'wp-content/themes/simareeno',
	SRC = 'src',
	TEMPLATES = join(SRC, 'templates'),
	STYLES = join(SRC, 'styles'),
	SCRIPTS = join(SRC, 'scripts');
	IMAGES = join(SRC, 'images');

let production = !!util.env.production;

gulp.task('less', function() {

	const processors = [
		autoPrefixer({browsers: ['last 2 versions']}),
		minify()
	];

	return gulp.src(join(STYLES, 'main.less'))
		.pipe(plumber({
			errorHandler: notify.onError(function(err) {
				return {
					title: "LESS",
					message: err.message
				}
			})
		}))
		.pipe(!production ? sourceMaps.init() : util.noop())
		.pipe(less())
		.pipe(postCss(processors))
		.pipe(concat('styles.css'))
		.pipe(!production ? sourceMaps.write() : util.noop())
		.pipe(gulp.dest(join(DEST, 'styles')));
});


gulp.task('images', function(){
	return gulp.src(join(IMAGES, '**/*.+(png|jpg|jpeg|gif|svg)'))
	.pipe(gulp.dest(join(DEST, 'images')));
});

gulp.task('templates', function(){
	return gulp.src(join(TEMPLATES, '**/*'))
	.pipe(gulp.dest(DEST));
});

gulp.task('js', function() {

	return gulp.src(join(SCRIPTS, 'app.js'))
		.pipe(plumber({
			errorHandler: notify.onError(function(err) {
				return {
					title: "JS",
					message: err.message
				}
			})
		}))
		.pipe(webpack({
			output: {
				filename: 'bundle.js',
			},
		}))
		.pipe(gulp.dest(join(DEST, 'scripts')));
});


gulp.task('clean:dist', function() {
	return del.sync(DEST);
});

gulp.task('build', function (callback) {
	runSequence('clean:dist',
		['templates', 'less', 'js', 'images'],
		callback
	)
})

gulp.task('deploy', function() {
	gulp.src(DEST)
		.pipe(rsync({
			hostname: '77.222.40.32',
			username: 'nordwestru',
			destination: 'merc/public_html/wp-content/themes',
			progress: true,
			incremental: true,
			relative: false,
			emptyDirectories: true,
			recursive: true,
			clean: true,
			exclude: [],
		}));
});
