var gulp = require('gulp'),
	
	autoprefixer = require('gulp-autoprefixer'),		// префиксы для css
	browserSync = require('browser-sync').create(),		// перезагрузка браузера
		reload = browserSync.reload,
	concat = require('gulp-concat'),					// склейка файлов
	less = require('gulp-less'),						// LESS
	minifyCss = require('gulp-minify-css'),				// минификация css
	//myth = require('gulp-myth'),						// префиксы для css - по умолчанию не установлен
	rename = require('gulp-rename'),					// переименование файлов
	uglify = require('gulp-uglify'),					// сжатие js
	watch = require('gulp-watch'),						// наблюдение за изменением файловой системы
	imagemin = require('gulp-imagemin'),				// сжатие изображений
	cache = require('gulp-cache'),						// кеширование
	plumber = require('gulp-plumber'),					// отлов ошибок
	pagebuilder = require('gulp-pagebuilder');			// умный инклуд html с поддержкой вложенности и передачей параметров

var root = 'bercan',//'site',//'rybka',
	src = root + '/' + 'src';

var path = {
	build : {
		root : root,
		html : root,
		css : root + '/css',
		js : root + '/js',
		img : root + '/img',
	},
	src : {
		root : src,
		html : src + '/html',
		css : src + '/css',
		js : src + '/js',
		img : src + '/img',
		_ : src + '/_',
	},
	block : {
		root : root + '/src/block',
	}
};


gulp.task('default',
[
	'server',
	'dev',
]);
gulp.task('dev',
[
	'dev:html',
	'dev:document-ready:js',
	'dev:window-resize:js',
	'dev:window-scroll:js',
	'dev:body.changeClass:js',
	'dev:changeClass:js',
	'dev:js',
	'dev:block:less',
	'dev:css',
	'dev:img',
]);
gulp.task('production',
[
	'production:html',
	'production:js',
	'production:css',
]);

gulp.task('server', function(){
	browserSync.init({
		server : path.build.root,
	});
	
	
	gulp.watch(path.block.root + '/**/.html', ['dev:html']);
	gulp.watch(path.block.root + '/**/*.html', ['dev:html']);
	gulp.watch(path.src.html + '/**/*.html', ['dev:html']);
	
	
	gulp.watch(path.block.root + '/**/.document-ready.js', ['dev:document-ready:js']);
	gulp.watch(path.block.root + '/**/.window-resize.js', ['dev:window-resize:js']);
	gulp.watch(path.block.root + '/**/.window-scroll.js', ['dev:window-scroll:js']);
	gulp.watch(path.block.root + '/**/body.changeClass.js', ['dev:body.changeClass:js']);
	gulp.watch(path.block.root + '/**/.changeClass.js', ['dev:changeClass:js']);
	gulp.watch(path.src._ + '/concat.document-ready.js', ['dev:js']);
	gulp.watch(path.src._ + '/concat.window-resize.js', ['dev:js']);
	gulp.watch(path.src._ + '/concat.window-scroll.js', ['dev:js']);
	gulp.watch(path.src._ + '/concat.body.changeClass.js', ['dev:js']);
	gulp.watch(path.src._ + '/concat.changeClass.js', ['dev:js']);
	gulp.watch(path.src.js + '/**/*.js', ['dev:js']);
	
	
	gulp.watch(path.build.css + '/**/*.less', ['dev:css']);
	gulp.watch(path.block.root + '/**/.less', ['dev:block:less']);
	
	
	gulp.watch(path.src.img + '/**/*', ['dev:img']);
	
	
});




gulp.task('dev:html', function(){
	return gulp.src(path.src.html + '/**/*.html')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(gulp.dest(path.build.html))
		.pipe(reload({stream : true,}))
	;
});



gulp.task('dev:js', function(){
	return gulp.src(path.src.js + '/**/*.js')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		//.pipe(uglify())
		.pipe(gulp.dest(path.build.js))
		.pipe(reload({stream : true,}))
	;
});

gulp.task('dev:document-ready:js', function(){
	return gulp.src(path.block.root + '/**/.document-ready.js')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(concat('concat.document-ready.js'))
		.pipe(gulp.dest(path.src._))
	;
});

gulp.task('dev:window-resize:js', function(){
	return gulp.src(path.block.root + '/**/.window-resize.js')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(concat('concat.window-resize.js'))
		.pipe(gulp.dest(path.src._))
	;
});

gulp.task('dev:window-scroll:js', function(){
	return gulp.src(path.block.root + '/**/.window-scroll.js')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(concat('concat.window-scroll.js'))
		.pipe(gulp.dest(path.src._))
	;
});

gulp.task('dev:body.changeClass:js', function(){
	return gulp.src(path.block.root + '/**/body.changeClass.js')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(concat('concat.body.changeClass.js'))
		.pipe(gulp.dest(path.src._))
	;
});

gulp.task('dev:changeClass:js', function(){
	return gulp.src(path.block.root + '/**/.changeClass.js')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(concat('concat.changeClass.js'))
		.pipe(gulp.dest(path.src._))
	;
});



gulp.task('dev:css', function(){
	return gulp.src(path.build.css + '/site.less')
		.pipe(plumber())
		.pipe(less())
		.pipe(autoprefixer({
			browsers: ['> 2% in RU', 'last 4 version', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'],	//last 2 versions '> 0%'
			cascade: true,
		}))
		.pipe(minifyCss())
		.pipe(gulp.dest(path.build.css))
		.pipe(reload({stream : true,}))
	;
});

gulp.task('dev:block:less', function(){
	return gulp.src(path.block.root + '/**/.less')
		.pipe(plumber())
		//.pipe(pagebuilder(path.build.root))
		.pipe(concat('gulp-block.less'))
		.pipe(gulp.dest(path.build.css + '/site'))
		//.pipe(reload({stream : true,}))
	;
});

gulp.task('dev:img', function() {
	return gulp.src(path.src.img + '/**/*')
		.pipe(plumber())
		.pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))) //cache
		.pipe(gulp.dest(path.build.img))
	;
});




gulp.task('production:html', function(){
	return gulp.src(path.src.html + '/**/*.html')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(gulp.dest(path.build.html))
	;
});

gulp.task('production:js', function(){
	return gulp.src(path.src.js + '/**/*.js')
		.pipe(plumber())
		.pipe(pagebuilder(path.build.root))
		.pipe(uglify())
		.pipe(gulp.dest(path.build.js))
	;
});

gulp.task('production:css', function(){
	return gulp.src(path.build.css + '/site.less')
		.pipe(plumber())
		.pipe(less())
		.pipe(autoprefixer({
			browsers: ['> 2% in RU', 'last 4 version', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'],	//last 2 versions '> 0%'
			cascade: true,
		}))
		.pipe(minifyCss())
		.pipe(gulp.dest(path.build.css))
	;
});
