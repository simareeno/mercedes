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
	imgRetina = require('gulp-img-retina');
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
	RESOURCES = 'resources',
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
		.pipe(gulp.dest(join(RESOURCES, 'styles')));
});


gulp.task('images', function(){
	return gulp.src(join(IMAGES, '**/*.+(png|jpg|jpeg|gif|svg)'))
	.pipe(gulp.dest(join(RESOURCES, 'images')));
});

gulp.task('templates', function(){
	return gulp.src(join(TEMPLATES, '**/*.php'))
	// .pipe(imgRetina())
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
		.pipe(gulp.dest(join(RESOURCES, 'scripts')));
});


gulp.task('clean', function() {
	return del([DEST, RESOURCES]);
});

gulp.task('default', function (callback) {
	runSequence('clean',
		['templates', 'less', 'js', 'images'],
		callback
	)
})


// W A T C H

gulp.task('clean:dist', function() {
	return del.sync(DEST);
});


gulp.task('templates:sync', ['templates'], function(done) {
	browserSync.reload();
	done();
});


gulp.task('less:sync', ['less'], function(done) {
	browserSync.reload();
	done();
});


gulp.task('js:sync', ['js'], function(done) {
	browserSync.reload();
	done();
});

gulp.task('images:sync', ['images'], function(done) {
	browserSync.reload();
	done();
});

gulp.task('browserSync', function() {
	browserSync.init({
		proxy: 'http://localhost:8888/'
	})
	gulp.watch(join(TEMPLATES, '**/*'), ['templates:sync']);
	gulp.watch(join(STYLES, '**/*.less'), ['less:sync']);
	gulp.watch(join(SCRIPTS, '**/*.js'), ['js:sync']);
	gulp.watch(join(IMAGES, '**/*.+(png|jpg|jpeg|gif|svg)'), ['images:sync']);
});

gulp.task('watch', ['browserSync'], function() {
	gulp.watch(join(TEMPLATES, '**/*'), ['templates']);
	gulp.watch(join(STYLES, '**/*.less'), ['less']);
	gulp.watch(join(SCRIPTS, '**/*.js'), ['js']);
	gulp.watch(join(IMAGES, '**/*.+(png|jpg|jpeg|gif|svg)'), ['images']);
});

// D E P L O Y

function deployTo(path) {
	return {
		hostname: '77.222.57.177',
		username: 'amichigrou',
		destination: path,
		progress: true,
		incremental: true,
		relative: false,
		emptyDirectories: true,
		recursive: true,
		clean: true,
		exclude: [],
	}
}

gulp.task('deploy:theme', function() {
	gulp.src(DEST)
		.pipe(rsync(deployTo('public_html/wp-content/themes')));
});

gulp.task('deploy:resources', function() {
	gulp.src(RESOURCES)
		.pipe(rsync(deployTo('public_html')));
});

gulp.task('deploy', ['deploy:resources', 'deploy:theme']);
